<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label(null, __('models/application.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'data-column' => 'name']) !!}
</div>


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label(null, __('models/application.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'data-column' => 'description']) !!}
</div>

