
  document.getElementById('globalsearchform_key').onfocus =function(){
          if(this.value=='请输入产品名')
          {
            this.value='';
          }
         }
         document.getElementById('globalsearchform_key').onblur =function(){
          if(this.value=='')
          {
            this.value='请输入产品名';
          }
}

