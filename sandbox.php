<?php
                        // if(file_exists('test.txt')){
                        //     $msg=readfile('test.txt');
                        //     echo $msg;
                        // }
                        // else{
                        //     echo "No such file";
                        // }
    $file='test.txt';
    $handle=fopen($file,'r');

    echo fread($handle,filesize($file));

?>