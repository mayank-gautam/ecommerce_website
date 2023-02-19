<!--HEADER CODE-->
<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: enter.php");
        exit();
    }
?>

<!--BODY CODE-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile Page</title>
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

    section{
        margin-bottom: 3em;
        margin-top: 2em;
        margin-left: 40%;
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
        <a href="/mayank.gautam/EcommerceWebsite/enter.php">Product</a>
        <a href="/mayank.gautam/EcommerceWebsite/about.php">About us</a>
        <a href="/mayank.gautam/EcommerceWebsite/contact.php">Contact us</a>
        <button type="button" class="btn btn-primary" id="logout_btn" style="margin-top: -9px;">Logout</button>
      </nav>
    </div>
  </header>
  <section>
    <h2>User Profile Details</h2>
    <div>
        <p>&nbsp;&nbsp;Your account details are below:</p>
        <table>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Client ID:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['id']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>C. Name:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['name']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email ID:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['user']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Contact:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['contact']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Address:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['address']);
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pin Code:</b></td>
                <td>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo($_SESSION['pincode']);
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script>
      $(document).ready(function f() {
        $('#logout_btn').click(function f() {
          window.location.href = "/mayank.gautam/EcommerceWebsite/logout.php"
        });
      });
    </script>
</body>

</html>


<!--FOOTER CODE-->
<?php
    include 'footer.php';
?>