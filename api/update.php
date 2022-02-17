<?php

    header('Access-Control-Allow-');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods:POST');

    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization,X-Requested-With');


    include_once('../core/initialize.php');

    $post = new product($db);
    
    $data = json_decode(file_get_contents("php://input"));

    
    $post->id = $data->id;
    $post->product = $data->product;
    echo($post->id);

    if($post->update($post)){
        echo json_encode(
            array('message'=>'Post Created')
        );


    }else{
        echo json_encode(

            array('message' =>'Pos NOt xreated')
        );
    }

    ?>