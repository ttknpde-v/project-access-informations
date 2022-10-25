<?php 

    require('../config/main-config.php');
    
    if (isset($_POST['send'])) {
    
        $identity_val = $_POST['identity_val'];

        $sql = "SELECT * FROM empl_db WHERE id = '$identity_val'; "; 
        /* directions SQL WHERE เป็นคำสั่งที่ใช้สำหรับการระบุเงื่อนไขการเลือกข้อมูล in database table รูปแบบ WHERE [Field] = 'Value' 
           sign (*) meaning is access all in table 
        */
        $result = mysqli_query($connect,$sql);

        $db_array = mysqli_fetch_array($result);
        /* it returns type boolean */
    }
    
    if(isset($_POST['send-update'])) { 
        
        $identity_val = $_POST['identity_val']; $new_nickname = $_POST['d_nickname']; $new_age = $_POST['d_age']; $new_gender = $_POST['d_gender'];

        
        if ($new_age != 0 && $new_gender != NULL && $new_nickname != 0) {
            $sql = "UPDATE empl_db SET nickname = '$new_nickname' , age = '$new_age' , gender = '$new_gender' WHERE id = '$identity_val'; "; /* read more */
            /* directions SQL UPDATE เป็นคำสั่งที่ใช้สำหรับการแก้ไขข้อมูล in database table 
               structure : update _name table database_ 
                           set _name field in table_   /* specify feild ที่ต้องการแก้ไข
                           where _name field_  /* specify feild เลือกเพื่อทำ xamples where id = '5'; do !
            */
            $result = mysqli_query($connect,$sql); 
            /* functions processed SQL */
            if (!$result) {
                die('update information failed. '.mysqli_error($result));
            }

        }

    }

    mysqli_close($connect);


?>