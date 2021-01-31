<div class="modal fade" id="application-create-modal">
    <form id="application-create-form" method="POST" action="{{route('applications.store')}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('crud.add_new') @lang('models/application.singular')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @include('applications.fields')
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
        var applicationCreateModal = $('#application-create-modal');
        var applicationCreateForm = $('#application-create-modal #application-create-form');
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            applicationCreateForm.on('submit', (evt) => {
                evt.preventDefault();
                sendFormAjax(applicationCreateForm, {
                    table: applicationTable,
                    modal: applicationCreateModal
                })
            });
        });
    </script>
@endpush
