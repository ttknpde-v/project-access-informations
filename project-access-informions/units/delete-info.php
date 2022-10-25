<?php require('../function/delete-condition.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pratice php sql bootstrap">
    <meta name="author" content="thitikorn's a dev thai">
    <link rel="stylesheet" href="../css/delete-info-style.css">
    <link rel="icon" href="../image/earth.jpg">
    
    <!-- call bootstrap offline and js online -->
        <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.min.css"> 
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- call bootstrap offline and js online -->
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

            <?php if(!isset($_POST['send'])) {?>

            <!-- finding a form  for delete infomation -->
        
            <div class="control-alert">    
                <div class="intro">
                    <h4 class="decribe-from">find the people on this form [for delete]</h4>
                    <p>enter a id to need and then we will finding.</p>
                </div>
            </div>

            <form action="" method="post"> <!-- form insert id for update -->
            
                <div class="control-form-group" >
                        <div class="input-group flex-nowrap">
                        <label class="input-group-text" for="">identity document </label>
                        <input class="form-control" type="number" name="identity_val" id="" min="0" max="9999" placeholder="0 - 0000" required>
                    </div>
                </div>
                
                <div class="control-btn">
                    <div class="btn-group">
                        <button class="btn btn-secondary" type="submit" name="send">send</button>
                        <button class="btn btn-secondary" type="reset">cancel</button>
                    </div>
                </div>

            </form> <!-- form insert id for update -->

            <!-- finding a form  for delete infomation -->

            <?php } 
            
            if (isset($_POST['send'])) {    
            
            ?>

            <!-- show info after delete infomation -->
            
            <form action="" method="post">
                <div class="control-form-update">
                
                    <div class="intro">
                        <h4>delete the information</h4>
                        <p>if you're sure  , please click confirm</p>
                    </div>
            
                <div class="control-form-group">

                    <?php  $message_tellsid = "couldn't find";  $message_tellsnull = NULL; ?>
                            <div class="input-group flex-nowrap">
                                <label class="input-group-text" for="">the identity document is : </label>
                                <input class="form-control" type="text" name="identity_val" id="" 
                                value = "<?php if ($db_array == NULL) {printf($message_tellsid); } else {printf($identity_val);} // in value ?>" readonly>
                            </div>

                            <div class="input-group flex-nowrap">
                                <label class="input-group-text" for="">nickname </label>
                                <input class="form-control" type="text" name="d_nickname" id="" 
                                value = "<?php if ($db_array != NULL)  { printf($db_array['nickname']); } else { printf($message_tellsnull); } // in value ?>"  readonly >     
                            </div>
                    
                            <div class="input-group flex-nowrap">
                                <label class="input-group-text" for="">age </label>
                                <input class="form-control" type="number" name="d_age" id="" 
                                value = "<?php if ($db_array != NULL)  { printf($db_array['age']); } else { printf($message_tellsnull); } // in value ?>" readonly >  
                            </div>

                            <div class="input-group flex-nowrap">
                                <label class="input-group-text" for="">gender </label>
                                <input class="form-control" type="text" name="d_gender" id="" 
                                value = "<?php if ($db_array != NULL)  { printf($db_array['gender']); } else { printf($message_tellsnull); } // in value ?>" readonly >  
                            </div>

                </div> <!-- end control form group -->

                    <div class="control-btn">
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm" type="submit" name="send-delete" <?php if ($db_array == NULL) { ?> disabled <?php } ?> >confirm</button>
                            <a class="btn btn-secondary btn-sm"  href="delete-info.php">reload</a>  
                        </div>
                    </div>
            
                    
                    <!-- result -->
                    <section>
                        <div class="control-result">
                            <div class="alert alert-success">
                                <h3>result</h3>
                                    <?php  if (isset($_POST['send-delete']) && $db_array != NULL) { ?>
                                        <!-- when user click submit จะเกิด acction show message -->
                                                <strong class="storng-message">
                                                    <?php echo"<b>successed delete to database table.</b>";?> 
                                                </strong>                    
                                        <!-- but it's just tactics -->    
                                    <?php } elseif ($db_array == NULL) {  ?>
                                                    <?php  echo"now , couldn't find a values"; ?> 
                                    <?php } else { ?>
                                                    <?php echo"if you're sure ! please click confirm."; ?>
                                    <?php } ?>  
                            </div>    
                        </div>
                    </section>
                    <!-- result -->


            </form>
            <?php } ?>
            <!-- show info after delete infomation -->
</body>
</html>