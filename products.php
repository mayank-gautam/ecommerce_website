<?php declare(strict_types = 1);
    include 'header.php';
    include 'db.php';
?>
<?php 
    function add_product($product_id, $product_name, $product_qty, $product_price, $product_desc, $product_loc)
    {
        echo '<div class="content">';
            echo '<img src="'.$product_loc.'">';
            echo '<h3>'.$product_name.'</h3>';
            echo '<p>'.$product_desc.'</p>';
            echo '<h6> ₹'.$product_price.'</h6>';
            echo '<button class="buy-1">Buy Now</button>';
        echo '</div>';
    }
?>

<!--BODY CODE-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Page</title>
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

    /*PRODUCT code*/
    section h3 {
        text-align: center;
        font-size: 30px;
        margin: 0;
        padding-top: 10px;
    }

    section a {
        text-decoration: none;
    }

    section .gallery {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin: 50px 0;
    }

    section .content {
        width: 24%;
        margin: 15px;
        box-sizing: border-box;
        float: left;
        text-align: center;
        border-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: .4s;
    }

    section .content:hover {
        box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        transform: translate(0px, -8px);
        transition: .6s;
    }

    section img {
        width: 180px;
        height: 200px;
        text-align: center;
        margin: 0 auto;
        display: block;
        overflow: scroll;
    }

    section p {
        text-align: center;
        color: #b2bec3;
        padding: 0 8px;
    }

    section h6 {
        font-size: 26px;
        text-align: center;
        color: #222f3e;
        margin: 0;
    }

    section ul {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0px;
    }

    section li {
        padding: 5px;
    }

    section .fa {
        color: #ff9f43;
        font-size: 26px;
        transition: .4s;
    }

    section .fa:hover {
        transform: scale(1.3);
        transition: .6s;
    }

    section button {
        text-align: center;
        font-size: 24px;
        color: #fff;
        width: 100%;
        padding: 15px;
        border: 0px;
        outline: none;
        cursor: pointer;
        margin-top: 5px;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    section .buy-1 {
        background-color: #2183a2;
    }

    section .buy-2 {
        background-color: #3b3e6e;
    }

    section .buy-3 {
        background-color: #0b0b0b;
    }

    @media(max-width: 1000px) {
        section .content {
            width: 46%;
        }
    }

    @media(max-width: 750px) {
        section .content {
            width: 100%;
        }
    }

    section {
        margin-bottom: 3em;
        margin-top: 2em;
        margin-left: 40%;
    }
    </style>
</head>

<body>
    <section style="margin-left: 0px;">
        <h1 align="center" style="margin: 0px"><b>Select Your Product</b></h1>
        <!--Code-->
        <div class="gallery">
            <?php
                try
                {
                    $sql = "SELECT * FROM product_data";
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

                            add_product($product_id, $product_name, $product_qty, $product_price, $product_desc, $product_loc);
                        }
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
            ?>
        </div>
    </section>
</body>

</html>

<!--FOOTER CODE-->
<?php
    include 'footer.php';
?>