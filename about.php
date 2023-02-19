<!--HEADER CODE-->
<?php
    include 'header.php';
?>

<!--BODY CODE-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Page</title>
    <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png" type="image/gif"
        sizes="16x16" />
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

        /*""""""""""""""""""""""""""""""""""""""""*/
        /*"""""""""""""""  About US """""""""""""""*/
        /*""""""""""""""""""""""""""""""""""""""""*/
        #sectService {
            margin-top: 1em;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 2em;
        }

        #serviceBox {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .serviceBox {
            width: 27.5em;
            height: 6em;
            margin: .5em 0;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 1em;
            box-shadow: 0 .2em 10px rgba(0, 0, 0, .2);
        }

        .serviceBox img {
            width: 4em;
            object-fit: contain;
        }

        .boxText {
            width: 20em;
        }

        .boxText h2 {
            margin: 0;
        }

        .boxText p {
            margin: 0;
            padding-top: .2em;
            font-size: .95rem;
        }

        #serviceImg {
            width: 30em;
        }

        #serviceImg img {
            width: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <section class="box" id="sectService">
        <div id="serviceBox">
            <div class="serviceBox">
                <img src="static/image 12.png" alt="" />
                <div class="boxText">
                    <h2>Find Fresh Groceries</h2>
                    <p>
                        Everybody is different, which is why we offer groceries for every
                        body
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <img src="static/image 13.png" alt="" />
                <div class="boxText">
                    <h2>Free Exchanges</h2>
                    <p>One of the many reasons you can shop with peace of mind.</p>
                </div>
            </div>
            <div class="serviceBox">
                <img src="static/image 14.png" alt="" />
                <div class="boxText">
                    <h2>Contact Our Seller</h2>
                    <p>
                        They are here to help you. That's quite literally what we pay them
                        for.
                    </p>
                </div>
            </div>
        </div>
        <div id="serviceImg">
            <img src="static/XMLID 1.png" alt="" />
        </div>
    </section>
</body>

</html>


<!--FOOTER CODE-->
<?php
    include 'footer.php';
?>