@extends('backend.master')
@section('title')
Manage Category
@endsection
@section('content')

<h5 class="text-right text-success">{{ Session::get('message') }}</h5>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage Category</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatablesSimple" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->category_description }}</td>
                        <td>{{ $category->active ? 'Active':'Inactive' }}</td>
                        <td>
                            @if ($category->active)
                            <a href="{{ route('activeCategory',['id'=>$category->id]) }}" class="btn btn-sm btn-success"
                                title="Active">
                                <span class="fa fa-arrow-up"></span>
                            </a>
                            @else
                            <a href="{{ route('activeCategory',['id'=>$category->id]) }}" class="btn btn-sm btn-warning"
                                title="Inactive">
                                <span class="fa fa-arrow-down"></span>
                            </a>
                            @endif
                            <a href="{{ route('editCategory',['id'=>$category->id]) }}" class="btn btn-sm btn-info"
                                title="Edit">
                                <span class="fa fa-edit"></span>
                            </a>
                            <a href="{{ route('deleteCategory',['id'=>$category->id]) }}" class="btn btn-sm btn-danger"
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
