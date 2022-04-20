<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'name'])
        </div>
    </div>

    <div class="form-group row">
        <div class="col-3">
            {!! Form::label('status', 'Status',["class" => "radiostatus"]) !!}
        </div>
        <div class="col-9">
            <label class="radio-inline">
            {!! Form::radio('status', 1, true) !!} Active </label>
            <label class="radio-inline">
            {!! Form::radio('status',0, false) !!} De-Active </label>
        </div>
    </div>

</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
