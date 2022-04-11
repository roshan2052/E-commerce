<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'name'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('slug', 'Slug *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Slug']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'slug'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('rank', 'Rank *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::number('rank', null, ['class' => 'form-control', 'id' => 'rank', 'placeholder' => 'Rank']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'rank'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('short_description', 'Short Description', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'short_description', 'placeholder' => 'Short Description','rows' => 2]) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'short_description'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('description', 'Description', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Description','rows' => 4]) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'description'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('meta_title', 'Meta Title', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('meta_title', null, ['class' => 'form-control', 'id' => 'meta_title', 'placeholder' => 'Meta Title']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'meta_title'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('meta_description', 'Meta Description', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('meta_description', null, ['class' => 'form-control', 'id' => 'meta_description', 'placeholder' => 'Meta Description','rows' => 4]) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'meta_description'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('meta_keyword', 'Meta Keyword', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('meta_keyword', null, ['class' => 'form-control', 'id' => 'meta_keyword', 'placeholder' => 'Meta Keyword']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'meta_keyword'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('image_field', 'Image', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::file('image_field', null, ['class' => 'form-control', 'id' => 'image_field']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'image_field'])
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
