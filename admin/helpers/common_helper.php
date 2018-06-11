<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function getNumUser(){
        $CI = &get_instance();
        $CI->load->database();
        $query = $CI->db->select('*')->from('user')->get()->num_rows();
        return $query;
    }
    function getNumContent(){
        $CI = &get_instance();
        $CI->load->database();
        $query = $CI->db->select('*')->from('content_content')->get()->num_rows();
        return $query;
    }
    function getNumContentStatic(){
        $CI = &get_instance();
        $CI->load->database();
        $query = $CI->db->select('*')->from('content_static')->get()->num_rows();
        return $query;
    }
    function getNumProduct(){
        $CI = &get_instance();
        $CI->load->database();
        $query = $CI->db->select('*')->from('product_product')->get()->num_rows();
        return $query;
    }
    function priceFormat($price,$symbol='VND'){
    	$decimalPlace = 2;
        $decimalPoint = ',';
        $thousandPoint = '.';
    	$string = number_format(round($price, (int)$decimalPlace), (int)$decimalPlace, $decimalPoint, $thousandPoint);
        $string = str_replace(',00',',-',$string);
    	if($symbol){
      		$string = $string." ".$symbol;
    	}
    	return $string;
    }
function resize_image($uploadDir,$thumb_path,$image_name,$thumb_name,$width=RESIZE_WIDTH,$hight=RESIZE_HIGHT,$square=0,$quality=90)
{
    $image_path=$uploadDir;
    $checkimage =getPhenotype($uploadDir,$image_name);
    $width_size= (getWidth($uploadDir,$image_name)*$hight)/getHight($uploadDir,$image_name);
    $hight_size= (getHight($uploadDir,$image_name)*$width)/getWidth($uploadDir,$image_name);
    if($checkimage==1){//hinh nam
        if($width_size > $width){
            $dimension = $width;
            if($hight_size>$hight)
                $dimension = ($hight*getWidth($uploadDir,$image_name))/getHight($uploadDir,$image_name);
        }else{
            if($hight_size>$hight)
                $dimension = ($hight*getWidth($uploadDir,$image_name))/getHight($uploadDir,$image_name);
            else
                $dimension =$width;
        }
    }else{
        if($checkimage==2){// hinh dung
            if($hight_size>$hight)
                $dimension =$hight;
            else
                if($width_size>$width)
                    $dimension =($width*getHight($uploadDir,$image_name))/getWidth($uploadDir,$image_name);
                else
                    $dimension =$hight;
        }else{
            $dimension =$width;
        }
    }
    #$image_name=$this->name;
    $type = strtolower(substr($image_name,-3));
    switch ($type) {
        case 'jpg':
            $src = imagecreatefromjpeg("$image_path/$image_name");
            break;
        case 'gif':
            $src = imagecreatefromgif("$image_path/$image_name");
            break;
        case 'png':
            $src = imagecreatefrompng("$image_path/$image_name");
            break;
        case 'peg':
            $src = imagecreatefromjpeg("$image_path/$image_name");
            break;
        case 'bmp':
            $src = imagecreatefromjpeg("$image_path/$image_name");
            break;
    }
    $ow=imagesx($src);
    $oh=imagesy($src);
    $src_x = 0;
    $src_y = 0;
    if($ow>$oh) {
        if($ow>$dimension) {
            $nw = $dimension;
            $nh = (int)$oh*$nw/$ow;
        } else {
            $nw = $ow;
            $nh = (int)$oh*$nw/$ow;
        }
    } else {
        if($oh>$dimension) {
            $nh = $dimension;
            $nw = (int)$ow*$nh/$oh;
        } else {
            $nh = $oh;
            $nw = (int)$ow*$nh/$oh;
        }
    }
    if($square) {
        $length = min($ow,$oh);
        $src_x = ceil( $ow / 2 ) - ceil( $length / 2 );
        $src_y = ceil( $oh / 2 ) - ceil( $length / 2 );
        $nlength = max($nw,$nh);
        $nw = $nlength;
        $nh = $nlength;
        $ow = $length;
        $oh = $length;
    }
    $dst = imagecreatetruecolor($nw,$nh);
    imagecopyresampled($dst,$src,0,0,$src_x,$src_y,$nw,$nh,$ow,$oh);
    imagejpeg($dst, "$thumb_path/$thumb_name",$quality);
    imagedestroy($src);
    imagedestroy($dst);
    return true;
}
function getWidth($uploadDir,$name)	{
    $filepath = $uploadDir.$name;
    $size_info=getimagesize($filepath);
    return  $size_info[0];
}
function getHight($uploadDir,$name)	{
    $filepath = $uploadDir.$name;
    $size_info=getimagesize($filepath);
    return $size_info[1];
}

function getPhenotype($uploadDir,$name)	{
    $filepath = $uploadDir.$name;
    $size_info=getimagesize($filepath);
    if($size_info[0]>$size_info[1])
        return 1; // hinh nam
    if($size_info[0]<$size_info[1])
        return 2; // hinh dung
    return 0; // hinh vuong
}




?>