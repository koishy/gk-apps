<?php 
    require 'config.php';
    function getv($filename)
    {
        return $_SERVER['DOCUMENT_ROOT'].'/views/'.$filename;
    }
    function getm($filename)
    {
        return $_SERVER['DOCUMENT_ROOT'].'/models/'.$filename;
    }
?>