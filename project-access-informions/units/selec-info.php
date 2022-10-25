<?php require('../function/selec-condition.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pratice php sql bootstrap">
    <meta name="author" content="thitikorn's a dev thai">
    <link rel="stylesheet" href="../css/selec-info-style.css">
    <link rel="icon" href="../image/earth.jpg">
    <!-- call bootstrap -->
        <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.min.css"> 
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- call bootstrap -->
    <title>pratice php sql and bootstrap</title>
</head>
<body>
    
    <!-- menu bar -->
    <nav class="control-menu">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="../gui/selections.php">selections & processes</a></li>
                <!-- name class of dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">menu </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="insert-info.php">insert informations</a>
                        <a class="dropdown-item" href="selec-info.php">select informations</a>
                        <a class="dropdown-item" href="update-info.php">update informations</a>
                        <a class="dropdown-item" href="delete-info.php">delete informations</a>
                    </div>
                </li>
                <!-- name class of dropdown -->
                <li class="nav-item"><a class="nav-link" href="#">contact us</a></li>
            </ul>
    </nav>
    <!-- menu bar -->

    
            <!--        ลองใช้ loop วนโดยมีคำสั่ง bootstrap 
            
                
                **     mysqli_fetch_array(1 argument); it returns type array and มีฟิลด์ต่าง ๆ ใน record 
                **     รูปแบบการ access $namevariable['name field in database table'] 
                       ** don't forget using loops help ** 

                **     mysqli_fetch_row(1 argument); it returns type array and has all field in array
                **     รูปแบบการ access $namevariable[field position start 0] , $...[field ... 1] , ตามลำดับ index general 
                       ** don't forget using loops help ** 


                       * directions mysqli_num_rows(1 argument) it will returns number of record on database table  *
                       
             -->
  
    <!-- display information  -->
    <section class="control-list">
        <div class="container">

                    <?php  $count_empl = mysqli_num_rows($result);   ?>
                    <table class="table table-hover">
                                    
                                    <thead class=""> <!-- table head  -->
                                        <tr> <!-- table rows -->
                                            <th>Indentity document</th>
                                            <th>Nickname</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead> <!-- end table head  -->
                                    
                                    <tbody> <!-- table body  -->
                                    <!-- php processed -->
                                    <?php while ($info = mysqli_fetch_array($result)) { ?>
                                        <tr> <!-- table rows -->
                                            <td><?php printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$info['id']); ?></td> <!-- th , td have to equals -->
                                            <td><?php printf($info['nickname']); ?></td>
                                            <td><?php printf($info['age']); ?></td>
                                            <td><?php printf($info['gender']); ?></td>
                                        </tr>
                                    <?php } // end while loops ?>
                                    </tbody> <!-- end table body  -->
                                    
                                    <tfoot> <!-- table footer  -->
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><b>total account</b></td>
                                            <td><?php printf("&nbsp&nbsp".$count_empl); ?></td>
                                        </tr>
                                    </tfoot> <!-- end table footer  -->
                                    
                    </table>

        </div>
    </section>
    <!-- display information  -->


</body>
</html>