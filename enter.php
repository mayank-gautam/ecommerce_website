<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        header("Location: view.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Assignment">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, REST API">
  <meta name="author" content="Ankit Jain">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/SignUp Page</title>
  <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/Lock-1320568043107965480.png" type="image/gif" sizes="16x16">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  
  <style>
	  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

	* {
		box-sizing: border-box;
	}

	body {
		background: #f6f5f7;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		font-family: 'Montserrat', sans-serif;
		height: 100vh;
		margin: -20px 0 50px;
	}

	h1 {
		font-weight: bold;
		margin: 0;
	}

	h2 {
		text-align: center;
	}

	p {
		font-size: 14px;
		font-weight: 100;
		line-height: 20px;
		letter-spacing: 0.5px;
		margin: 20px 0 30px;
	}

	span {
		font-size: 12px;
	}

	a {
		color: #333;
		font-size: 14px;
		text-decoration: none;
		margin: 15px 0;
	}

	button {
		border-radius: 20px;
		border: 1px solid green;
		background-color: green;
		color: #FFFFFF;
		font-size: 12px;
		font-weight: bold;
		padding: 12px 45px;
		letter-spacing: 1px;
		text-transform: uppercase;
		transition: transform 80ms ease-in;
		cursor: pointer;
	}

	button:active {
		transform: scale(0.95);
	}

	button:focus {
		outline: none;
	}

	button.ghost {
		background-color: transparent;
		border-color: #FFFFFF;
	}

	form {
		background-color: #FFFFFF;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 50px;
		height: 100%;
		text-align: center;
	}

	input {
		background-color: #eee;
		border: none;
		padding: 12px 15px;
		margin: 8px 0;
		width: 100%;
	}

	.container {
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
				0 10px 10px rgba(0,0,0,0.22);
		position: relative;
		overflow: hidden;
		width: 768px;
		max-width: 100%;
		min-height: 570px;
	}

	.form-container {
		position: absolute;
		top: 0;
		height: 100%;
		transition: all 0.6s ease-in-out;
	}

	.sign-in-container {
		left: 0;
		width: 50%;
		z-index: 2;
	}

	.container.right-panel-active .sign-in-container {
		transform: translateX(100%);
	}

	.sign-up-container {
		left: 0;
		width: 50%;
		opacity: 0;
		z-index: 1;
	}

	#error{
		color: red;
		font-size: 14px;
		margin-top: 0px;
		margin-bottom: 10px;
	}

	#error1{
		color: red;
		font-size: 14px;
		margin-top: 0px;
		margin-bottom: 10px;
	}

	.container.right-panel-active .sign-up-container {
		transform: translateX(100%);
		opacity: 1;
		z-index: 5;
		animation: show 0.6s;
	}

	@keyframes show {
		0%, 49.99% {
			opacity: 0;
			z-index: 1;
		}
		
		50%, 100% {
			opacity: 1;
			z-index: 5;
		}
	}

	.overlay-container {
		position: absolute;
		top: 0;
		left: 50%;
		width: 50%;
		height: 100%;
		overflow: hidden;
		transition: transform 0.6s ease-in-out;
		z-index: 100;
	}

	.container.right-panel-active .overlay-container{
		transform: translateX(-100%);
	}

	.overlay {
		background: green;
		background: -webkit-linear-gradient(to right, #56ab2f, #8ed438);
		background: linear-gradient(to right, #56ab2f, #8ed438);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 0 0;
		color: #FFFFFF;
		position: relative;
		left: -100%;
		height: 100%;
		width: 200%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.check{
		color: #56ab2f;
		font-size: 24px;
	}

	#gender{
		padding-left: 35px;
		padding-right: 35px;
		font-size: 14px;
		background-color: #eee;
		border: none;
		padding: 12px 15px;
		margin: 8px 0;
		width: 100%;
		color: rgb(148, 148, 148);
		margin-bottom: 20px;
	}

	#gender:focus {
		color: black;
	}

	.container.right-panel-active .overlay {
		transform: translateX(50%);
	}

	.overlay-panel {
		position: absolute;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 40px;
		text-align: center;
		top: 0;
		height: 100%;
		width: 50%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.overlay-left {
		transform: translateX(-20%);
	}

	.container.right-panel-active .overlay-left {
		transform: translateX(0);
	}

	.overlay-right {
		right: 0;
		transform: translateX(0);
	}

	.container.right-panel-active .overlay-right {
		transform: translateX(20%);
	}

	.social-container {
		margin: 20px 0;
	}

	.social-container a {
		border: 1px solid #DDDDDD;
		border-radius: 50%;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 0 5px;
		height: 40px;
		width: 40px;
	}

	footer {
		background-color: #222;
		color: #fff;
		font-size: 14px;
		bottom: 0;
		position: fixed;
		left: 0;
		right: 0;
		text-align: center;
		z-index: 999;
	}

	footer p {
		margin: 10px 0;
	}

	footer i {
		color: red;
	}

	footer a {
		color: #3c97bf;
		text-decoration: none;
	}
  </style>
  
</head>

<body>
    <h2>Just a <span class="check">check</span>, before we get <span class="check">you</span> onboard...!! &nbsp; 🚀🚀</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <!--ACCOUNT CREATE FORM-->
            <form name="signUp" action="/mayank.gautam/EcommerceWebsite/register.php" method="POST" onsubmit="return formValidation()">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use your email for registration</span>
                <input name="user_name" type="text" placeholder="Full Name" />
                <input name="user_email" type="email" placeholder="Email" />
                <input name="user_password" type="password" placeholder="Password" />
                <input name="user_contact" type="number" placeholder="Contact Number" />
                <input name="user_address" type="text" placeholder="Address"/>
                <input name="user_pincode" type="number" placeholder="Pin Code"/>
                <span id="error"></span>
                <button id="register" name="register">Sign Up</button>
            </form>
        </div>

        <!--SIGN IN FORM-->
        <div class="form-container sign-in-container">
            <form name="signIn" action="/mayank.gautam/EcommerceWebsite/login.php" method="POST" onsubmit="return formValidation2()">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use your email account</span>
                <input name="email2" type="email" placeholder="Email" />
                <input name="password2" type="password" placeholder="Password" />
                <a href="/mayank.gautam/EcommerceWebsite/error.php">Forgot your password?</a>
                <span id="error1"></span>     
                <!--Code works for button also--> 
                <button id="signin" name="signin">Sign In</button>
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!  😇</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend! &nbsp;&nbsp; 😄</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!--External JS-->
    <script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
		
		
		/*Log In Code*/
		function formValidation2()
		{
			var email2 = document.forms["signIn"]["email2"];
			var password2 = document.forms["signIn"]["password2"];

			if(email2.value == "" || !(email_check2(email2)) )
			{
				document.getElementById("error1").innerHTML = "** Email Format is incorrect <br><br>";
				document.getElementById("error1").style.color = "red";
				document.getElementById("error1").style.fontSize = "14px";
				email2.focus();
				return false; 
			}
			else
			{
				clear1();
				if(password2.value == "" || password2.value.length < 8)
				{
					document.getElementById("error1").innerHTML = "** Password must be of 8 digits!! <br><br>";
					document.getElementById("error1").style.color = "red";
					document.getElementById("error1").style.fontSize = "14px";
					password2.focus();
					return false; 
				}
				else
				{
					clear1();
					return true;
				}
			}
		}

		function email_check2(uemail)
		{
			var user_email = uemail.value;
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(user_email.match(mailformat))
			{
				return true;
			}
			return false;
		}

		function clear1()
		{
			document.getElementById("error1").innerHTML = "";
		}
		
		
		
		/*SignUp code*/
		function formValidation()
		{
			var name = document.forms["signUp"]["user_name"];
			var email = document.forms["signUp"]["user_email"];
			var password = document.forms["signUp"]["user_password"];
			var contact = document.forms["signUp"]["user_contact"];
			var address = document.forms["signUp"]["user_address"];
			var pincode = document.forms["signUp"]["user_pincode"];

			if(name.value == "")
			{
				document.getElementById("error").innerHTML = "";
				document.getElementById("error").innerHTML = "** Name must be filled out <br>";
				name.focus();
				return false; 
			}
			else
			{
				clear();
				if(email.value == "" || !(email_check(email)) )
				{
					document.getElementById("error").innerHTML = "** Email Format is incorrect <br>";
					email.focus();
					return false; 
				}
				else
				{
					clear();
					if(password.value == "" || password.value.length < 8)
					{
						document.getElementById("error").innerHTML = "** Password must be of 8 digits!! <br>";
						password.focus();
						return false; 
					}
					else
					{
						clear();
						if(contact.value == "" || contact.value.length != 10)
                        {
                            document.getElementById("error").innerHTML = "** Mobile Number must be of 10 digits!! <br>";
                            contact.focus();
                            return false; 
                        }
						else
						{
							clear();
                            if(address.value == "")
                            {
                                document.getElementById("error").innerHTML = "** Address is mandatory!! <br>";
                                address.focus();
                                return false; 
                            }
							else
							{
								clear();
								if(pincode.value == "" || pincode.value.length != 6)
								{
									document.getElementById("error").innerHTML = "** Pin Code is incorrect!! <br>";
									pincode.focus();
									return false; 
								}
								else
								{
									clear();
									return confirm("Are you sure you want to submit ?");
								}
							}
						}
					}
					
				}
			}
		}

		function email_check(uemail)
		{
			var user_email = uemail.value;
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(user_email.match(mailformat))
			{
				return true;
			}
			return false;
		}

		function clear()
		{
			document.getElementById("error").innerHTML = "";
		}

        // function zoom() 
        // {
        //     document.body.style.zoom = "90%" 
        // }
	</script>

</body>
</html>
