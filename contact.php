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
    <title>Contact Page</title>
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
        /*"""""""""""""""  Contact """""""""""""""*/
        /*""""""""""""""""""""""""""""""""""""""""*/
        #sectContact {
            width: 100%;
            margin: 1em auto 1em auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #sectContact img {
            width: 30em;
        }

        #sectContact p {
            margin: .5em;
            font-weight: 700;
            font-size: 2.5em;
            text-transform: uppercase;
        }

        #sectContact div {
            border-radius: 25px;
            box-shadow: .2em .2em 10px rgba(0, 0, 0, .3);
        }

        #sectContact input {
            width: 20em;
            padding: .5em 1em;
            font-size: 1.1em;
            border-radius: 25px;
            border: none;
            outline: none;
        }

        #sectContact a {
            margin-left: .1em;
            padding: .35em 1.5em;
            border-radius: 10px;
            font-size: 1.1em;
            box-shadow: .2em .2em 10px rgba(0, 0, 0, .05);
            background: green;
            border-radius: 25px;
            border: .2em solid green;
            color: #ffffff;
            transition: all ease .2s;
        }

        
    </style>
</head>

<body>
    <section class="box" id="sectContact">
        <img src="static/contact.svg" alt="">
        <p>Stay Connected</p>
        <div>
            <input type="email" name="email" id="email" placeholder="example2022@example.com" required>
            <a id="check">Continue</a>
        </div>
    </section>

</body>

</html>

<!--FOOTER CODE-->
<?php
    include 'footer.php';
?>