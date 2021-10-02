<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Survey Manager</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('edit_survey');
                            if (isset($msg)) {
                                echo $msg;
                                $this->session->unset_userdata('edit_survey');
                            }
                            ?>
                        </h3>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Date</th>
                                    <th>Client Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_survey as $v_survey) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_survey->serial_no; ?></td>
                                        <td><?php echo $v_survey->date; ?></td>
                                        <td><?php echo $v_survey->client_name; ?></td>

<!--                                        <td>
                                            <a href="<?php echo base_url(); ?>client/delete_client/<?php echo $v_client->client_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Client" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                        </td>-->
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
