<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cashbook Manager</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Balance</th>
                                    <th>Admin Name</th>
                                    <th>Income Amount</th>
                                    <th>Expense Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_cashbook as $v_cashbook) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_cashbook->cashbook_entry_time; ?></td>
                                        <td><?php echo $v_cashbook->current_balance; ?></td>
                                        <td><?php echo $v_cashbook->admin_name; ?></td>
                                        <td><?php echo $v_cashbook->income_amount; ?></td>
                                        <td><?php echo $v_cashbook->expense_amount; ?></td>
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
