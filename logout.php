<?php
    session_start();

    unset($_SESSION['username']);

    echo "Session telah berakhir";
?>