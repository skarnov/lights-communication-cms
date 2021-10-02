<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sale Manager</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('edit_sale');
                            if (isset($msg)) {
                                echo $msg;
                                $this->session->unset_userdata('edit_sale');
                            }
                            ?>
                        </h3>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sale ID</th>
                                    <th>Date</th>
                                    <th>Client Name</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_sale as $v_sale) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_sale->sale_id; ?></td>
                                        <td><?php echo $v_sale->date; ?></td>
                                        <td><?php echo $v_sale->client_name; ?></td>
                                        <td><?php echo $v_sale->ground_total; ?></td>
                                        <td>
                                            <span style="color: green;">
                                                <?php
                                                if ($v_sale->sale_status == '1') {
                                                    echo 'Paid';
                                                }
                                                ?> 
                                            </span>
                                            <span style="color: red;">   
                                                <?php
                                                if ($v_sale->sale_status == 0) {
                                                    echo 'Unpaid';
                                                }
                                                ?>   
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>business/download_invoice/<?php echo $v_sale->sale_id; ?>" class="btn btn-info" data-toggle="tooltip" title="Download Invoice"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="<?php echo base_url(); ?>business/sale_invoice/<?php echo $v_sale->sale_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Invoice Sale"><i class="fa fa-calculator"></i></a>
                                            <a href="<?php echo base_url(); ?>business/delete_sale/<?php echo $v_sale->sale_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Sale" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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
