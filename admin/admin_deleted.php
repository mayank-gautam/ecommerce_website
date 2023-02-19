<?php
    session_start();
    include '../db.php';
    try
    {
        {
            if(isset($_POST['submit']))
            {
                //Fetching the post values
                $prod_id = $_POST['product_id'];

                try
                {
                    //Deleting product details from the database
                    $sql = "DELETE FROM product_data WHERE prod_id = '$prod_id'";

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