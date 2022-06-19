<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('category_id', 'Category *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::select('category_id',$data['categories'], null, ['class' => 'form-control', 'id' => 'category_id', 'placeholder' => 'Please Select Category']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'category_id'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('sub_category_id', 'Sub Category *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::select('sub_category_id',$data['sub_categories'], null, ['class' => 'form-control', 'id' => 'sub_category_id', 'placeholder' => 'Please Select Sub Category']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'sub_category_id'])
        </div>
    </div>

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
        {{ Form::label('code', 'Code *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code', 'placeholder' => 'Code']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'code'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('price', 'Price *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::number('price', null, ['class' => 'form-control', 'id' => 'price', 'placeholder' => 'Price']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'price'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('stock', 'Stock *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::number('stock', null, ['class' => 'form-control', 'id' => 'stock', 'placeholder' => 'Stock']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'stock'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('quantity', 'Quantity *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::number('quantity', null, ['class' => 'form-control', 'id' => 'quantity', 'placeholder' => 'Quantity']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'quantity'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('image_field', 'Image', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::file('image_field', null, ['class' => 'form-control', 'id' => 'image_field']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'image_field'])
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
        {{ Form::label('tag_id', 'Tag *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::select('tag_id[]',$data['tags'], isset($data['row']) ? $data['row']->tags->pluck('id') : null, ['class' => 'form-control select2', 'id' => 'tag_id', 'multiple' => true]) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'tag_id'])
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

    <table class="table table-striped table-bordered" id="attribute_wrapper">
        <tr>
            <th>Attribute</th>
            <th>Value</th>
            <th>Action</th>
        </tr>

        @if(isset($data['row']))
            @foreach($data['row']->productAttributeDetails as $product_attribute_detail)
                <tr>
                    <td>
                        {!! Form::select('attribute_id[]',$data['attributes'],$product_attribute_detail->attribute_id,['class' => 'form-control','placeholder' => "Select Attribute"]) !!}
                        @include('backend.includes.validation_error_message',['fieldname' => 'attribute_id.*'])
                    </td>
                    <td>
                        {{ Form::text('attribute_value[]', $product_attribute_detail->value, ['class' => 'form-control', 'id' => 'stock', 'placeholder' => 'Enter Attribute Value']) }}
                    <td>
                        <a class="btn btn-block btn-danger sa-warning remove_attribute"><i class="fa fa-trash"></i></a>
                    </td>
                    {{ Form::hidden('product_attribute_detail_id[]', $product_attribute_detail->id) }}
                </tr>
            @endforeach
        @else
            <tr>
                <td>
                    {!! Form::select('attribute_id[]',$data['attributes'],null,['class' => 'form-control','placeholder' => "Select Attribute"]) !!}
                    @include('backend.includes.validation_error_message',['fieldname' => 'attribute_id.*'])
                </td>
                <td>
                    {{ Form::text('attribute_value[]',null, ['class' => 'form-control', 'id' => 'stock', 'placeholder' => 'Enter Attribute Value']) }}
                <td>
                    <a class="btn btn-block btn-danger sa-warning remove_attribute"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endif
    </table>

    <button class="btn btn-info" type="button" id="addMoreAttribute" style="margin-bottom: 20px">
        <i class="fa fa-plus"></i>
        Add
    </button>
</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
