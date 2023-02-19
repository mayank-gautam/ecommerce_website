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
    <title>Admin View Page</title>
    <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png" type="image/gif"
        sizes="16x16">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <style>
        * {
            font-family: sans-serif;
        }

        /**Table CSS **/
        @import url('https://fonts.googleapis.com/css?family=Amarante');

        html {
            overflow-y: scroll;
        }

        body {
            background: #eee url('https://i.imgur.com/eeQeRmk.png');
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 62.5%;
            line-height: 1;
            color: #585858;
            padding: 22px 10px;
            padding-bottom: 55px;
        }

        ::selection {
            background: #5f74a0;
            color: #fff;
        }

        ::-moz-selection {
            background: #5f74a0;
            color: #fff;
        }

        ::-webkit-selection {
            background: #5f74a0;
            color: #fff;
        }

        br {
            display: block;
            line-height: 1.6em;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        ol,
        ul {
            list-style: none;
        }

        input,
        textarea {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        strong,
        b {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        h1 {
            font-family: 'Amarante', Tahoma, sans-serif;
            font-weight: bold;
            font-size: 3.6em;
            line-height: 1.7em;
            margin-bottom: 10px;
            text-align: center;
        }


        /** page structure **/
        #wrapper {
            display: block;
            width: 100%;
            margin-left: 100px;
            margin-right: 100px;
            overflow: hidden;
            background: #fff;
            margin: 0 auto;
            padding: 10px 17px;
        }

        #keywords {
            margin: 0 auto;
            font-size: 1.2em;
            margin-bottom: 15px;
        }


        #keywords thead {
            cursor: pointer;
            background: #c9dff0;
        }

        #keywords thead tr th {
            font-weight: bold;
            padding: 12px 30px;
            padding-left: 42px;
        }

        #keywords thead tr th span {
            padding-right: 20px;
            background-repeat: no-repeat;
            background-position: 100% 100%;
        }

        #keywords thead tr th.headerSortUp,
        #keywords thead tr th.headerSortDown {
            background: #acc8dd;
        }

        #keywords thead tr th.headerSortUp span {
            background-image: url('https://i.imgur.com/SP99ZPJ.png');
        }

        #keywords thead tr th.headerSortDown span {
            background-image: url('https://i.imgur.com/RkA9MBo.png');
        }


        #keywords tbody tr {
            color: #555;
        }

        #keywords tbody tr td {
            text-align: center;
            padding: 15px 10px;
        }

        #keywords tbody tr td.lalign {
            text-align: left;
        }

        /**Table CSS End**/

        section {
            margin-bottom: 3em;
            margin-top: 2em;
            margin-left: 40%;
        }
    </style>
</head>

<body>
    
    <section style="margin-left: 0px;">
        <div id="wrapper">
            <h1>Table of Products/ Items</h1>

            <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th><span>Id</span></th>
                        <th><span>Name</span></th>
                        <th><span>Quantity</span></th>
                        <th><span>Price</span></th>
                        <th><span>Description</span></th>
                        <th><span>URL</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        try
                        {
                            $sql = "SELECT * FROM product_data";
                            $result = mysqli_query($conn, $sql);
                            $conn->query($sql);

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
                            header("Location: ../error.php");
                            die();
                        }
                        finally{
                            $conn->close();
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
<?php 
    function add_product($product_id, $product_name, $product_qty, $product_price, $product_desc, $product_loc)
    {
        echo '<tr>';
            echo '<td class="lalign">'.$product_id.'</td>';
            echo '<td>'.$product_name.'</td>';
            echo '<td>'.$product_qty.'</td>';
            echo '<td>'.$product_desc.'</td>';
            echo '<td> ₹'.$product_price.'</td>';
            echo '<td><a href="'.$product_loc.'" target="_blank">Product Image</a></td>';
        echo '</tr>';
    }
?>

</html>



  <!--FOOTER CODE-->
<?php
    include 'admin_footer.php';
?>