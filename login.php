<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Login - T School</title>
</head>

<body class="body-login">
    <div class="black-fill"><br><br>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <form class="login" method="post" action="./req/login.php">
                <div class="text-center">
                    <img src="./img/logo.png" width="100">
                </div>
                <h3>Login</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_GET['error']?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="uname" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Login As</label>
                    <select class="form-control" name="role" required>
                        <option value="1">Admin</option>
                        <option value="2">Teacher</option>
                        <option value="3">Student</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.php" class="text-decoration-none">Home</a>
            </form>
            <br><br>
            <div class="text-center text-light">
                Copyright &copy; 2023 T School. All rights reserved.
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>