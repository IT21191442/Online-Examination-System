<?php

    require_once('config.php');

    if(isset($_POST['submit'])){
        
        $username  = $_POST['username'];
        $email  = $_POST['email'];
        $pass  = $_POST['pwd'];
        $pwd = md5($pass);

        if(empty($username || $email || $pwd)){

            echo '<script>
            alert("Empty fields");
            </script>';
            header('refresh:0, url="../resetPwd.php?EmptyFields"');
            exit();
        }
        else{

            $sql = "SELECT username, email FROM employees WHERE username = '$username'";    //getting username and email from the table for validation 

            $result = mysqli_query($conn, $sql);

            if(!$result){
                echo '<script>
                alert("Query failed execution");
                </script>';
                header('refresh:0, url="../resetPwd.php?ExecutionFailed"');
                exit();
            }
            else{

                while($row = mysqli_fetch_assoc($result)){  //reading information in the table

                    $db_username = $row['username'];
                    $db_email = $row['email'];
                }
                    if($row = mysqli_num_rows($result) == 0){   //checking whether the username exists
                        echo '<script>
                        alert("Invalid username");
                        </script>';
                        header('refresh:0, url="../resetPwd.php?InvalidUsername"');
                        exit();
                    }
                    else if($username != $db_username){
                        
                        echo '<script>
                        alert("Invalid username");
                        </script>';
                        header('refresh:0, url="../resetPwd.php?InvalidUsername"');
                        exit();
                    }
                    else if($email != $db_email){

                        echo '<script>
                        alert("Invalid email");
                        </script>';
                        header('refresh:0, url="../resetPwd.php?InvalidEmail"');
                        exit();
                    }
                    else if($username == $db_username && $email = $db_email){      //username and email validation
                        
                        $sql = "UPDATE employees SET password = '$pwd' WHERE username = '$username'";

                        $result = mysqli_query($conn, $sql);

                        if($result){
                            header('refresh:0, url="../login.php?ResetSuccessful"');
                        }
                        else{
                            echo '<script>
                            alert("Query failed execution");
                            </script>';
                            header('refresh:0, url="../resetPwd.php?ExecutionFailed"');
                            exit();
                        }
                    }
            }
        }       
    }
    else{
        echo '<script>
                alert("Empty fields");
            </script>';
            header('refresh:0, url="../resetPwd.php?EmptyFields"');
            exit();
    }

?>