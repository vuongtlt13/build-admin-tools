<?php

namespace App\DataTables;

use App\Models\Application;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ApplicationDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('action', 'applications.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Application $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Application $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'dom'       => '<"application-toolbar">Bfrtip',
                'order'     => [[0, 'desc']],
                'rowCallback' => "function( nRow, aData, iDisplayIndex ) {
                    fnRowCallBack(nRow, aData, iDisplayIndex, applicationSelectedRows);
                 }",
                'buttons'   => [
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json'),
                 ],
                 "lengthMenu" => [[10, 25, 50, -1], [10, 25, 50, "All"]],
                 'select' => true
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'code' => (new Column([
                'title' => __('models/application.fields.code'),
                'data' => 'code',
                'searchable' => true,
                'orderable' => false,
                'exportable' => true,
                'printable' => true,
                'attributes' => [
                    'class' => ''
                ],
            ]))
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'applications_datatable_' . time();
    }
}
