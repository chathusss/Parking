<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="col-sm-12 col-md-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-horizontal group-border-dashed"  class="col-md-5">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-box table-responsive">
                                            <h4 class="m-t-0 header-title"><b>Vehicle Entered To Park</b></h4>


                                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Owner NIC No</th>
                                                        <th>Vehicle Number</th>
                                                        <th>Vehicle Type</th>
                                                        <th>Vehicle IN Time</th>
                                                        <!--<th>Vehicle OUT Time</th>-->
                                                        
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                                    $count = 0;
                                                    if (is_array($active)) {
                                                        foreach ($active as $value) {
                                                            ?>
                                                            <tr>
                                                              <td><?php echo $value['Owner_NIC'] ?></td>
                                                                <td><?php echo $value['Vehicle_Number'] ?></td>                                                      
                                                                <td><?php echo $value['Vehicle_Type'] ?></td>
                                                                <td><?php echo $value['Vehicle_IN_Time'] ?></td>
                                                                <!--<td><?php echo $value['Vehicle_OUT_Time'] ?></td>-->
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
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

