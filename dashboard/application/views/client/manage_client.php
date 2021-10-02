<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Client Manager</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('edit_client');
                            if (isset($msg)) {
                                echo $msg;
                                $this->session->unset_userdata('edit_client');
                            }
                            ?>
                        </h3>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_client as $v_client) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_client->client_name; ?></td>
                                        <td><?php echo $v_client->client_email; ?></td>
                                        <td><?php echo $v_client->client_password; ?></td>
                                        <td><?php echo $v_client->client_mobile; ?></td>
                                        <td><?php echo $v_client->client_address; ?></td>
                                        <td>
                                            <span style="color: green;">
                                                <?php
                                                if ($v_client->client_status == '1') {
                                                    echo 'Active';
                                                }
                                                ?> 
                                            </span>
                                            <span style="color: red;">   
                                                <?php
                                                if ($v_client->client_status == 0) {
                                                    echo 'Inactive';
                                                }
                                                ?>   
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>client/delete_client/<?php echo $v_client->client_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Client" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
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
