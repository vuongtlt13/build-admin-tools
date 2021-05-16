<!-- Application Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label(null, __('models/service.fields.application_id').':') !!}
    {!! Form::number('application_id', null, ['class' => 'form-control', 'data-column' => 'application_id']) !!}
</div>


<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label(null, __('models/service.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'data-column' => 'name']) !!}
</div>


<!-- Is Active Field -->
<div class="form-group col-sm-6">
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', 0, ['class' => 'ignore-reset']) !!}
        {!! Form::checkbox('is_active', '1', null, ['data-column' => 'is_active']) !!} {{__('models/service.fields.is_active')}}
    </label>
</div>

