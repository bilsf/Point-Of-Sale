@extends('ad.master')

@section('title', 'Distributor')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent row">
                <h3 class="text-capitalize">Data Distributor</h3>
                <a class="ms-2 btn btn-success w-auto me-2" href="{{ route('distributors.create') }}">
                    Create
                </a>
                <div class="dropdown w-auto">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Export
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('distributors.export-excel') }}">Excel</a></li>
                        <li><a class="dropdown-item" href="{{ route('distributors.export-pdf') }}">PDF</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-3">                
                <table id="example" class="table hover order-column row-border" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Distributor</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('distributors.index') }}",
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "nama_distributor",
                    name: "nama_distributor"
                },
                {
                    data: "alamat",
                    name: "alamat"
                },
                {
                    data: "no_hp",
                    name: "no_hp"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                table.ajax.reload(null, false);
            });
        });
    });
</script>
@endsection
