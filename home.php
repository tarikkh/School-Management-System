<?php
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['role'])) {
        
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Home - T School</title>
</head>

<body class="body-home">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3 text-center bg-light">
            <small>Role:
                <b>
                    <?php
                        if ($_SESSION['role'] == 'Admin') {
                            echo 'Admin';
                        }elseif($_SESSION['role'] == 'Teacher'){
                            echo 'Teacher';
                        }elseif ($_SESSION['role'] == 'Student') {
                            echo 'Student';
                        }
                    ?>
                </b><br>
                <h3 class="display-4"><?=$_SESSION['fname'] ?></h3>
                <a href="logout.php" class="btn btn-warning">
                    Logout
                </a>
            </small>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php 
    }else {
        header("Location: login.php");
        exit;
    }
?>