@extends('admin.dashboard.index')
@section('title')
    Add Post
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div class="card mt-3">
                    <div class="card-header">
                        <h3> Add Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Blog Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Blog Title...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea type="text" name="description" class="form-control" id="" cols="30"
                                          rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Insert Image</label>
                                <input type="file" name="image[]" class="form-control" accept="image/*" MULTIPLE>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-outline-danger form-control mt-3" value="submit">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
