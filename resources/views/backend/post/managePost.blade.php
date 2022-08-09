@extends('backend.master')
@section('title')
Manage Post
@endsection
@section('content')
<h5 class="text-right text-success">{{ Session::get('message') }}</h5>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage Post</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>Post ID</th>
                        <th>Post Name</th>
                        <th>Post Title</th>
                        <th>Category Name</th>
                        <th>Post Description</th>
                        <th>Post Image</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Post ID</th>
                        <th>Post Name</th>
                        <th>Post Title</th>
                        <th>Category Name</th>
                        <th>Post Description</th>
                        <th>Post Image</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->post_name}}</td>
                        <td>{{ $post->post_title}}</td>
                        <td>{{ $post->category_name}}</td>
                        <td>{{ $post->short_description}}</td>
                        <td>
                            @foreach (json_decode($post->post_image) as $image)
                            <img src="{{ asset($image) }}" height="40" width="50" alt="IMage Here">
                            @break;
                            @endforeach
                        </td>
                        <td>{{ $post->active ? 'Active':'Inactive' }}</td>
                        <td>
                            @if ($post->active)
                            <a href="{{ route('activePost',['id'=>$post->id]) }}" class="btn btn-sm btn-success"
                                title="Active">
                                <span class="fa fa-arrow-up"></span>
                            </a>
                            @else
                            <a href="{{ route('activePost',['id'=>$post->id]) }}" class="btn btn-sm btn-warning"
                                title="Inactive">
                                <span class="fa fa-arrow-down"></span>
                            </a>
                            @endif
                            <a href="{{ route('editPost',['id'=>$post->id]) }}" class="btn btn-sm btn-info"
                                title="Edit">
                                <span class="fa fa-edit"></span>
                            </a>
                            <a href="{{ route('deletePost',['id'=>$post->id]) }}" class="btn btn-sm btn-danger"
                                title="Delete">
                                <span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
