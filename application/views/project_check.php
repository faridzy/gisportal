<div class="col-md-12">
    <div class="row form-group">
        <label for="qgis_check"
               class="control-label col-md-2"><?php echo ($this->lang->line('gp_qgis_project') . ' ' . $project['name']); ?>
            <p class="help-block"><?php echo $project["crs"]; ?></p>
        </label>
        <div class="col-md-5">
            <?php if ($qgis_check['valid']) {
                ?>
                <div class="alert alert-success">
                    <div class="row col-md-offset-1">
                        <?php echo $qgis_check['name'] ?> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </div>
                    <div class="row col-md-offset-1">
                        <a title="<?php echo ($this->lang->line('gp_download') . ' ' . $this->lang->line('gp_qgis_project')); ?>" href="<?php echo site_url('projects/download/' . $project['id']); ?>">
                            <?php echo $this->lang->line('gp_download'); ?>?
                        </a>
                        <a title="<?php echo $this->lang->line('gp_open_project'); ?>" href="<?php echo site_url($this->config->item('web_client_url').$project['name']); ?>">
                            <?php echo $this->lang->line('gp_open_project'); ?>?
                        </a>
                    </div>
                </div>
            <?php
            } else {
                if ($qgis_check['name'] > '') { ?>
                    <div class="alert alert-danger">
                        <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
                        <?php echo $qgis_check['name'] ?>
                    </div>
                <?php
                }
            } ?>
        </div>
    </div>
</div>