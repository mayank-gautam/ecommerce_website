<!--HEADER CODE-->
<?php
    include 'admin_header.php';
    include '../db.php'
?>
<?php
    if(!isset($_SESSION['user']))
    {
        header("Location: ../enter.php");
        exit();
    }
?>

<!--BODY CODE-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Update Page</title>
    <link
      rel="icon"
      href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png"
      type="image/gif"
      sizes="16x16"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <style>
      * {
        font-family: sans-serif;
      }

      body {
        margin: 0;
      }

      /*FORM CSS*/

      html {
        box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }

      input {
        display: block;
        width: 100%;
        padding: 0.2em;
        margin: 0.2em 0 0.6em;
        font-size: 1.2em;
      }

      input[type="submit"] {
        background-color: salmon;
        border: none;
        margin: 1em 0;
        color: white;
        padding: 1em;
      }

      .message {
        background: blanchedalmond;
        padding: 1em 0.5em;
        margin: 1em 0;
      }

      a {
        text-decoration: none;
        color: #000000;
        outline: none;
      }

      nav a {
        font-size: 25px;
      }

      section {
        margin-bottom: 3em;
        margin-top: 2em;
        margin-left: 40%;
      }

    </style>
  </head>

  <body>
      <section style="margin-left: 300px; margin-right: 300px;">
        <h2 align="center">Product Update Form</h2>
        <form class="add-form" action="/ankit_jain/Ank_Product_PHP/admin/admin_updated.php" method="POST">
            <?php
                if(isset($_POST['submit']))
                {
                    $product_id = $_POST['product_id'];
                    try
                    {
                        $sql = "SELECT * FROM product_data WHERE prod_id = '$product_id'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $product_id = $row['prod_id'];
                                $product_name = $row['prod_name'];
                                $product_qty = $row['prod_qty'];
                                $product_price = $row['prod_price'];
                                $product_desc = $row['prod_desc'];
                                $product_loc = $row['prod_loc'];

                                echo '<label>Product Id:</label>';
                                echo '<input type="text" name="prod_id" value="'.$product_id.'">';

                                echo'<label>Product Name:</label>';
                                echo '<input type="text" name="prod_name" value="'.$product_name.'" >';

                                echo '<label>Product Quantity:</label>';
                                echo '<input type="number" name="prod_qty" value="'.$product_qty.'" >';

                                echo '<label>Product Price:</label>';
                                echo '<input type="number" name="prod_price" value="'.$product_price.'" >';

                                echo '<label>Product Description:</label>';
                                echo '<input type="text" name="prod_desc" value="'.$product_desc.'" >';

                                echo '<label>Product URL:</label>';
                                echo '<input type="text" name="prod_url" value="'.$product_loc.'" >';

                            }
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
            ?>
        
          <input type="submit" name="update" value="Update New Details">
          <input type="hidden" name="did_login" value="true">
      </form>
      </section>
  </body>
</html>



  <!--FOOTER CODE-->
<?php
    include 'admin_footer.php';
?>