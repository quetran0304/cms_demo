<div class="panel-body padding-0">
    <div class="padding-left-10 padding-right-10 text-center">
        <div class="example">
            <form id="searchFrm" class="form-inline" method="post">
                <div class="form-group">
                    <input type="text" name="name" id="nameKey" autocomplete="off" placeholder="Name" class="form-control"/>
                </div>
                <div class="form-group">
                    <select name="city_id" id="city_id" class="form-control">
                        <option value=""><?php echo lang('admin.select')." City";?></option>
                        <?php if($city){foreach($city as $row){?>
                        <option value="<?php echo $row->city_id;?>"><?php echo $row->name;?></option>
                        <?php }}?>
                    </select>  
                </div>
                <div class="form-group">
                    <a id="bnt-searchDrm" onclick="searchFrm('searchFrm','<?php echo site_url($this->module_name.'/district/search/');?>')" class="btn btn-primary waves-effect waves-light"><?php echo lang('admin.search');?></a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function(){
    jQuery('#nameKey').bind("enterKey",function(e){
        $('#bnt-searchDrm').click();
        return true;
    });
    jQuery('#nameKey').keyup(function(e){
        if(e.keyCode == 13){
            jQuery(this).trigger("enterKey");
            return true;
        }
    });
});
</script>
<?php echo form_open($this->module_name.'/district', array('class' => 'admin', 'id' => 'adminfrm'));?>
<div class="panel-body">
    <div class="row">
        <div class="col-sm-12">
            <div id="toolbar">
                <?php if($this->check->check('dels')){?>
                <a class="btn btn-danger" onclick="deleteAllItem('<?php echo site_url($this->module_name."/district/dels/");?>');" >
                    <?php echo lang('admin.deletes');?>
                </a>
                <?php }?>
            </div>
            <table id="list_table"
                data-toggle="table"
                data-url="<?php echo site_url($this->module_name.'/district/getContent');?>"
                data-toolbar="#toolbar"
                data-side-pagination="server"
                data-pagination="true"
                data-show-refresh="true"
                data-show-toggle="true"
                data-show-columns="true"
                data-show-export="true"
                data-page-list="[5,10,20,50,100,200,ALL]"
                data-mobile-responsive="true">
                <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="district_id">ID</th>
                        <th data-field="name">Name</th>
                        <th data-field="type_district">Type</th>
                        <th data-field="city">City</th>
                        <th data-field="sort">Sort <a onclick="sortFunctionAjax('adminfrm','<?php echo site_url('ajax/sortOrderAjax');?>')" href="javascript:void(0);" class="btn btn-icon btn-xs btn-success waves-effect waves-light"
                            rel="tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="icon glyphicon glyphicon-floppy-save" aria-hidden="true"></i></a>
                        </th>
                        <th class="text-center action" data-field="action"><?php echo lang('admin.functions');?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<input type="hidden" name="table" value="city_district" />
<input type="hidden" name="where" value="district_id" />
<?php echo form_close();?>