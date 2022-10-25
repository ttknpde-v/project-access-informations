<?php require('../function/insert-condition.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="thitikorn's a dev thai">
    <meta name="description" content="pratice php sql bootstrap">
    <link rel="icon" href="../image/earth.jpg">
    <link rel="stylesheet" href="../css/insert-info-style.css">
    
    <!-- call bootstrap offline and js online-->
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
        

 

    <!-- content -->
    <section class="">
        <div class="container">
            
                <div class="control-alert">    
                    <div class="intro">
                        <h4>these forms for employee</h4>
                    </div>
                </div>

            
                
                <form action="" method="post">
                    
                    <div class="control-form-group">
                        <div class="input-group flex-nowrap">
                            <label class="input-group-text" for="">identity document </label>
                            <input class="form-control" type="number" name="id" id="" min="0" max="9999" placeholder="0 - 0000" required>
                        </div>
                        <div class="input-group flex-nowrap">
                            <label class="input-group-text" for="">nickname </label>
                            <input class="form-control" type="text" name="nickname" id="" placeholder="enter your name" required>
                        </div>
                        <div class="input-group flex-nowrap">
                            <label class="input-group-text" for="">age </label>
                            <input class="form-control" type="number" name="age" id="" min="0" max="120" placeholder="enter your age"  required>
                        </div>
                    </div>

                    <div class="control-form-check">
                        <div class="form-check">
                            <label for="">gender </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="" value="female" required>female
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="" value="male" required>male
                        </div>
                        <div class="form-check">    
                            <input class="form-check-input" type="radio" name="gender" id="" value="other" required>other
                        </div>
                    </div>

                    <div class="control-btn">
                        <div class="btn-group">
                            <button class="btn btn-secondary" type="submit" name="send">send</button>
                            <button class="btn btn-secondary" type="reset">reset</button>
                        </div>
                    </div>

                </form>
         

        </div>
    </section>
    <!-- content -->

    
    <!-- result -->
    <section>
        <div class="control-result">
                <div class="alert alert-success">
                    <h3>result</h3>
                    <?php if(isset($_POST['send'])) { ?>  
                    <!-- when user click submit จะเกิด acction show message -->
                            <strong class="storng-message">
                                <?php echo"<b>successed insert to database table.</b>";?> 
                            </strong>
                        <a class="alert-link" href="../units/selec-info.php">go to select info.</a>
                    <?php } else { echo "now , empty value."; } ?>
                    <!-- but it's just tactics -->    
                </div>    
        </div>
    </section>
    <!-- result -->

</body>
</html>