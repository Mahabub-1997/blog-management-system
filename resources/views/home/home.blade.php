@extends('home.master')
@section('title')
    See Post
@endsection

@section('content')
   <div class="container">
       <div class="text-center my-2">
           <h1>See Post</h1>
           <hr/>
       </div>
       @foreach($blogs as $blog)
       <div class="row">
           <div class="col-md-12">
               <div class="card mb-5 shadow-sm">
                   <div class="d-flex flex-wrap flex-col gap-3">
                       @foreach($blog->files as $item)
                           <img width="350px" height="60px"  src="{{asset($item->images)}}" class="img-fluid" alt="">
                       @endforeach
                   </div>                   <div class="card-body">
                       <div class="card-title">
                           <h3>{{$blog->title}}</h3>
                       </div>
                       <div class="card-text">
                           <p>{{$blog->description}}</p>
                       </div>
{{--                       <a href="" class="btn btn-info mx-2 mt-1">Edit</a>--}}
{{--                       <a href="" class="btn btn-info mx-2 mt-1">Delete</a>--}}
                   </div>
               </div>
           </div>
       </div>
       @endforeach
   </div>
@endsection
