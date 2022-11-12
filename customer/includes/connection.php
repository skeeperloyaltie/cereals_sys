<?php
 $db = mysqli_connect('127.0.0.1', 'root', 'root') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'prince' ) or die(mysqli_error($db));
?>