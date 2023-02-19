<?php
    session_start();
?>

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
    
    header {
      background-color: #fffbf0;
    }

    #headerBar {
      padding: 1em 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #headerBar img {
      width: 10em;
    }

    #headerBar a {
      padding: 0.5em 1em;
    }

  </style>
</head>

<body>
  <header>
    <div class="box" id="headerBar">
      <a href="/mayank.gautam/EcommerceWebsite/index.php"><img src="static/site_logo.png" alt="BuyWise" /></a>
      <span></span>
      <nav>
        <a href="/mayank.gautam/EcommerceWebsite/index.php">Home</a>
        <a href="/mayank.gautam/EcommerceWebsite/cart.php">
          <?php
            if(isset($_SESSION['user']))
            {
                echo("Your Cart");
            }
            else
            {
              echo("");
            }
          ?>
        </a>
        <a href="/mayank.gautam/EcommerceWebsite/about.php">About us</a>
        <a href="/mayank.gautam/EcommerceWebsite/contact.php">Contact us</a>
        <a href="/mayank.gautam/EcommerceWebsite/cart.php">
          <?php
            if(isset($_SESSION['user']))
            {
                echo("");
            }
            else
            {
              echo("Product");
            }
          ?>
        </a>
        <button type="button" class="btn btn-primary" id="login_btn" style="margin-top: -9px;">
        <?php
          if(isset($_SESSION['user']))
          {
              echo("Profile");
          }
          else
          {
            echo("Login/ SignUp");
          }
        ?>
        </button>
      </nav>
    </div>
  </header>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function F1() {
      $('#login_btn').click(function f() {
        window.location.href = "/mayank.gautam/EcommerceWebsite/profile.php"
      });
    });
  </script>
</body>

</html>