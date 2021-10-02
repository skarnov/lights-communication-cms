<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>File Manager</h2>
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
                                    <th>Project Name</th>
                                    <th>Client Name</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_file as $v_file) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_file->project_name; ?></td>
                                        <td><?php echo $v_file->client_name; ?></td>
                                        <td><a href="<?php echo 'http://localhost/evistechnology/'. $v_file->file; ?>" class="btn btn-info">File</a></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>client/delete_file/<?php echo $v_file->file_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete File" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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
