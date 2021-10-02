<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-breadcrumb">
                    <a href="<?php echo base_url(); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
                    <a href="<?php echo base_url(); ?>client/add_client" class="btn btn-info">Add Client</a>
                    <a href="<?php echo base_url(); ?>client/manage_client" class="btn btn-success">Manage Client</a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add New Client</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div style="background-color:wheat;"><?php echo validation_errors(); ?></div><br/>
                    <h3 style="color:green">
                        <?php
                        $msg = $this->session->userdata('save_client');
                        if (isset($msg)) {
                            echo $msg;
                            $this->session->unset_userdata('save_client');
                        }
                        ?>
                    </h3>
                    <div class="x_content">
                        <form action="<?php echo base_url(); ?>client/save_client" method="POST" class="form-horizontal form-label-left" novalidate>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Client Name" required="required" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Client Email" required="required" id="email" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" placeholder="Client Password" required="required" id="password" class="form-control col-md-7 col-xs-12" data-validate-length="6,8">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" name="mobile" placeholder="Client Mobile" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="address" placeholder="Client Address" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Status</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="status" class="form-control">
                                        <option>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
