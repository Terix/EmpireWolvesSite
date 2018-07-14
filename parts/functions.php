<?php
function getFounders(){
    $founders['HyperFire'] = 'HyperFire.jpg';
    $founders['HyperFairy'] = 'HyperFairy.jpg';
return $founders;
}
function getAvatars($path = 'cmdrs'): array{
    $cmdrs = array();
    foreach (new DirectoryIterator($path) as $file) {
        if ($file->isFile()) {
            $avatar = explode("-",$file->getFilename());
            //$cmdrs[0]=array('label'=>'Nome','file'=>'file.jpg');
          if(isset($avatar[1])){
            $cmdrs[$avatar[0]]=array('label'=>basename($avatar[1], ".jpg"),'file'=>$file->getFilename());
          } else {
            $cmdrs[]=array('label'=>basename($avatar[0], ".jpg"),'file'=>$file->getFilename());
          }
        }
    }
    ksort($cmdrs);
    return $cmdrs;
  }