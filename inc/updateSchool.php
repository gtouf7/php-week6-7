<?php 
    include('../reusable/conn.php');
    include('functions.php');
    if(isset($_POST['updateSchool'])) {
        $id = $_POST['id'];
        $query = "UPDATE `School Name`, `School Level`, `phone`, `email` FROM schools WHERE `id` = '$id'";
        $school = mysqli_query($connect, $query);

        if($school) {
            set_message('School was updated successfully', 'info');
            header('Location: ../index.php');
        } else {
            echo "Failed:" . mysqli_error($connect);
        }
    } else {
        echo "Not Authorized";
    }