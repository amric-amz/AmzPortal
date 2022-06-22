
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->role_id == '1')
                                                    Admin
                                                @endif
                                                @if ($user->role_id == '2')
                                                    Department
                                                @endif
                                                @if ($user->role_id == '3')
                                                    Client
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn-style" href="{{ route('edit-user', $user->user_id) }}"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('Are you sure You want to Delete?')" href="{{route('delete-user', $user->user_id)}}" class="btn-style"><i class="fa fa-trash"></i></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
     $('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
  });

</script>




