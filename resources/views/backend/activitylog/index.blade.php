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
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Activity Logs</h3>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Datatable-->
                    <table class="table table-bordered table-hover" id="kt_datatable">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th>User</th>
                                <th>Log Description</th>
                                <th>Properties</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <!--end::Datatable-->
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
    $(document).ready(function () {
        if (typeof $.fn.DataTable === "undefined") {
            console.error("Yajra DataTables plugin is not loaded.");
            return;
        }

        $('#kt_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("backend.activitylogs.dataTable") }}',
                type: 'GET',
                error: function(xhr) {
                    console.error("Failed to load data:", xhr.responseText);
                    alert("Terjadi kesalahan saat memuat data log.");
                }
            },
            language: {
                emptyTable: "Tidak ada data ditemukan",
                processing: "Memuat data..."
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
                    render: function (data) {
                        if (data && typeof data === 'string' && data.trim() !== '') {
                            return `<pre class="mb-0">${data}</pre>`;
                        }
                        return '<span class="text-muted">No Details</span>';
                    }
                },
                { data: 'created_at', name: 'created_at' }
            ],
            order: [[4, 'desc']]
        });
    });
</script>
@endpush
