<x-app-layout>
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Department</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4 class="card-title">Clients</h4> --}}
                        <h5 class="">UPDATE DEPARTMENT FORN</h5>
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
                            <form method="post" action="{{ url('update-department-list' , $departmentsEdit->department_id ) }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="department" id="department" value="{{ $departmentsEdit->departmentName }}" class="form-control input-default " placeholder="Department">
                                    @error('department')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" value="Submit" class="btn btn-success btn-submit">Create Department</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4"></div>
        </div>
    </div>
</x-app-layout>

