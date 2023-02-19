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

    /*""""""""""""""""""""""""""""""""""""""""*/
    /*"""""""""""""""  Footer  """""""""""""""*/
    /*""""""""""""""""""""""""""""""""""""""""*/
    footer {
      width: 100%;
      height: 10em;
      margin: 10em auto 0 auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #fffbf0;
    }

    footer p:nth-child(1) {
      margin: 0.5em 0 0.25em 0;
      font-size: 1.5em;
      text-transform: capitalize;
    }

    #copy {
      margin: 0;
      font-size: 0.9em;
      padding-top: 10px;
    }

    #footerLink {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #footerLink a {
      margin: 0 0.25em;
    }

    #footerLink a:hover {
      transform: scale(1.2);
    }

    #footerLink img {
      width: 2em;
    }
  </style>
</head>

<body>
  <footer style="
    margin-top: 0px">
    <p>You Can Follow Us On</p>
    <div id="footerLink">
      <a href="https://www.facebook.com/"><img src="../static/facebook.png" alt="FB" /></a>
      <a href="https://www.youtube.com/"><img src="../static/youtube.png" alt="YT" /></a>
      <a href="https://github.com/"><img src="../static/github.png" alt="GT" /></a>
      <a href="https://www.instagram.com/"><img src="../static/instragram.png" alt="IG" /></a>
    </div>
    <p id="copy">© Copyright 2022. Ankit Jain. All Rights Reserved.</p>
  </footer>
</body>

</html>