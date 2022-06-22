
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
                        $('#result').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Department</strong> Has Been Created Successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
