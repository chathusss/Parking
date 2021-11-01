<div class="content-page">
    <div class="content">
        <div class="container">

            <!--<div class="row">-->
            <div class="col-sm-12 col-md-12">
                <!--<div class="card-box">-->
                <!--<div class="card-box">-->
                    <h4 class="m-t-0 m-b-30 header-title"><b></b></h4>
                    <!--<div class="row">-->
                        <div class="col-lg-12">
                            <h3><b>Income Details</b></h3>  
                            <div class="card-box">
                                
                                <!--<div class="card-box">-->
                                    <div class="row hidden-print">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label id="froml" class="control-label col-sm-2">From</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose1">
                                                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                    </div>
                                                     <div class="row">
                                                        <lable class="validation"  id="from" style="color: red;"></font></lable>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label id="tol" class="control-label col-sm-2">To</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose2">
                                                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                    </div>
                                                     <div class="row">
                                                        <lable class="validation"  id="To" style="color: red;"></font></lable>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-lg-1">
                                            <button id="i_submit"  onclick="income()" class="btn btn-success btn-custom waves-effect waves-light ladda-button " data-style="expand-right">Submit</button>
                                        </div>
                                    </div>
                                <!--</div>-->

                            </div>
                            <div class="form-horizontal group-border-dashed"  class="col-md-5">
                                <div class="row">
                                    <!--<span><img src="<?php echo base_url(); ?>assets/images/man.png" height="40"/></span>-->
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">

                                            <!--<h4 class="m-t-0 header-title"><b>Add Categories</b></h4>-->
                                            <p class="text-muted font-13 m-b-30">

                                            </p>

                                            <table name="income"  id="income" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        
                                                        
                                                        <th>Vehicle Type</th>
                                                        <th>Date</th>
                                                        <th>Price</th>



                                                    </tr>
                                                </thead>


                                                
                                            </table>
                                            <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="<?php echo base_url();?>index.php/Income" class="btn btn-primary waves-effect waves-light">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!--</div>-->
<!--</div>-->
<!--</div>-->
