<?php 

    require_once('helper.php');
    
    $query = "SELECT * FROM products";
    $sql = mysqli_query($db_connect, $query);

    if($sql){
        

        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push($result, array(

                'id' => $row['id'],
                'product' => $row['product'],
            ));
        }
       
        echo json_encode(array(
            'status code' => 200,
            'status_message'=>"Success",
            'stocks'=>$result));
    }

    

?>