<!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card-box">

                        <h4 class="m-t-0 header-title"><b>Vehicle Details Form</b></h4>
                        <p class="text-muted font-13 m-b-30">
                            Enter Vehicle Details Here
                        </p>
                        <div class="card-box">
                            <div class="row card-box">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">Vehicle Number</label>
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" oninput="hide()" type="text" id="vehicle" name="vehicle" class="form-control" required placeholder="Enter Vehicle Number" />
                                            </div>
                                            <div class="row">
                                                <span class="validation" id="vehicle_number" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                            </div>
                            <div class="row card-box">
                                <div  class="form-group">
                                    <label class="col-sm-2  control-label">Vehicle Type</label>
                                    <div class="col-sm-5" >
                                        <div class="row"id="vehi_type">
                                            <div class="radio radio-purple radio-inline">
                                                <input  id="two" type="radio" class="second"  value="two" name="type" >

                                                <label  class="wrap" for="yes">Two Wheeler</label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input id="three" type="radio" class="second"  value="three" name="type"  >
                                                <label class="wrap" for="no">Three Wheeler</label>
                                            </div>
                                            <div class="radio radio-danger radio-inline">
                                                <input  id="four" type="radio" class="second"  value="four" name="type" >

                                                <label class="wrap" for="reject">Four Wheeler</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label  class="validation" id="s_change" style="color: red;"></label>  
                                            <lable   id="vehicle_type" ></font></lable>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" row card-box">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-sm-2  control-label">Owner NIC</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" oninput="hide()" type="text" id="nic" name="nic" class="form-control" required placeholder="Issued Card Number" />
                                            </div>
                                            <div class="row">
                                                <span class="validation" id="Owner" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-sm-2  control-label">Issued Card Number</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" oninput="hide()" type="text" id="card_no" name="card_no" class="form-control" required placeholder="Issued Card Number" />
                                            </div>
                                            <div class="row">
                                                <span class="validation" id="issued_card" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row card-box">
                                <div class="col-lg-6">
                                    <!--<div class="col-lg-6">-->
                                    <div class="form-group">
                                        <label style="display: none" id="in_l" class="col-sm-2  control-label">IN Time</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input style="display: none" data-parsley-type="alphanum"  type="text" id="in_time" name="in_time" class="form-control" required placeholder="Out Time" />
                                            </div>
                                            <div class="row">
                                                <span class="validation" id="v_in" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--</div>-->
                                </div>
                                <div class="col-lg-6">
                                    <!--<div class="col-lg-5">-->
                                    <div class="form-group">
                                        <label style="display: none" id="out_l" class="col-sm-2  control-label">OUT Time</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input style="display: none" data-parsley-type="alphanum" type="text" id="out_time" name="out_time" class="form-control" required placeholder="Out Time" />
                                            </div>
                                            <div class="row">
                                                <span class="validation" id="v_out" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--</div>-->
                                </div>

                            </div>
                            <button id="s_submit"  onclick="vehicle_submit()" class="btn btn-primary btn-custom waves-effect waves-light ladda-button " data-style="expand-right">Submit</button>
                            <button id="s_find" type="button" onclick="vehicle_find()" class="btn btn-success btn-custom waves-effect waves-light ladda-button " data-style="expand-right">Find</button>
                            <button style="display: none" id="print" class="btn btn-icon waves-effect waves-light btn-danger " onclick="window.location.href='<?php echo base_url()?>index.php/Vehicle/invoice'"> <span><i  class="md md-receipt"></i> </span></button>


                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>
</div>
