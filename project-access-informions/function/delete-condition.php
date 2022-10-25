<?php

    require('../config/main-config.php');
    
    if (isset($_POST['send'])) {
        $identity_val = $_POST['identity_val'];
        $sql = "SELECT * FROM empl_db WHERE id = '$identity_val' ;";
        $result = mysqli_query($connect , $sql);
        $db_array = mysqli_fetch_array($result);
    }

    if (isset($_POST['send-delete'])) {
        $identity_val = $_POST['identity_val'];
        $sql = "DELETE FROM empl_db WHERE id='$identity_val'; ";
        $result = mysqli_query($connect,$sql);
            if (!$result) {
                die('delete informations failed. : '.mysqli_error($connect));
            }
    }
    mysqli_close($connect);











?>