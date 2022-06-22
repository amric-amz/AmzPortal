
<link href="{{ asset('DashboardFiles/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<x-app-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Get All Client List</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ Session::get('success') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departmentListening as $listening)
                                        <tr>
                                            <td>{{ $listening->department_id }}</td>
                                            <td>{{ $listening->departmentName }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn-style" href="{{ route('edit-department-list', $listening->department_id) }}"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('Are you sure You want to Delete?')" href="{{ route('delete-department-list', $listening->department_id) }}" class="btn-style"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- Datatable -->
<script src="{{ asset('DashboardFiles/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('DashboardFiles/js/plugins-init/datatables.init.js') }}"></script>

<style>
    .btn-xs {
    font-size: 21px !important;
    font-weight: 600;
    }

.sharp.btn-xs {
    padding: 3px;
    width: 26px;
    height: 26px;
    color: #00b4a7 !important;
    min-width: 26px;
    min-height: 26px;
}

.btn-primary {
    color: #fff;
    background-color: #ffffff !important;
    border-color: #ffffff !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.previous, .dataTables_wrapper .dataTables_paginate .paginate_button.next {
    background: #00b4a7 !important;
    color: #fff !important;
    margin: 0 10px;
    border: 0px solid #00b4a7 !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    color: #fff !important;
    background: #00b4a7 !important;
}
</style>


