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
  <title>BuyWise- eCommerce</title>
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

    .btn-BuyNow {
      width: 10em;
      height: 3em;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: green;
      border-radius: 0.5em;
    }

    .btn-BuyNow div {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .btn-BuyNow div img {
      width: 2em;
      height: 2em;
      object-fit: contain;
    }

    .btn-BuyNow div p {
      margin: 0;
      font-size: 1.1rem;
      color: #ffffff;
    }

    #headerModel {
      padding-bottom: 5em;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #modelText {
      width: 30em;
      font-weight: bold;
    }

    #modelText h1 {
      margin: 0;
      font-size: 3rem;
      text-transform: uppercase;
      color: #363958;
    }

    #modelText span {
      display: block;
      text-transform: uppercase;
      color: #fabe4c;
    }

    #modelText p {
      width: 75%;
      margin: 0.5em 0 1.25em 0;
    }

    #modelText .btn-BuyNow div p {
      margin: 0;
    }

    #modelImg {
      width: 25em;
    }

    #modelImg img {
      width: 100%;
      object-fit: contain;
    }

  </style>
</head>

<body>
  <header>
    <div class="box" id="headerModel">
      <div id="modelText">
        <h1><span>Stock your Groceries </span>For the Month &nbsp; &#128516 &#128515</h1>
        <p>Hurry Up!! Shop now and get the best deals across all products.</p>
        <div class="btn-BuyNow">
          <a href="/ankit_jain/Ank_Product_PHP/products.php">
            <div>
              <img src="static/shopping-cart 1.png" alt="" />
              <p>Buy Now</p>
            </div>
          </a>
        </div>
      </div>
      <div id="modelImg">
        <img src="static/background2.png" />
      </div>
    </div>
  </header>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  </script>
</body>

</html>

<!--FOOTER CODE-->
<?php
    include 'footer.php';
?>
