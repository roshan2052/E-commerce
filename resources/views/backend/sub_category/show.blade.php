@extends('backend.layouts.app',['panel' => 'Sub Category','page' => 'Show'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>Category</th>
                    <td>{{ $data['row']->category->name }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $data['row']->name }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $data['row']->slug }}</td>
                </tr>
                <tr>
                    <th>Rank</th>
                    <td>{{ $data['row']->rank }}</td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td>{{ $data['row']->short_description ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $data['row']->description ?? '-' }}</td>
                </tr>
                <tr>
                    <th>image</th>
                    <td><img src="{{ asset('images/sub_category/'.$data['row']->image) }}" class="img-fluid" width="100px"></td>
                </tr>
                <tr>
                    <th>Created By</th>
                    <td>{{ $data['row']->createdBy->name }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $data['row']->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $data['row']->updated_at }}</td>
                </tr>
            </table>
        </div>
        <!-- /.col -->
    </div>
@endsection
