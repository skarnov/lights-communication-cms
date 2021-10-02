<!DOCTYPE html>

<html>
    <head>
        <style>
            body {
                height: 842px;
                width: 595px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>

    <body>
        <div>
            <center>
                <table>
                    <tr>
                        <td><img src="<?php echo base_url(); ?>asset/image/evis-logo.png" style="width:200px; height:100px; margin-left: -10px;"/></td>
                        <td style="width:570px;">
                            <div>
                                <h2 style="margin:0; text-align: center">Evis Technology</h2>
                                <h4 style="margin:0; text-align: center">Dhaka, Bangladesh</h4>
                                <h4 style="margin:0; text-align: center">(+88) 01719 02 02 78</h4>
                                <h4 style="margin:0; text-align: center">sales@evistechnology.com</h4>
                            </div>
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <br/>
                <br/>
                <table>
                    <tr>
                        <td style="width:200px;">
                            <h3 style="margin:0;">Invoice To:</h3>
                            <h2 style="margin:0;"><?php echo $sale_info->client_name; ?></h2>
                            <h4 style="margin:0;"><?php echo $sale_info->client_address; ?></h4>
                        </td>
                        <td style="width:570px;">
                            <div>
                                <h2 style="margin:0; text-align: center">Invoice #<?php echo $sale_info->sale_id; ?></h2>
                                <h4 style="margin:0; text-align: center">Date of Invoice: <?php echo $sale_info->date; ?></h4>
                            </div>
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <br/>
                <br/>
                <table style="width:575px; padding: 20px; border:1px solid black;">
                    <thead>
                        <tr>
                            <th style="border-bottom:1px solid black;"><strong>SL</strong></th>
                            <th style="border-bottom:1px solid black;"><strong>Description</strong></th>
                            <th style="border-bottom:1px solid black;"><strong>Unit Price</strong></th>
                            <th style="border-bottom:1px solid black;"><strong>Quantity</strong></th>
                            <th style="border-bottom:1px solid black;"><strong>Total</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($sale_details as $v_sale) {
                            ?>
                            <tr>
                                <td style="margin:0; text-align: center"><?php echo $i; ?></td>
                                <td style="margin:0; text-align: center"><?php echo $v_sale->sale_description; ?></td>
                                <td style="margin:0; text-align: center"><?php echo $v_sale->unit_price; ?></td>
                                <td style="margin:0; text-align: center"><?php echo $v_sale->quantity; ?></td>
                                <td style="margin:0; text-align: center"><?php echo $v_sale->unit_price * $v_sale->quantity; ?></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <br/>
                <br/>
                <br/>
                <br/>
                <table>
                    <tr>
                        <?php
                        $sale_status = $sale_info->sale_status;
                        if ($sale_status == 1) {
                            ?>
                            <td style="width:200px;">
                                <h3 style="margin:0; color:green; font-size: 20px; font-weight: bolder;">Paid</h3>
                            </td>
                            <?php
                        } else {
                            ?>
                            <td style="width:200px;">
                                <h3 style="margin:0; color:red; font-size: 20px; font-weight: bolder;">Unpaid</h3>
                            </td>
                            <?php
                        }
                        ?>
                        <td style="width:400px;">
                            <div>
                                <h4 style="margin:0; color: red;font-size: 20px; text-align: center"><b>Ground Total:</b> <?php echo $sale_info->ground_total; ?> BDT</h4>
                            </div>
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <table>
                    <tr>
                        <td style="margin:0; text-align: center; width:590px;">Thank You</td>
                    </tr>
                </table>
                <hr/>
                <table>
                    <tr>
                        <td style="margin:0; text-align: center; width:590px;">
                            Invoice was created with Evis ERP and is valid without the signature and seal. Check It Online
                            evistechnology.com/client_area/invoice_check.php
                        </td>
                    </tr>
                </table>
            </center>
        </div>       
    </body>
</html>