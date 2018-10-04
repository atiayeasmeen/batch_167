<?php


function user_create(array $data){

    global $db;

    // Checkout the data
    // echo "<pre>";
    // die(print_r($data));
    // echo "</pre>";

    $create_query = "INSERT INTO users (name, email, password) VALUES ( '". $data['name'] ."', '". $data['email'] ."', '". $data['password'] ."' )";

    $new_user = $db->query($create_query);

    return ( $new_user === TRUE ) ? user_find($db, $db->insert_id) : false ;
}

function user_find($user_id){

    global $db;

    $user = $db->query("SELECT * FROM users WHERE id = $user_id LIMIT 1");

    if($user){

        $user_data = $user->fetch_object();

        $user->free();

        return $user_data;
    }
    return null;

}