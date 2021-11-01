<div class="content-page">
    <div class="content">
        <div class="container">

            <!--<div class="row">-->
            <div class="col-sm-12 col-md-12">
                <div class="card-box">
                      <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b></b></h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><b>User Create</b></h3>  

                            <div class="form-horizontal group-border-dashed"  class="col-md-5">
                               
                                <div  data-parsley-validate novalidate>
                                 
                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">User Name</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" parsley-trigger="change"  type="text" id="username" name="username" class="form-control" required placeholder="User Name" />
                                            </div>
                                            <div class="row">

                                                <lable id="User_Name" style="color: red;"></lable>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">Password</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" parsley-trigger="change"  type="password" id="userpassword" name="userpassword" class="form-control" required placeholder="Password" />
                                            </div>
                                            <div class="row">

                                                <lable id="u_password" style="color: red;"></lable>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">Confirm Password</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input  data-parsley-equalto="#upassword" data-parsley-type="alphanum" parsley-trigger="change"  type="password" id="userpassword2" name="userpassword2" class="form-control" required placeholder="Confirm Password" />
                                            </div>
                                            <div class="row">

                                                <lable id="u_password2" style="color: red;"></lable>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">Email</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input  data-parsley-type="alphanum" parsley-trigger="change"  type="email" id="useremail" name="useremail" class="form-control" required placeholder="Email" />
                                            </div>
                                            <div class="row">

                                                <lable id="U_email" style="color: red;"></lable>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3  control-label">Designation</label>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <input data-parsley-type="alphanum" parsley-trigger="change"  type="text" id="userdesignation" name="userdesignation" class="form-control" required placeholder="User Name" />
                                            </div>
                                            <div class="row">

                                                <lable id="u_designation" style="color: red;"></lable>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Role</label>
                                        <div class="col-sm-6">
                                            <div class="row col-lg-6 ">
                                                <select  class="selectpicker" data-live-search="true" required data-style="btn-white" id="userrole" name="userrole">
                                                    <option value="">--Select Roles--</option>
                                                    <?php
                                                    foreach ($role as $value) {
                                                        ?> 
                                                        <option value="<?= $value['Role_ID'] ?>"><?= $value['Role_Name'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <label id="U_role" style="color: red;"></label>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                            <button  onclick="user_submit()" class="btn btn-primary btn-custom waves-effect waves-light">Submit</button>
                                            <!--<button id="m_find" type="button" onclick="User_find()" class="btn btn-success btn-custom waves-effect waves-light">Find</button>-->
                                            <!--<button id="m_update" onclick="user_update()" class="btn btn-warning btn-custom waves-effect waves-light">Update</button>-->
                                            <!--<button id="sup_delete" type="button" onclick="supplier_delete()" class="btn btn-danger btn-custom waves-effect waves-light">Delete</button>-->
                                            <button id="ucancel" type="button" onclick="user_cancel()" class="btn btn-default btn-custom waves-effect waves-light">Cancel</button>


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
</div>
