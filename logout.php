<?php
    session_start();
    try
    {
        if(isset($_SESSION['user']))
        {
          session_unset();
          session_destroy();
          header("Location: index.php");
          exit();
        }
        else
        {
          header("Location: index.php");
          exit();
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Logout</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"/>
    <style>
      body,
      h1 {
        font-family: "Raleway", sans-serif;
      }
      body,
      html {
        height: 100%; 
      }
      .bgimg {
        width: 300px;
        height: 300px;
        margin-top: 120px;
        margin-left: 170px;
      }
      a{
          color: black;
          text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div>
        <img class="bgimg" src="static/logout.png"/>
    </div>
      <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logged Out !!</h1>
        <hr class="w3-border-grey" style="margin: auto; width: 40%" />
        <button type="button" class="btn btn-info" id="login" style="margin-left: 257px;">Proceed to Home --> </button>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function f() {
          $('#login').click(function f1(){
            window.location.href = "/ankit_jain/Ank_Product_PHP/";
          });
        });
    </script>
</body>
</html>
