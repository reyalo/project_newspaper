@extends('backend.master')
@section('title')
Add Post
@endsection
@section('content')
<h5 class="text-right text-success">{{ Session::get('message') }}</h5>
<div class="container">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center text-primary">Add Post</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <tr>
                            <th>Post Name:</th>
                            <td><input type="text" name="post_name" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Post Title:</th>
                            <td><input type="text" name="post_title" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Category Name:</th>
                            <td>
                                <select name="category_id" class="form-control" id="">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>



                        <tr>
                            <th>Post Shortdescription:</th>
                            <td><textarea name="short_description" class="form-control" id="" cols="30" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Post Longdescription:</th>
                            <td><textarea name="long_description" class="form-control" id="" cols="30" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Post Image:</th>
                            <td><input type="file" name="post_image[]" class="form-control" multiple></td>
                        </tr>
                        <tr>
                            <th>Activation Status:</th>
                            <td>
                                <input type="radio" name="active" checked value="1"><span class="mx-1">Active</span>
                                <input type="radio" name="active" value="0"><span class="mx-1">In Active</span>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-success btn-sm px-3" name="btn" value="Save"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
