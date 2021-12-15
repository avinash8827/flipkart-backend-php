
<?php 
    //1. DB COnnection OPEN
    //Global Variable
    $conn = mysqli_connect('localhost','root','','flipkart_db');

    //Functiond defination
    function base_url($x=''){ //Default Argument
        if($x != ''){
            $x = rtrim($x,'/').'/';
        }
        return sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']).$x;
    }
    

    function getSetting($key){ //$key is actual argument
        global $conn;
        //2. Build the query
        //Local Variable
        $sql = "SELECT * FROM settings_tbl WHERE meta_key='$key'";

        //3. Execute the query
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

       $nor = mysqli_num_rows($result);
       if($nor > 0){
            $row = mysqli_fetch_row($result);
            return $row[2];
            //associative array = assoc
       }

        //return 'OKOKKOKOK';
    }



    //5. DB COnnection CLose
    //mysqli_close($conn);

?>