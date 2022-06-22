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
            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Clients</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ url('store-client') }}">
                                @csrf

                                <div class="form-group">
                                    <select name="clientEmail" class="form-control selectpicker">
                                        <option value="">Select A Client Email</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->user_id }}">{{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="sellerCentralName" class="form-control input-default " placeholder="Seller Central Name">
                                </div>

                                <select class="js-example-basic-multiple" class="form-control input-default" placeholder="Select Country" name="states[]" multiple="multiple">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Wyoming">Wyoming</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="America">America</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                </select>


                                <div class="row mg-top" style="margin-top: 20px; margin-left: 2px;">
                                    <div class="service_records">
                                        <input class="" name="service_name" type="text" placeholder="Brand">
                                        <input class="" name="service_email" type="text" placeholder="Storefront">
                                        <a class="extra-fields-service"><button class="bg-color" type="button">+</button></a>
                                    </div>
                                    <br><br>
                                    <div class="service_records_dynamic"></div>
                                </div>

                                <button type="submit" value="Submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2"></div>
        </div>
    </div>


</x-app-layout>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

    $('.extra-fields-service').click(function() {
    $('.service_records').clone().appendTo('.service_records_dynamic');
    $('.service_records_dynamic .service_records').addClass('single remove');
    $('.single .extra-fields-service').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-service"><button class="bg-color" type="button">-</button></a>');
    $('.service_records_dynamic > .single').attr("class", "remove");

    $('.service_records_dynamic input').each(function() {
        var count = 0;
        var fieldname = $(this).attr("name");
        $(this).attr('name', fieldname + count);
        count++;
    });

    });

    $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
    });


    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();

    $('.submit').click(function(){
        var state = $('.states').val();
        alert(state);
    });
});

</script>

<style>
    .bg-color {
    background-color: red !important;
    padding: 9px;
    border-radius: 6px;
    color: white;
}
.mg-to{
    margin-top: 16px;
}
</style>
