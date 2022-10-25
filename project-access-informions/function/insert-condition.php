<?php

    require('../config/main-config.php'); /* when we need into database table **we must write directions connect always */

    if (isset($_POST['send'])) { /* isset() directions for null check  */

        $id = $_POST['id']; $nickname = $_POST['nickname']; $age = $_POST['age']; $gender = $_POST['gender'];

        $sql = "INSERT INTO empl_db(id,nickname,age,gender) VALUES('$id' , '$nickname' , '$age' , '$gender'); "; 
        /* 
           specify table of database name directions access database table 
           directions SQL 
           structure : insert into _name table_   /** (ลำดับ feild)
                       values ('_','_',...);  /** values ที่ต้องการเก็บลง feild
        */
        $result = mysqli_query($connect , $sql); /* directions mysqli_query(2 arguments); เป็นคำสั่ง นำข้อมูล into database table */
        
        if (!$result) { /* if insert into datatable ไม่สำเร็จ tell error*/
          die ('insert informations failed : '.mysqli_error($connect) );
        }
        /****  when use $connect then close always *****/
      }

      mysqli_close($connect);



?>