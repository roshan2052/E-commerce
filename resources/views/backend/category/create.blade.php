@extends('backend.layouts.app',['panel' => 'Category','page' => 'Create'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">List Category</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('category.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'category.store', 'method' => 'post','files' => true]) }}

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
