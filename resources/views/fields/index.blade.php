@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="float-left">
            @lang('models/fields.plural')
        </h1>
        <h1 class="pull-right">
            <button type="button" class="btn btn-block btn-primary float-right btnAddNewModel"
                            style="margin-top: -10px;margin-bottom: 5px">@lang('crud.add_new')</button>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        @include('fields.table')
    </div>
    @include('fields.create_modal')
    @include('fields.edit_modal')
@endsection

@push('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.btnAddNewModel').on('click', (evt) => {
                resetForm(fieldCreateForm);
                fieldCreateModal.modal('show');
            });
        });
    </script>
@endpush
