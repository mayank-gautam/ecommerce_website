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
    <title>Admin Add Product Page</title>
    <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png" type="image/gif"
        sizes="16x16">
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


        /* Presentational for this pen */
        html {
            background: darkturquoise;
        }

        a {
            text-decoration: none;
            color: #000000;
            outline: none;
        }

        nav a {
            font-size: 25px;
        }

        .box {
            width: 80%;
            margin: 0 auto;
        }

        section {
            margin-bottom: 3em;
            margin-top: 2em;
            margin-left: 40%;
        }
    </style>
</head>

<body>
    <section style="margin-left:300px; margin-right: 300px;">
        <h2 align="center">Product Add Form</h2>
        <form class="add-form" action="/ankit_jain/Ank_Product_PHP/admin/admin_added.php" method="POST">
            <label>Product Id:</label>
            <input type="text" name="prod_id">

            <label>Product Name:</label>
            <input type="text" name="prod_name">

            <label>Product Quantity:</label>
            <input type="number" name="prod_qty">

            <label>Product Price:</label>
            <input type="number" name="prod_price">

            <label>Product Description:</label>
            <input type="text" name="prod_desc">

            <label>Product URL:</label>
            <input type="text" name="prod_url">

            <input type="submit" name="submit" value="Add Details">
            <input type="hidden" name="did_login" value="true">
        </form>
    </section>
</body>

</html>



  <!--FOOTER CODE-->
<?php
    include 'admin_footer.php';
?>