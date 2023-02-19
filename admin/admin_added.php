<?php
    session_start();
    include '../db.php';
    try
    {
        {
            if(isset($_POST['submit']))
            {
                //Fetching the post values
                $prod_id = $_POST['prod_id'];
                $prod_name = $_POST['prod_name'];
                $prod_qty = $_POST['prod_qty'];
                $prod_price = $_POST['prod_price'];
                $prod_desc = $_POST['prod_desc'];
                $prod_loc = $_POST['prod_url'];

                try
                {
                    //Inserting the new user details into the database
                    $sql = "INSERT INTO product_data VALUES ('$prod_id', '$prod_name', $prod_qty, $prod_price, '$prod_desc', '$prod_loc')";

                    if ($conn->query($sql) === TRUE) 
                    {
                        header("Location: admin_view.php");
                        die();
                    } 
                    else 
                    {
                        throw new Exception();
                    }
                }
                catch(Exception $e1){
                    header("Location: ../error.php");
                    die();
                }
                finally{
                    $conn->close();
                }

            }
        }
    }
    catch(Exception $e){
        header("Location: ../error.php");
        exit();
    }
    
?>