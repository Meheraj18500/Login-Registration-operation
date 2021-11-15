<?php

function connectDB(){
    $connect = mysqli_connect('localhost', 'root', '', 'admin_panel');
    return $connect;
}