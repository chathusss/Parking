<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                        <ul class="dropdown-menu drop-menu-right" role="menu">

                        </ul>
                    </div>

                    <h4 class="page-title">Dashboard</h4>
                    <p class="text-muted page-title-alt">Welcome to Car Park Admin Panel!!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon  pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/placeholder.png" alt="velonic"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $total ?></b></h3>
                            <p class="text-muted">Total Enter Vehicles</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/motorcycle.png" alt="velonic"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $TWO ?></b></h3>
                            <p class="text-muted">Total Enter Two wheels</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon  pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/rickshaw.png" alt="velonic"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $THREE ?></b></h3>
                            <p class="text-muted">Total Enter Three Wheels</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon  pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/surf-van.png" alt="velonic"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $FOUR ?></b></h3>
                            <p class="text-muted">Total Enter Four Wheels</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-danger pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/two.png" alt="velonic"> </i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $two_slot ?></b></h3>
                            <p class="text-muted">Available Two Wheels Slots </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-warning pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/three.png" alt="velonic"> </i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $three_slot ?></b></h3>
                            <p class="text-muted">Available Three Wheel Slots </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-success pull-left">
                            <i><img src="<?php echo base_url(); ?>assets/images/car.png" alt="velonic"> </i>

                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter"><?= $four_slots ?></b></h3>
                            <p class="text-muted">Available Four Wheel Slots </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!--<div >-->
                    
                <!--</div>-->   
            </div>
            <div class="row card-box">
                        <h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>
                         <div id="googleMap" style="width:100%;height:400px;"></div>
                        <!--<div id="gmaps-markers" class="gmaps"></div>-->
                    </div>


            <!-- end row -->


            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">

    </footer>

</div>
