<?php 

$connect = mysqli_connect('localhost', 'root', 'root', 'http5225wk6');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }