<?php
    /* file connect database */
    $host = "localhost"; /* specify (v. ระบุ) name host / sever we use if use XAMPP name sever is "localhost" */
    $username = "root"; /* specify (v. ระบุ) name user เพื่อเข้าไปใช้งาน Mysql if XAMPP name user is "root" */
    $pass = ""; /* specify pass เพื่อเข้าไปใช้งาน Mysql */
    $database = "employee_db"; /* specify database name ************/

    $connect = mysqli_connect($host,$username,$pass,$database);

    if (!$connect) {
        die( 'could not connect: ' . mysqli_error() ); /* mysqli_error() use because it'll tell error */
    }

    /* 
       mysqli_close($connect );  should turn of sql always 
       
       do not use msqli_close() if you have to $connect (on page other) ฉนั้น compiler จะแจ้ง error
        
       mysqli object is already closed in .... !!!
       
    */
    
?>