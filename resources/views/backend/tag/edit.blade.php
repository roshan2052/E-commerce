@extends('backend.layouts.app',['panel' => 'Tag','page' => 'Edit'])

@section('title','Home')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">List Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{ Form::model($data['row'], ['route' => ['tag.update',  $data['row']->slug],'method' => 'put', 'files' => true]) }}

            @include('backend.tag.includes.main_form')

        {{ Form::close() }}

      </div>
      <!-- /.card -->

    </div>

  </div>
@endsection
