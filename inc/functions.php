
<?php 
    //Functiond defination
    function base_url($x=''){ //Default Argument
        if($x != ''){
            $x = rtrim($x,'/').'/';
        }
        return sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']).$x;
    }
    
?>