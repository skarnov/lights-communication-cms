<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group btn-breadcrumb">
                    <a href="<?php echo base_url(); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
                    <a href="<?php echo base_url(); ?>business/add_sale" class="btn btn-info">Add Sale</a>
                    <a href="<?php echo base_url(); ?>business/manage_sale" class="btn btn-success">Manage Sale</a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Execute New Sale</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <h3 style="color:green">
                        <?php
                        $msg = $this->session->userdata('save_sale');
                        if (isset($msg)) {
                            echo $msg;
                            $this->session->unset_userdata('save_sale');
                        }
                        ?>
                    </h3>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?php echo base_url(); ?>cart/add_to_cart" method="POST" class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3">Select Client</label>
                                        <div class="col-md-9">
                                            <select name="client_id" class="form-control">
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
                                        <label class="control-label col-md-3">Select Business</label>
                                        <div class="col-md-9">
                                            <select name="business_id" class="form-control">
                                                <option>Select Business</option>
                                                <?php
                                                foreach ($all_business as $v_business) {
                                                    ?>
                                                    <option value="<?php echo $v_business->business_id; ?>"><?php echo $v_business->business_name; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea name="description" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3">Unit Price <span class="required">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="unit_price" placeholder="Unit Price" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3">Quantity <span class="required">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="quantity" placeholder="Quantity" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button id="send" type="submit" class="btn btn-success">Add To Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center">Description</td>
                                                <td class="text-center">Unit Price</td>
                                                <td class="text-center">Quantity</td>
                                                <td class="text-center">Total</td>
                                                <td class="text-center">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($this->cart->contents() as $v_contents) {
                                                ?>
                                                <tr>
                                                    <td class="text-center"> 
                                                        <?php echo $v_contents['name']; ?>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <?php echo $v_contents['price']; ?>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <?php echo $v_contents['qty']; ?>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <?php echo $v_contents['subtotal']; ?>
                                                    </td>
                                                    <td class="text-center"> 
                                                        <a href="<?php echo base_url(); ?>cart/remove/<?php echo $v_contents['rowid']; ?>" title="Remove" class="btn btn-danger"><i class="fa fa-times-circle"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>Grand Total:</strong></td>
                                                    <td class="text-right"><?php echo $this->cart->total(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <?php
                                    if ($this->cart->total() > 0) {
                                        ?>
                                        <div class="pull-right"><a href="<?php echo base_url(); ?>cart/save_sale" class="btn btn-danger">Execute Sale</a></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>