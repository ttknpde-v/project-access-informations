<?php
    require('../config/main-config.php');

    $sql = " SELECT * FROM empl_db; "; 
    /* 
        directions SQL use for fetch all record in table database 
        structure : select _name feild 1_ , _feild 2_ , ... _feild n
               or : select _1_ , _2_ , _n_  [sequen of feild]  
               or : select * [all field on table database]
                    form _table name_
    */
    $result = mysqli_query($connect , $sql); 
    /* directions run always */
        if (!$result) {
            die ('insert informations failed : '.mysqli_error($connect));
        }
    
    mysqli_close($connect);
    
?>