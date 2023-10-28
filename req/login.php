<?php
    session_start();
    if (isset($_POST['uname']) &&
        isset($_POST['pass']) &&
        isset($_POST['role'])) {
            
            include '../DB_connection.php';

            $uname = $_POST['uname'];
            $pass = $_POST['pass'];
            $role = $_POST['role'];

            if (empty($uname) ) {
                $em = "Username is required";
                header("Location: ../login.php?error=$em");
                exit;
            }elseif (empty($pass)) {
                $em ="Password is required";
                header("Location: ../login.php?error=$em");
                exit;
            }elseif (empty($role)) {
                $em = "An error Occurred";
                header("Location: ../login.php?error=$em");
                exit;
            }else{
               if ($role == '1') {
                    $sql = "SELECT * FROM admin 
                            WHERE username = ? ";

                    $role = "Admin";
               }elseif ($role =='2') {
                    $sql = "SELECT * FROM teachers 
                            WHERE username = ? ";

                    $role = "Teacher";
               }else if($role =='3'){
                    $sql = "SELECT * FROM students 
                            WHERE username = ? ";

                    $role = "Student";
               }else {
                    $em = "An error Occurred";
                    header("Location: ../login.php?error=$em");
                    exit;
               }

               $stmt = $conn->prepare($sql);
               $stmt->execute([$uname]);

               if ($stmt->rowCount() == 1) {
                    $user = $stmt->fetch(); 
                    $username = $user["username"];
                    $password = $user["password"];
                    $fname = $user["fname"];
                    $lname = $user["lname"];
                    $id = $user["id"];

                    if($username === $uname){
                        if (password_verify($pass, $password)) {
                            $_SESSION['id'] = $id;
                            $_SESSION['fname'] = $fname;
                            $_SESSION['role'] = $role;
                            header("Location: ../home.php");
                            exit;
                        }else {
                            $em = "Incorrect Password";
                            header("Location: ../login.php?error=$em");
                            exit;
                        }
                    }else {
                        $em = "Incorrect Username";
                        header("Location: ../login.php?error=$em");
                        exit;
                    }
               }else{
                    $em = "Incorrect Username or Password";
                    header("Location: ../login.php?error=$em");
                    exit;
               }
            }

    }else {
        header("Location: ../login.php");
    }
