<?php

namespace App\Libs;

use Image;
use Auth;

class Imag{
    public function url($path = null, $dirrectory = null, $name = null){
        if($path != null){
            if($dirrectory != null){
                $dir = public_path() . $dirrectory;
            }else{
                if(!Auth::guest()){
                    $dir = public_path() . '/uploads/'. Auth::user()->id . '/';
                }else{
                    $dir = public_path() . '/uploads/0/';
                }
                if(!file_exists($dir)){
                    mkdir($dir, 0777, true);
                }
            }
            if($name != null){
                $filename = $name;
            }else{
                $filename = date('y_m_d_h_i_s').'.jpg';
                //$filename = md5('').'.jpg';
            }
            $img = Image::make($path);
            $img->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($dir . $filename);
            $img->resize(null, 250, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pic_small = 's_'. $filename;
            $img->save($dir . $pic_small);
            $img->resize(null, 100, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pic_small2 = 'ss_'. $filename;
            $img->save($dir . $pic_small2);
            return $filename;
        }else{
            return false;
        }
    }
}
