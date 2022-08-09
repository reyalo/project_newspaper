@extends('backend.master')
@section('title')
Add Category
@endsection
@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="text-right text-success">{{ Session::get('message') }}</h5>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center text-primary">Add Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('storeCategory') }}" method="POST">
                    @csrf
                    <table class="table">
                        <tr>
                            <th>Category Name:</th>
                            <td><input type="text" name="category_name" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Category Description:</th>
                            <td><textarea name="category_description" class="form-control" id="
                  " cols="30" rows="5"></textarea></td>
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
