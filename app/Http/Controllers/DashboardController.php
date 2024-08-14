<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $this->blog = Blog::with('files')->where("created_by",Auth::id())->get();
        return view('admin.dashboard.dashboard',[
            'blogs'=>$this->blog
        ]);
    }
}
