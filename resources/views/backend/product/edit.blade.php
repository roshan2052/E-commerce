@extends('backend.layouts.app',['panel' => 'Product','page' => 'Edit'])

@section('title','Home')

@section('css')
    <link href="{{ asset('dist/css/select2.min.css') }}" rel="stylesheet" />
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
        {{ Form::model($data['row'], ['route' => ['product.update',  $data['row']->slug],'method' => 'put', 'files' => true]) }}

            @include('backend.product.includes.main_form')

        {{ Form::close() }}

      </div>
      <!-- /.card -->

    </div>

  </div>
@endsection

@section('js')
    <script src="{{ asset('dist/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tag_id').select2({
                placeholder: "Please select tag",
                allowClear: true
            });

            $('#attribute_id').select2({
                placeholder: "Please select attribute",
                allowClear: true
            });
        });
    </script>
@endsection


