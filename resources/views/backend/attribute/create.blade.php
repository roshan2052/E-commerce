@extends('backend.layouts.app',['panel' => 'Attribute','page' => 'Create'])

@section('title', 'Attribute')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">List Attribute</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('attribute.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'attribute.store', 'method' => 'post','files' => true]) }}

                @include('backend.attribute.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
