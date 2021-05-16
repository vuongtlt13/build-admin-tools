@push('css')
    @include('layouts.datatables_css')
@endpush

<div class="card" style="overflow-y: auto;">
    <div class="card-body">
        {!! $dataTable->table(['width' => '100%', 'class' => 'table table-bordered table-hover dataTable', 'id' => 'application-datatable']) !!}
    </div>
</div>

@push('scripts')
    @include('layouts.datatables_js')
    @include('applications.toolbar_js')
    {!! $dataTable->scripts() !!}

    <script type="text/javascript">
        var applicationSelectedRows = [];
        var applicationTable = null;
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            applicationTable = window.LaravelDataTables["application-datatable"];
            initDatatableEvent('#application-datatable', applicationSelectedRows);
        });
    </script>
@endpush
