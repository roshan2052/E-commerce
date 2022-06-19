@extends('backend.layouts.app',['panel' => 'Product','page' => 'Edit'])

@section('title','Home')

@section('css')
    <link href="{{ asset('dist/css/select2.min.css') }}" rel="stylesheet" />
    <style>
        .select2-selection__choice{
            background-color : #1c21ccd0 !important;
        }
    </style>
@endsection

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
        {{ Form::model($data['row'], ['route' => ['product.update',  $data['row']->slug],'method' => 'put', 'files' => true, 'id' => 'main_form']) }}

            @include('backend.product.includes.main_form')

        {{ Form::close() }}

      </div>
      <!-- /.card -->

    </div>

  </div>
@endsection

@section('js')
    @include('backend.product.includes.script')
@endsection


