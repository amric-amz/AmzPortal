<x-app-layout>
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Client</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User</h4>
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('success') }}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ url('update-user' , $userEdit->user_id) }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ $userEdit->name }}" class="form-control input-default " placeholder="Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ $userEdit->email }}" class="form-control input-rounded" placeholder="Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select name="role_id" class="form-control">
                                        @if ($userEdit->role_id == '1')
                                            <option value="1">Admin</option>
                                        @endif
                                        @if ($userEdit->role_id == '2')
                                            <option value="2">Department</option>
                                        @endif
                                        @if ($userEdit->role_id == '3')
                                            <option value="3">Client</option>
                                        @endif
                                        <option value="1">Admin</option>
                                        <option value="2">Department</option>
                                        <option value="3">Client</option>
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4"></div>
        </div>
    </div>
</x-app-layout>
