<div class="modal fade" id="service-create-modal">
    <form id="service-create-form" method="POST" action="{{route('services.store')}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('crud.add_new') @lang('models/service.singular')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @include('services.fields')
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </form>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@push('scripts')
    <script type="text/javascript">
        var serviceCreateModal = $('#service-create-modal');
        var serviceCreateForm = $('#service-create-modal #service-create-form');
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            serviceCreateForm.on('submit', (evt) => {
                evt.preventDefault();
                sendFormAjax(serviceCreateForm, {
                    table: serviceTable,
                    modal: serviceCreateModal
                })
            });
        });
    </script>
@endpush
