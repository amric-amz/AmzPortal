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
                        <h4 class="card-title">Clients</h4>
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
                            <form method="post" action="{{ url('store-sub-department') }}">
                                @csrf
                                <div class="form-group">
                                    <select name="department" class="form-control selectpicker">
                                    <option value="">Select A Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->department_id }}">{{ $department->departmentName }}</option>
                                        @endforeach
                                    </select>
                                    @error('department')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subDepartment" class="form-control input-rounded" placeholder="Sub-Department">
                                    @error('subDepartment')
                                    <span class="text-danger"> {{ $message }}</span>
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
