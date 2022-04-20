@extends('backend.layouts.app',['panel' => 'Setting','page' => 'Edit'])

@section('title','Home')

@section('content')
<div class="row">

    <!-- left column -->
    <div class="col-md-12">
    @include('backend.includes.flash_message')

      <!-- general form elements -->
      <div class="card card">
        <div class="card-header">
            <h3 class="card-title">Edit Setting</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{ Form::model($data['row'], ['route' => ['setting.update',  $data['row']->id],'method' => 'put', 'files' => true]) }}

            @include('backend.setting.includes.main_form')

        {{ Form::close() }}

      </div>
      <!-- /.card -->

    </div>

  </div>
@endsection
