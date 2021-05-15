@push('css')
    @include('layouts.datatables_css')
@endpush

<div class="card" style="overflow-y: auto;">
    <div class="card-body">
        {!! $dataTable->table(['width' => '100%', 'class' => 'table table-bordered table-hover dataTable', 'id' => 'service-datatable']) !!}
    </div>
</div>

@push('scripts')
    @include('layouts.datatables_js')
    @include('services.toolbar_js')
    {!! $dataTable->scripts() !!}

    <script type="text/javascript">
        var serviceSelectedRows = [];
        setTimeout(() => {
            window.serviceTable = window.LaravelDataTables["service-datatable"];
        }, 10);
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            initDatatableEvent('#service-datatable', serviceSelectedRows);
        });
    </script>
@endpush
