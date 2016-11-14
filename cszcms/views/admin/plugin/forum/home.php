<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <!-- Start Admin Menu -->
        <?php echo $this->Forum_model->AdminMenu() ?>
        <!-- End Admin Menu -->
        <ol class="breadcrumb">
            <li class="active">
                <i><span class="glyphicon glyphicon-edit"></span></i> <?php echo  $this->lang->line('forum_header') ?>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <h1><i><span class="glyphicon glyphicon-folder-open"></span></i></h1>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $total_cat ?></div>
                        <div>Topic Total<?php echo $this->lang->line('category_total') ?>!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                    <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <h1><i><span class="glyphicon glyphicon-edit"></span></i></h1>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $total_art ?></div>
                        <div>Comment Total<?php echo $this->lang->line('article_total') ?>!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                    <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->