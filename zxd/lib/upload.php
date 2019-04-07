<?php
class Upload{
	public $standard = array('.jpg','.jpeg','.png','.gif');
	public $error = array();
	public $maxsize = 8;
	public $dir = '../upload/';
	public $newFile = '';

	public function checkSuffix($filename){
		$suffix = strrchr($filename,'.');
		$this->newFile = uniqid().$suffix;
		if(!in_array($suffix, $this->standard)){
			$this->error[]='文件类型不符！';
			return false;
		}else{
			return true;
		}
	}



	public function checkSize($tmpname){
            $data = filesize($tmpname)/1024/1024;
            if($data>$this->maxsize){
                 $this->error[] = '文件过大！最大值'.$this->maxsize."MB";
                 return false;
            }else{
                return true;
            }
    }

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
    public function shangchuan(){
         if(!$this->checkSuffix($_FILES['wj']['name'])){
             return false;
         }
		 
		 if(!$this->checkSize($_FILES['wj']['tmp_name'])){
             return false;
         }
		 
		 if(!$this->checkError($_FILES['wj']['error'])){
             return false;
         }
		 
		 if(!$this->createDir()){
             return false;
         }
		 
		 $boolData = move_uploaded_file($_FILES['wj']['tmp_name'],$this->dir.date("Y-m-d")."/".$this->newFile);
		 if(!$boolData){
             $this->error[] = '上传失败';
             return false;
		 }else{
             return true;
         }
    }
}