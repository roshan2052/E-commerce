@extends('backend.layouts.app',['panel' => 'Tag','page' => 'Show'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">Show Tag</h3>
                    <a class="btn btn-info btn-md float-right ml-1" href="{{ route('tag.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                    <a class="btn btn-success btn-md float-right" href="{{ route('tag.create') }}">
                        <i class="fas fa-pencil-alt"></i>
                        Create
                    </a>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{ $data['row']->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $data['row']->slug }}</td>
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
        </div>
        <!-- /.col -->
    </div>
@endsection
