<?php

namespace App\Parser;

trait ParseTrait
{
    public function text($obj, $val = null)
    {
        $risk = $obj->filter($val)->count();
        if ($risk == 0) {
            $rams = '';
        } else {
            $rams = strip_tags($obj->filter($val)->text());
        }
        return $rams;
    }

    public function html($obj, $val = null)
    {
        $risk = $obj->filter($val)->count();
        if ($risk == 0) {
            $rams = '';
        } else {
            $rams = strip_tags($obj->filter($val)->html(), '<blockquote></blockquote><i></i>');
        }
        return $rams;
    }


}
