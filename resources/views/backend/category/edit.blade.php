@extends('backend.layouts.app',['panel' => 'Category','page' => 'Edit'])

@section('title','Home')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card">
        <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
            <a class="btn btn-info btn-md float-right ml-1" href="{{ route('category.index') }}">
                <i class="fas fa-list"></i> List
            </a>
            <a class="btn btn-success btn-md float-right" href="{{ route('category.create') }}">
                <i class="fas fa-pencil-alt"></i>
                Create
            </a>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{ Form::model($data['row'], ['route' => ['category.update',  $data['row']->slug],'method' => 'put', 'files' => true]) }}

            @include('backend.category.includes.main_form')

        {{ Form::close() }}

      </div>
      <!-- /.card -->

    </div>

  </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#name").keyup(function() {
                let Name = $(this).val();
                let slug = Name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#slug").val(slug);
            });
        });
    </script>
@endsection
