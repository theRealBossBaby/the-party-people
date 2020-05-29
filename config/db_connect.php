<?php

    //connect to database
    $conn = mysqli_connect('localhost', 'administrator', 'administrator', 'party_people');

    //check connection
    if (!$conn) {
        echo 'connection error!!' . mysqli_connect_error($conn);
    }
?>