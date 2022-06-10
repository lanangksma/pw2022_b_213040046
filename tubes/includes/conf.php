<?php 
session_start();
include ('admin/config/dbcon.php');

function base_url($slug){
    echo 'http://127.0.0.1/pw2022_b_213040046/tubes/'.$slug;
}
?>