@extends('admin.dashboard.index')
@section('title')
    Edit Post
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Edit Post</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 d-none">
                                <label class="form-label">Blog Id</label>
                                <input type="text" name="id" class="form-control" placeholder="Blog Title..." value="{{ $blog->id }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Blog Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Blog Title..." value="{{ $blog->title }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="10">{{ $blog->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Insert Image</label>
                                <input type="file" name="image[]" class="form-control" accept="image/*" multiple>
                            </div>

                            <div class="d-flex flex-wrap flex-col gap-3" id="image-container">
                                @foreach($blog->files as $item)
                                    <div class="relative" data-image-id="{{ $item->id }}">
                                        <button type="button" class="cross btn btn-danger" onclick="deleteImage({{ $item->id }}, this)">x</button>
                                        <img width="350px" height="60px" src="{{ asset($item->images) }}" class="img-fluid" alt="">
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-outline-danger form-control mt-3" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    function deleteImage(imageId, buttonElement) {
        if (confirm('Are you sure you want to delete this image?')) {
            $.ajax({
                type: 'POST',
                url: '/deleteimage/' + imageId, // Adjust the URL based on your route
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    if (response.success) {
                        // Remove the image from the DOM
                        $(buttonElement).closest('.relative').remove();
                    } else {
                        alert('Failed to delete the image.');
                    }
                },
                error: function () {
                    alert('An error occurred.');
                }
            });
        }
    }
</script>
