<?php
    session_start();
    include 'db.php';
    try
    {
        if(isset($_SESSION['user']))
        {
            header("Location: view.php");
        }
        else
        {
            if(isset($_POST['signin']))
            {
                if( isset($_POST['email2']) && isset($_POST['password2']) ) //error
                {
                    if(filter_var("some@address.com", FILTER_VALIDATE_EMAIL)) {
                        // valid address
                        $email = $_POST['email2'];
                    }
                    else {
                        // invalid address
                        throw new Exception("Invalid login or password");
                    }
                    
                    $password = $_POST['password2'];
                    $u_pwd = NULL;
                    $u_id = NULL;
                    $u_name = NULL;
                    $u_address = NULL;
                    $u_pincode = NULL;
                    $u_contact = NULL;

                    //Logic to verify login and password from DB
                    $sql = "SELECT * FROM customer_data WHERE cust_email = '$email'";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            $u_pwd = $row['cust_password'];
                            $u_id = $row['cust_id'];
                            $u_name = $row['cust_name'];
                            $u_address = $row['cust_address'];
                            $u_pincode = $row['cust_pincode'];
                            $u_contact = $row['cust_contact'];
                            $u_name = $row['cust_name'];
                        }
                        if(password_verify($password, $u_pwd) == TRUE)
                        {
                            //Setting the session variable
                            $_SESSION['user'] = $_POST['email2'];
                            $_SESSION['id'] = $u_id;
                            $_SESSION['address'] = $u_address;
                            $_SESSION['pincode'] = $u_pincode;
                            $_SESSION['contact'] = $u_contact;
                            $_SESSION['name'] = $u_name;

                            //Cookie for 5 minutes
                            setcookie("account", $_POST['email2'], time() + 300);

                            //No need of entire reference here
                            if($email == "admin@gmail.com")
                                header("Location: admin/admin.php");
                            else
                                header("Location: view.php");

                            exit();
                        }
                    } 
                    else
                    {
                        throw new Exception("Invalid login or password");
                    }
                }
                else
                {
                    throw new Exception("Invalid login or password");
                }
            }
            else
            {
                throw new Exception("Invalid login or password");
            }
        }
    }
    catch(Exception $e){
        header("Location: error.php");
        exit() ;
    }
?>