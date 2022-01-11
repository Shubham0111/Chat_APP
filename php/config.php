<?php

$con = mysqli_connect("localhost", "root", "", "chat_app");

if(!$con){
    echo '<script>alert("Database Connected")</script>' . mysqli_connect_error();
}
?>