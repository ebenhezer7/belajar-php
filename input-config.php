<?php
    $mysqli = new mysqli("localhost", "root", "", "siswa_rpl");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mysql . " . $mysqli -> connect_errno;
        exit();
    }
?>