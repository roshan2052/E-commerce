<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('name', 'Name *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'name'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('address', 'Address *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Address']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'address'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('email', 'Email *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'email'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('phone', 'Phone *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::number('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'phone'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('logo_image', 'Logo', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::file('logo_image', null, ['class' => 'form-control', 'id' => 'logo_image']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'logo_image'])
            @if(isset($data['row']->logo))
                <img src="{{ asset('images/setting/' . $data['row']->logo) }}" class="img-fluid" width="100px">
            @endif
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('map_address', 'Google Map', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::url('map_address', null, ['class' => 'form-control', 'id' => 'map_address', 'placeholder' => 'Google Map']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'map_address'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('fb_link', 'Facebook Link', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::url('fb_link', null, ['class' => 'form-control', 'id' => 'fb_link', 'placeholder' => 'Facebook Link']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'fb_link'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('insta_link', 'Instagram Link', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::url('insta_link', null, ['class' => 'form-control', 'id' => 'insta_link', 'placeholder' => 'Instagram Link']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'insta_link'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('twitter_link', 'Twitter Link', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::url('twitter_link', null, ['class' => 'form-control', 'id' => 'twitter_link', 'placeholder' => 'Twitter Link']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'twitter_link'])
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
