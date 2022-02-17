<?php

    header('Access-Control-Allow-');
    header('Content-Type: application/json');

    include_once('../core/initialize.php');

    $post = new product($db);

    $result = $post->read();

    $num = $result->rowCount();
    
    if($num>0){
    
        $post_arr = array();
        $post_arr= array();

        while($row = $result -> fetch(PDO::FETCH_ASSOC)){

            extract($row);
            $post_item = array(
                'id' => $id,
                'product' => $product,


            );

            array_push($post_arr, $post_item);

        }

        echo json_encode(array(
            'status code' => 200,
            'status_message'=>"Success",
            'stocks'=>$post_arr));
    }else{

        echo json_encode(array('message'=>'No Post Found.'));
    }

?>           