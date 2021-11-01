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
                                            <h4 class="m-t-0 header-title"><b>INCOME STATUS</b></h4>


                                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th>Vehicle Type</th>
                                                        <th>Date</th>
                                                        <th>Income</th>
                                                        
                                                        
                                                        
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                                    $count = 0;
                                                    if (is_array($income)) {
                                                        foreach ($income as $value) {
                                                            ?>
                                                            <tr                                                      
                                                                <td><?php echo $value['Vehicle_Type'] ?></td>
                                                                <td><?php echo $value['Date'] ?></td>
                                                                <td><?php echo $value['Price'] ?></td>
                                                                
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

