<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-breadcrumb">
                    <a href="<?php echo base_url(); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
                    <a href="<?php echo base_url(); ?>client/add_project" class="btn btn-info">Add Project</a>
                    <a href="<?php echo base_url(); ?>client/manage_project" class="btn btn-success">Manage Projects</a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add New Project</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div style="background-color:wheat;"><?php echo validation_errors(); ?></div><br/>
                    <h3 style="color:green">
                        <?php
                        $msg = $this->session->userdata('save_project');
                        if (isset($msg)) {
                            echo $msg;
                            $this->session->unset_userdata('save_project');
                        }
                        ?>
                    </h3>
                    <div class="x_content">
                        <form action="<?php echo base_url(); ?>client/save_project" method="POST" class="form-horizontal form-label-left" novalidate>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Client</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="id" class="form-control">
                                        <option>Select Client</option>
                                        <?php
                                        foreach ($all_client as $v_client) {
                                            ?>
                                            <option value="<?php echo $v_client->client_id; ?>"><?php echo $v_client->client_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Project Name" required="required" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="instruction_box" class="form-control col-md-7 col-xs-12"></textarea>
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
