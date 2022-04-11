@extends('backend.layouts.app',['panel' => 'Product','page' => 'Edit'])

@section('title','Home')


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select a Tag",
            allowClear: true
        });
    });
</script>

@endsection
