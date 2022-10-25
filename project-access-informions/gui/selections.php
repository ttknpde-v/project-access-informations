<!-- file all functions for use into a table database -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pratice php sql bootstrap">
    <meta name="author" content="thitikorn's a dev thai">
    <link rel="stylesheet" href="../css/selections-style.css">
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
                <li class="nav-item"><a class="nav-link active" href="selections.php">selections & processes</a></li>
                <!-- name class of dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">menu </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../units/insert-info.php">insert informations</a>
                        <a class="dropdown-item" href="../units/selec-info.php">select informations</a>
                        <a class="dropdown-item" href="../units/update-info.php">update informations</a>
                        <a class="dropdown-item" href="">four</a>

                    </div>
                </li>
                <!-- name class of dropdown -->
                <li class="nav-item"><a class="nav-link" href="#">contact us</a></li>
            </ul>
    </nav>
    <!-- menu bar -->

    <!-- content -->
    <section class="">
        
                <div class="control-intro">
                    <div class="intro">
                        <h3>Hello , administrator</h3>
                    </div>
                </div>

            <div class="contro-contai">
                
                <div class="container">
                    
                    <div class="alert alert-success">
                        <strong>insert information !! </strong><a class="alert-link" href="../units/insert-info.php">click please.</a>
                    </div>

                    <div class="alert alert-success">
                        <strong>update information !! </strong><a class="alert-link" href="../units/update-info.php">click please.</a>
                    </div>

                    <div class="alert alert-success">
                        <strong>delete information !! </strong><a class="alert-link" href="../units/delete-info.php">click please.</a>
                    </div>

                    <div class="alert alert-success">
                        <strong>select information !! </strong><a class="alert-link" href="../units/selec-info.php">click please.</a>
                    </div>

                </div>
                
            </div>
    
    </section>
    <!-- content -->

</body>
</html>