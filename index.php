<?php
    
require "db_handler.php";
require "models/user.php";

$db = $db_connection;

// Method GET
$name = ( isset($_GET['name']) ) ? $_GET['name'] : null; 
$email = ( isset($_GET['email']) ) ? $_GET['email'] : null;
$password = ( isset($_GET['password']) ) ? $_GET['password'] : null;

// Method POST
// $name = ( isset($_POST['name']) ) ? $_POST['name'] : null; 
// $email = ( isset($_POST['email']) ) ? $_POST['email'] : null;
// $password = ( isset($_POST['password']) ) ? $_POST['password'] : null;

// Example 1
// --------------------------------------------------------------------------

$new_user_create_query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

// Check the query string.
echo "<pre>";
var_dump($new_user_create_query);
echo "</pre>";


// Execute the new user create query
$new_user = $db->query($new_user_create_query);


if ( $new_user ) {
    
    echo "New user created successfully";
    
    echo "<pre>";
    print_r( user_find($db, $db->insert_id) );
    echo "</pre>";


} else {
    echo "Error: <br>" . $db->error;
}



// Example 2
// ---------------------------------------------------------------------------------------------

// $new_user = user_create($db, [ 'name' => $name, 'email' => $email, 'password' => $password ]);


// if ( $new_user ) {
    
//     echo "New user created successfully";
    
//     echo "<pre>";
//     print_r( $new_user );
//     echo "</pre>";


// } else {
//     echo "Error: <br>" . $db->error;
// }