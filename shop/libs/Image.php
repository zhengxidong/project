<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/4
 * Time: 0:35
 */
class Image{
    public $config=array(
        'zoomdir'=>'',//缩放后图片存储路径
        'newfilename'=>array(),//缩放图片文件名
        'logo'=>''
    );

    public function __construct($arr=array()){
        if(is_array($arr)){
            foreach($arr as $key => $value){
                if(array_key_exists($key,$this->config)){
                    $this->config[$key] = $value;
                }
            }
        }
    }

    /**
     * @param $width  缩放宽度
     * @param $srcimg  文件地址
     * @param null $prefix 文件前缀
     */
    public function zoom($width,$srcimg,$prefix=null){
        $arr = getimagesize($srcimg);

        $src_w = $arr[0];
        $src_h = $arr[1];
        $dst_w = $width;
        $dst_h = $width*$src_h/$src_w;
        $dst_image = imagecreatetruecolor($dst_w,$dst_h); //目标资源
        $src_image = $this->getImageTypeResource($srcimg);//原资源
        imagecopyresampled($dst_image,$src_image,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);
        //如果文件夹不存在，就创建一个
        if(!is_dir($this->config['zoomdir'])){
            mkdir($this->config['zoomdir'],0777);
        }
        //uniqid得到一个随机字符串，传一个参数可以设置前缀
        $newfilename =  uniqid($prefix).".png";

        $this->config['newfilename'][] =$newfilename;
        imagepng($dst_image,$this->config['zoomdir'].$newfilename);
    }

    /**
     * 根据图片格式返回资源
     * @param $file
     * @return resource
     */
    public function getImageTypeResource($file){

        $arr = getimagesize($file);//getimagesize获取图片信息

        switch($arr[2]){

            case 1:
                return imagecreatefromgif($file);
                break;
            case 2:
                return imagecreatefromjpeg($file);
                break;
            case 3:
                return imagecreatefrompng($file);
                break;
            default:
                exit('图片只能为gif jpeg png格式');
                break;

        }
    }

    public  function waterMark($img,$alpha=50){
        //原资源
        $src_im = imagecreatefrompng($this->config['logo']);
        $arr = getimagesize($this->config['logo']);
        $dst_im = $this->getImageTypeResource($img);
        imagecopymerge($dst_im,$src_im,0,0,0,0,$arr[0],$arr[1],$alpha);//将两张图片合在一起
        imagepng($dst_im,$img);
    }
    public function __call($fn,$param){
        exit('no this method');
    }
}