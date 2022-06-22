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
                        <h5 class="text-success" id="result"></h5>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form id="resetForm" name="resetForm">

                                <input type="hidden" id="token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <input type="text" id="department" class="form-control input-default " placeholder="Department">
                                    <span id="validations" style="margin-left: 15px;" class="text-danger"></span>
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


<script>
    $(document).ready(function(){
        $('.btn-submit').click(function(e){
            e.preventDefault();
            var _token = $('#token').val();
            var department = $('#department').val();
            $('.btn-submit').prop('disabled', true);

            $.ajax({
                url: "department-store",
                type: "post",
                dataType: "json",
                data: {
                    "_token": _token,
                    "department": department,
                },
                success:function(response){
                    if(response.success)
                    {
                        $('.btn-submit').prop('disabled', false);
                        document.getElementById("resetForm").reset();
                        $('#result').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Department</strong> Has Been Created Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        $('#validations').hide();
                    }
                },
                error:function(response){
                    $('#validations').html(response.responseJSON.errors.department);
                    $('.btn-submit').prop('disabled', false);
                    $('#result').reset();
                }
            });
        });
    });
</script>
