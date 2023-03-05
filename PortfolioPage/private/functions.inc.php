<?php

function get_file_path($constant, $filename){
    if($filename[0] !== '/')
        $filename = '/' . $filename;
    return $constant . $filename;
}
