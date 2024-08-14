<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $this->blog = Blog::with('files')->get();
        return view('home.home',[
            'blogs'=>$this->blog
        ]);
    }
    public function newBlog(){
        return view('admin.dashboard.add');
    }

    public function editBlog($id){
        $blog = Blog::with('files')->where("id",$id)->first();
        return view('admin.dashboard.edit',[
            'blog'=>$blog
        ]);
    }

    public function deleteImage($id)
    {
        // Find the image record by ID
        $file = Image::find($id); // Assuming you have an Image model

        if ($file) {
            // Define the path to the image file in the public directory
            $filePath = public_path($file->images); // Adjust the path as necessary

            // Delete the file from the public directory
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file
            }

            // Remove the image record from the database
            $file->delete();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }



    public function saveBlog(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title = $request ->title;
        $this->blog->description =$request->description;
        $this->blog->created_by = Auth::id();
        $this->blog->save();
        $this->saveImage($request,$this->blog->id);
        return redirect()->action([DashboardController::class,'index']);
    }
    public function updateBlog(Request $request)
    {
        $this->blog = Blog::find($request->id);
        $this->blog->title = $request ->title;
        $this->blog->description =$request->description;
        $this->blog->created_by = Auth::id();
        $this->blog->save();
        $this->saveImage($request,$this->blog->id);
        return redirect()->action([DashboardController::class,'index']);
    }
    private function saveImage($request,$blogId)
    {
        $files = $request->file('image');
        foreach ($files as $item) {
            $imageName=rand(). '.'. $item->getClientOriginalExtension();
            $directory = 'asset/image/';
            $imgUrl=$directory.$blogId.'-'.$imageName;
            $item->move($directory,$blogId.'-'.$imageName);
            $image = new Image();
            $image->blog_id = $blogId;
            $image->images = $imgUrl;
            $image->save();
        }
    }
    public function deleteAll($id){
        $files = Image::where("blog_id",$id)->get();

        foreach ($files as $file){
            $filePath = public_path($file->images); // Adjust the path as necessary

            // Delete the file from the public directory
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file
            }
            $file->delete();
        }
        Blog::destroy($id);
        return redirect()->action([DashboardController::class,'index']);
    }

}
