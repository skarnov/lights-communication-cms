<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>asset/image/evis-logo.png" class="img-responsive" style="margin-left: -8px" />
                                </div>
                                <div class="col-md-3 col-md-offset-6" style="line-height: 10px;">
                                    <h2>Evis Technology</h2>
                                    <p>Dhaka, Bangladesh</p>
                                    <p>(+88) 01719 02 02 78</p>
                                    <p>sales@evistechnology.com</p>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-5">
                                    <h3>Invoice To:</h3>
                                    <h2><?php echo $sale_info->client_name; ?></h2>
                                    <p><?php echo $sale_info->client_address; ?></p>
                                </div>
                                <div class="col-md-3 col-md-offset-4" style="line-height: 10px;">
                                    <h2>Invoice #<?php echo $sale_info->sale_id; ?></h2>
                                    <p>Date of Invoice: <?php echo $sale_info->date; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <td><strong>SL</strong></td>
                                                    <td class="text-center"><strong>Description</strong></td>
                                                    <td class="text-center"><strong>Unit Price</strong></td>
                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                    <td class="text-center"><strong>Total</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $i =1;
                                                foreach ($sale_details as $v_sale) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td class="text-center"><?php echo $v_sale->sale_description; ?></td>
                                                        <td class="text-center"><?php echo $v_sale->unit_price; ?></td>
                                                        <td class="text-center"><?php echo $v_sale->quantity; ?></td>
                                                        <td class="text-center"><?php echo $v_sale->unit_price * $v_sale->quantity; ?></td>
                                                    </tr>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <?php 
                                            $sale_status = $sale_info->sale_status; 
                                            if($sale_status ==1)
                                            {
                                            
                                            ?>
                                            <span style="font-size: 28px; color: red; margin-left: 25px; border: 2px solid red; padding: 7%;">
                                                Paid
                                            </span>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <span style="font-size: 28px; color: red; margin-left: 25px; border: 2px solid red; padding: 7%;">
                                                Unpaid
                                            </span>
                                             <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-5 col-md-offset-4" style="line-height: 10px;">
                                            <p style="color: red;font-size: 20px;"><b>Ground Total:</b> <?php echo $sale_info->ground_total; ?> BDT</p>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center">
                                    <h1>Thank You</h1>
                                </div>
                            </div>
                            <hr/>
                            <div class="text-center">
                                <p>             
                                    Invoice was created with Evis ERP and is valid without the signature and seal. Check It Online
                                    evistechnology.com/client_area/invoice_check.php
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>
