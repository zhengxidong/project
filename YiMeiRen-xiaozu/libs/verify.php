<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 11:40
 */

class Verify{

   public $config = array(
             'width'=>80,
             'height'=>40,
             'size'=>20,
             'startx'=>10,
             'starty'=>30,
             'font'=>'./font/simfang.ttf'
   );

    /**
     * 初始化
     * @param $arr
     */
    public function __construct($arr=null){
          if(is_array($arr)){
               foreach($arr as $key=>$value){
                   if(array_key_exists($key,$this->config)){
                       $this->config[$key] = $value;
                   }
               }
          }
    }

    /**
     * 输出验证码
     */
    public function show(){
        header("content-type:image/png");
         //创建画布
        $resData = imagecreate($this->config['width'],$this->config['height']);
		#$resData = imagecreatetruecolor($this->config['width'],$this->config['height']);
        #$resData = imagecreatefrompng(BASE."/public/admin/img/verify.png");
        //给画布分配颜色
        #$color = imagecolorallocate($resData,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
		#imagefill($resData,0,0,$bgcolor);
        imagecolorallocate($resData,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
        $color = imagecolorallocate($resData,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));

        $pixelcolor = imagecolorallocate($resData,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));
        $linecolor = imagecolorallocate($resData,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));
        for($j=0;$j<100;$j++) {
            imagesetpixel($resData, mt_rand(0, $this->config['width']), mt_rand(0, $this->config['height']), $pixelcolor);
            if($j<4) {
                //画线
                imageline($resData, mt_rand(0, $this->config['width']/ 5), mt_rand(0, $this->config['height']), mt_rand($this->config['width'] / 2, $this->config['width']), mt_rand(0, $this->config['height']), $linecolor);
            }
        }
        imagettftext($resData,$this->config['size'],0,$this->config['startx'],$this->config['starty'],$color,$this->config['font'],$this->getRandData());
        //输出画布
        imagepng($resData);
    }

    /**
     * 返回随机字符
     * @return string
     */
    public function getRandData(){
        $arr1 = range('A','Z');
        $arr2 = range(1,9);
        $arr3 = range('a','z');
        $arr4 = array_merge($arr1,$arr2,$arr3);
        $strData ="";
        for($i=0;$i<4;$i++){
            $index = array_rand($arr4);
            $strData.=$arr4[$index];
        }
        $_SESSION['yzm'] = $strData;
        return $strData;
    }

}