<?php

if(!function_exists('upload_image')){
    function upload_image($file, $filePrefix,$fileLocation){
        if($file){
            $imageName = $filePrefix.rand(3,999).'-'.time().'.'.$file->extension();
            $destination = public_path("uploads/$fileLocation");
            $image = "uploads/$fileLocation/".$imageName;
            $file->move($destination, $imageName);
            $getValue = $image;
            return $getValue;
        }
    }
}
