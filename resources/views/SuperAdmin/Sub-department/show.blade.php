
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
                                        <th>Sub-Demartment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($sub_departments as $sub_department)
                                        <tr>
                                            <td>{{ $sub_department->sub_departmentId }}</td>
                                            <td>{{ $sub_department->sub_department_name }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn-style" href="{{ route('edit-sub-department', $sub_department->sub_departmentId) }}"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('Are you sure You want to Delete?')" href="{{ route('delete-sub-department', $sub_department->sub_departmentId) }}" class="btn-style"><i class="fa fa-trash"></i></a>
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


