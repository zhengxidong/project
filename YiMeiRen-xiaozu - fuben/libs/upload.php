<?php
class Upload{
	public $standard = array('.jpg','.jpeg','.png','.gif');
	public $error = array();//保存错误信息
    public $filname = array();
	public $maxsize = 8;//文件最大值MB
	public $dir = '../upload/';//上传文件地址
	public $newFile = '';

    /**
     * 检测类型
     * @param $filename
     * @return bool
     */
	public function checkSuffix($filename){
		$suffix = strrchr($filename,'.');
		$this->newFile = uniqid().$suffix;
        $this->filname[] = $this->newFile;
		if(!in_array($suffix, $this->standard)){
			$this->error[]='文件类型不符！';
			return false;
		}else{
			return true;
		}
	}


    /**
     * 检测文件大小
     * @param $tmpname
     * @return bool
     */
	public function checkSize($tmpname){
            $data = filesize($tmpname)/1024/1024;
            if($data>$this->maxsize){
                 $this->error[] = '文件过大！最大值'.$this->maxsize."MB";
                 return false;
            }else{
                return true;
            }
    }

    /**
     * 检测上传错误
     * @param $error
     * @return bool
     */
    public function checkError($error){
               switch ($error) {
              case 1:
                 $this->error[] = '超出系统限制';
                 return false;
               break; 

               case 2:
                 $this->error[] = '超出表单设置的大小';
                 return false;
               break;
               case 3:
                  $this->error[] = '只上传了部分文件';
                  return false;
               break;
               case 4:
                   $this->error[] = '没有文件上传';
                  return false;
               break;
               case 6:
                   $this->error[] = '没有找到临时文件';
                  return false;
               break;
               case 7:
                   $this->error[] = '没有写权限';
                  return false;
               break;
           
           default:
                 return true;
               break;
            }
    }
   //自动创建文件夹
    public function createDir(){
            $data = date("Y-m-d");
            if(!is_dir($this->dir.$data)){
                  if(mkdir($this->dir.$data)){
                    return true;
                  }else{
                    return false;
                  }
            }else{
                  return true;
            }
    }
    //上传
    public function sc(){
        foreach($_FILES['wj']['tmp_name'] as $key=>$value) {
            if (!$this->checkSuffix($_FILES['wj']['name'][$key])) {
                return false;
            }

            if (!$this->checkSize($_FILES['wj']['tmp_name'][$key])) {
                return false;
            }

            if (!$this->checkError($_FILES['wj']['error'][$key])) {
                return false;
            }

            if (!$this->createDir()) {
                return false;
            }

            $boolData = move_uploaded_file($value, $this->dir . date("Y-m-d") . "/" . $this->newFile);
        }
		 if(!$boolData){
             $this->error[] = '上传失败';
             return false;
		 }else{
             return true;
         }
     }

    /**
     *
     * 返回上传文件新的文件名
     * @return array
     */
    public function getLastFile(){
        foreach($this->filname as $value){
            $arr[] = $this->dir.date("Y-m-d")."/".$value;
        }
        return $arr;
    }
}