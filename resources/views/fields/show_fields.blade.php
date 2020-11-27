<!-- Model Id Field -->
<div class="form-group">
    {!! Form::label('model_id', __('models/fields.fields.model_id').':') !!}
    <p>{{ $field->model_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/fields.fields.name').':') !!}
    <p>{{ $field->name }}</p>
</div>

<!-- Db Type Field -->
<div class="form-group">
    {!! Form::label('db_type', __('models/fields.fields.db_type').':') !!}
    <p>{{ $field->db_type }}</p>
</div>

<!-- Html Type Field -->
<div class="form-group">
    {!! Form::label('html_type', __('models/fields.fields.html_type').':') !!}
    <p>{{ $field->html_type }}</p>
</div>

<!-- Primary Field -->
<div class="form-group">
    {!! Form::label('primary', __('models/fields.fields.primary').':') !!}
    <p>{{ $field->primary }}</p>
</div>

<!-- Unique Field -->
<div class="form-group">
    {!! Form::label('unique', __('models/fields.fields.unique').':') !!}
    <p>{{ $field->unique }}</p>
</div>

<!-- Auto Increment Field -->
<div class="form-group">
    {!! Form::label('auto_increment', __('models/fields.fields.auto_increment').':') !!}
    <p>{{ $field->auto_increment }}</p>
</div>

<!-- Nullable Field -->
<div class="form-group">
    {!! Form::label('nullable', __('models/fields.fields.nullable').':') !!}
    <p>{{ $field->nullable }}</p>
</div>

<!-- Creatable Field -->
<div class="form-group">
    {!! Form::label('creatable', __('models/fields.fields.creatable').':') !!}
    <p>{{ $field->creatable }}</p>
</div>

<!-- Editable Field -->
<div class="form-group">
    {!! Form::label('editable', __('models/fields.fields.editable').':') !!}
    <p>{{ $field->editable }}</p>
</div>

