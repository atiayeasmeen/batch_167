<?php

if(!empty($_GET['is_logged_in']) && $_GET['is_logged_in'] == true){
    echo $_GET['student_name'];
}else{
    echo "You have no valid access.";
}

