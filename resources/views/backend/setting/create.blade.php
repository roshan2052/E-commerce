@extends('backend.layouts.app',['panel' => 'Setting','page' => 'Create'])

@section('title', 'Setting')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'setting.store', 'method' => 'post','files' => true]) }}

                @include('backend.setting.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
