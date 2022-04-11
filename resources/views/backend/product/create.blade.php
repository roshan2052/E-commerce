@extends('backend.layouts.app',['panel' => 'Product','page' => 'Create'])

@section('title', 'Home')

@section('css')
    <link href="{{ asset('dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">List Sub Category</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('product.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'product.store', 'method' => 'post','files' => true]) }}

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
        $('.select2').select2({
            placeholder: "Select a Tag",
            allowClear: true
        });
    });
</script>

@endsection
