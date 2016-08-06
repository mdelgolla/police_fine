<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Integrated Fine Payment System 
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/modern-business.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="font-awesome/css/style.css" rel="stylesheet" />

</head>

<body>


	<div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="login.html">Log In</a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
					<li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contacts.html">Contact</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

<form>
  <h1>Driver Log in</h1>
  <div class="inset">
  <p>
    <label for="LicenceNo">LICENCE NO</label>
    <input type="text" name="LicenceNo" id="LicenceNo">
  </p>
  <p>
    <label for="email">EMAIL ADDRESS</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember me for 14 days</label>
  </p>
  </div>
  <p class="p-container">
    <span>Forgot password ?</span>
    <!--input button type="submit" name="go" id="go" value="Log in"-->	
	<a href="form.html" class="btn btn-default">Log In</a>
	
	
  </p>
</form>
</div>
</body>
</html>
