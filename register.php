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
            if(isset($_POST['register']))
            {
                //Fetching the post values
                $u_name = $_POST['user_name'];
                $email = $_POST['user_email'];
                $password = $_POST['user_password'];
                $contact = $_POST['user_contact'];
                $address = $_POST['user_address'];
                $pincode = $_POST['user_pincode'];
                $hash = password_hash($password, PASSWORD_DEFAULT);

                try
                {
                    //Creating the new user id
                    $last_id;
                    $new_user_id = 'C00';
                    $sql = "SELECT * FROM customer_data";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            $last_id = $row["cust_id"];
                        }
                        $last_id_char = substr($last_id, -1) + 1;
                        $new_user_id .= $last_id_char;
                        //echo $new_user_id;
                    } 
                    else 
                    {
                        throw new Exception();
                    }


                    //Inserting the new user details into the database
                    $sql = "INSERT INTO customer_data VALUES ('$new_user_id', '$u_name', '$email', '$contact', '$address', $pincode, '$hash')";

                    if ($conn->query($sql) === TRUE) 
                    {
                        header("Location: success.php");
                        die();
                    } 
                    else 
                    {
                        throw new Exception();
                    }
                }
                catch(Exception $e1){
                    header("Location: error.php");
                    die();
                }
                finally{
                    $conn->close();
                }

            }
        }
    }
    catch(Exception $e){
        header("Location: error.php");
        exit();
    }
    
?>