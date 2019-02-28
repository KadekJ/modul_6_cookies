<?php
    session_start();
        
    $_SESSION['username'] = 'kadek';

    echo $_SESSION['username'];
    echo '<br/>';
    echo ' <a href =index2.php>Next</a> ';


?>


