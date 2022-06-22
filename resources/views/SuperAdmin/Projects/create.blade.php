<link href="{{ asset('DashboardFiles/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<x-app-layout>

    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Project</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <select name="clientEmail" class="form-control selectpicker">
                                        <option value="">Select A Email</option>
                                        <option value="">ahtisham@amzonestep.com</option>
                                        <option value="">omais@amzonestep.com</option>
                                        <option value="">amric@amzonestep.com</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="brands" class="form-control selectpicker">
                                        <option value="">Select A Brand</option>
                                        <option value="">Amazone</option>
                                        <option value="">Walmart</option>
                                        <option value="">Daraz</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="storefront" class="form-control selectpicker">
                                        <option value="">Select A Storefront</option>
                                        <option value="">Walmart</option>
                                        <option value="">Daraz</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="asin" class="form-control input-default selectpicker" placeholder="ASIN">
                                </div>


                                <br>
                                <div class="form-group" style="padding-left: 16px;">
                                    <label class="control-label" for="field1">Department</label><br>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="check1" value="" checked="">
                                        <label class="form-check-label" for="check1">Option 1</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="check2" value="">
                                        <label class="form-check-label" for="check2">Option 2</label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input" id="check3" value="" disabled="">
                                        <label class="form-check-label" for="check3">Disabled</label>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group" style="padding-left: 16px;">
                                    <label class="control-label" for="field1">Sub-Department</label><br>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="check1" value="">
                                        <label class="form-check-label" for="check1">Option 1</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="check2" value="">
                                        <label class="form-check-label" for="check2">Option 2</label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input type="checkbox" class="form-check-input" id="check3" value="">
                                        <label class="form-check-label" for="check3">Disabled</label>
                                    </div>
                                </div>

                                <br>
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
