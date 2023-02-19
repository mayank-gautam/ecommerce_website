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
  <title>Admin Delete Product Page</title>
  <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png" type="image/gif" sizes="16x16">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
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
            padding: .2em;
            margin: .2em 0 .6em;
            font-size: 1.2em;
        }

        input[type=submit] {
            background-color: salmon;
            border: none;
            margin: 1em 0;
            color: white;
            padding: 1em;
        }

        .message {
            background: blanchedalmond;
            padding: 1em .5em;
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

    section{
        margin-bottom: 3em;
        margin-top: 2em;
        margin-left: 40%;
    }

  </style>
</head>

<body>
  <section style="margin-left: 300px; margin-right: 300px;">
    <h2 align="center">Product Delete Form</h2>
    <form class="delete-form" action="/ankit_jain/Ank_Product_PHP/admin/admin_deleted.php" method="POST">
      <label>Enter Product Id:</label>
      <input type="text" name="product_id" placeholder="Product Id Number"/>

      <input type="submit" name="submit" value="Delete Product" />
      <input type="hidden" name="did_login" value="true" />
    </form>
  </section>
</body>

</html>


  <!--FOOTER CODE-->
<?php
    include 'admin_footer.php';
?>