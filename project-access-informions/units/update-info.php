<?php require('../function/update-condition.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pratice php sql bootstrap">
    <meta name="author" content="thitikorn's a dev thai">
    <link rel="icon" href="../image/earth.jpg">
    <link rel="stylesheet" href="../css/update-info-style.css">
    <!-- call bootstrap and js -->
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

    <?php if ( !isset($_POST['send']) ) { // if send equals NULL do ?> 
        
        <div class="control-alert">    
                <div class="intro">
                    <h4 class="decribe-from">find the people on this form</h4>
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
    
            
    <?php } if ( isset($_POST['send']) ) { // if send have a values ?>

        

        <form action="" method="post"> <!-- form update -->
            <div class="control-form-update">
                
                    <div class="intro">
                        <h4>update the information</h4>
                        <p>please , correct the information and click send</p>
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
                                value = "<?php if ($db_array != NULL)  { printf($db_array['nickname']); } else { printf($message_tellsnull); } // in value ?>" 
                                <?php if($db_array != NULL) {  ?> require  <?php } else { ?> readonly <?php } // it's just tactics ?> >     
                            </div>
                    
                            <div class="input-group flex-nowrap">
                                <label class="input-group-text" for="">age </label>
                                <input class="form-control" type="number" name="d_age" id="" 
                                value = "<?php if ($db_array != NULL)  { printf($db_array['age']); } else { printf($message_tellsnull); } // in value ?>" 
                                <?php if($db_array != NULL) {  ?> require  <?php } else { ?> readonly <?php } // it's just tactics ?>  min="0" max="120" >  
                            </div>

                </div> <!-- end control form group -->

                <?php if($db_array != NULL) { // if in ?>   
                    
                    <div class="control-form-check">
                            
                            <div class="form-check">
                                <label for="">gender </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="d_gender" id="" value="female" required>female
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="d_gender" id="" value="male" required>male
                            </div>
                            
                            <div class="form-check">    
                                <input class="form-check-input" type="radio" name="d_gender" id="" value="other"required>other
                            </div>

                    </div>

                <?php } ?>    
       
                        <div class="control-btn">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm" type="submit" name="send-update" <?php if ($db_array == NULL) { ?> disabled <?php } ?> >send</button>
                                <input class="btn btn-secondary btn-sm" type="reset"  value ="cancel" <?php if ($db_array == NULL) { ?> disabled <?php } ?> ></input> 
                            </div>
                        </div>
                    
                        <div class="btn-group-contr">
                            <a class="btn btn-secondary btn-sm"  href="update-info.php" >reload</a>  
                        </div>
                    
            </div>
        </form> <!-- end form update -->

    <?php } // if send have a values ?>  

    <!-- content -->

</body>
</html>