<script>
    function change_option(id){
        $.ajax({
        type: "POST",
        url: "<?php echo base_url().$this->module_name;?>/address/district/",
        data: {'id':id},
        dataType: 'html',
        success: function(html){
            if(html){
                $('#district_id').html(html);
            }else{
                $('#district_id').html('<option value="">Chọn</option>');
            }
            }
        });
    }
    function change_district(id){
        $.ajax({
        type: "POST",
        url: "<?php echo base_url().$this->module_name;?>/address/ward/",
        data: {'id':id},
        dataType: 'html',
        success: function(html){
            if(html){
                $('#ward_id').html(html);
            }else{
                $('#ward_id').html('<option value="">Chọn</option>');
            }
            }
        });
    }
</script>