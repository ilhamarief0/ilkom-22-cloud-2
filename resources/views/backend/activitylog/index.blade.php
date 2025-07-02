@extends('backend.layouts.app')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0 d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        <h3 class="card-label">Activity Logs</h3>
                    </div>
                    <button class="btn btn-sm btn-light-primary" id="reload-table">
                        <i class="fas fa-sync-alt"></i> Reload
                    </button>
                </div>
                <!--end::Header-->
                
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="kt_datatable" style="width:100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Log Description</th>
                                    <th>Properties</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    if (!$.fn.DataTable) {
        console.error("Yajra DataTables tidak ditemukan!");
        return;
    }

    const table = $('#kt_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("backend.activitylogs.dataTable") }}',
        language: {
            emptyTable: "Tidak ada data aktivitas.",
            processing: "Memuat..."
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'user', name: 'user' },
            { data: 'description', name: 'description' },
            {
                data: 'properties',
                name: 'properties',
                orderable: false,
                searchable: false,
                render: function(data) {
                    return data
                        ? '<pre style="white-space:pre-wrap; word-break:break-word; max-height:200px; overflow:auto;">' + data + '</pre>'
                        : '<span class="text-muted">Tidak ada detail</span>';
                }
            },
            { data: 'created_at', name: 'created_at' }
        ],
        order: [[4, 'desc']],
    });

    $('#reload-table').on('click', function() {
        table.ajax.reload();
    });
});
</script>
@endpush
