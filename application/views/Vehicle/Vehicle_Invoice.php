<div class="content-page">
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <!--<button type="button" class="hidden-print btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>-->
                        <ul class="dropdown-menu drop-menu-right" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="page-title">Invoice</h4>
                    <ol class="breadcrumb">
<!--                        <li><a href="#">Ubold</a></li>
                        <li><a href="#">Extras</a></li>
                        <li class="active">Invoice</li>-->
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <h4>Invoice</h4>
                        </div> -->
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 class="text-right"><img src="<?php echo base_url();?>assets/images/the-car-park.png" alt="velonic"></h4>

                                </div>
                                <div class="pull-right">
                                    <!--<h4>Invoice <br>-->
                                        <!--<strong>2015-04-23654789</strong>-->
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="pull-left m-t-30">
                                        <address>
                                            <strong>GALAWILA CAR PARK</strong><br>
                                            No 27<br>
                                            Galwila Road,Homagama<br>
                                            <abbr title="Phone">P:</abbr> (0112) 857 674
                                        </address>
                                    </div>
                                    <div class="pull-right m-t-30">
                                        <!--<p><strong>Order Date: </strong> Jun 15, 2015</p>-->
                                        <p class="m-t-10"><strong>Vehicle Status: </strong> <span class="label label-pink"><?=$status?></span></p>
                                        <p class="m-t-10"><strong>Owner NIC: </strong><?=$nic?></p>
                                         <p class="m-t-10"><strong>Card No: </strong><?=$card?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-h-50"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table m-t-30">
                                            <thead>
                                                <tr>
                                                    <th>Vehicle</th>
                                                    <th>Vehicle Type</th>
                                                    <th>IN time</th>
                                                    <th>OUT Time</th>
                                                    
                                                </tr></thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                if (is_array($vehicles)) {
                                                    foreach ($vehicles as $value) {
//                                                        var_d ump($value);
//                                                        die();
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value['vehicle'] ?></td>
                                                            <td><?php echo $value['vehicleType'] ?></td>
                                                            <td><?php echo $value['VehicleIN'] ?></td>
                                                            <td><?php echo $value['vehicleOUT'] ?></td>
                                                            
                                                            
                                                            
                                                        </tr>


                                                        <?php
                                                    }
                                                }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-3 col-md-offset-9">
                                    <p class="text-right"><b>Sub-total:</b><?='Rs'.$price?></p>
                                    <!--<p class="text-right">Discout: 12.9%</p>-->
                                    <!--<p class="text-right">VAT: 12.9%</p>-->
                                    <hr>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print">
                                <div class="pull-right">
                                    <a href="javascript:window.print()" class="btn btn-inverse  waves-effect waves-light"><i class="fa fa-print"></i></a>
                                    <a href="<?php echo base_url(); ?>index.php/Vehicle/Inactive?vehicle=<?php echo $value['vehicle'] ?>" class="btn btn-primary waves-effect waves-light">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div> <!-- container -->

    </div> <!-- content -->
</div>