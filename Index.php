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
	<script src="js/jquery.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/modern-business.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />

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
		</div>
    <header id="myCarousel" class="carousel slide">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/images/01.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Easy Pay</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/images/02.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Fine due today or overdue?</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/images/03.jpg');"></div>
                <div class="carousel-caption">
                    <h2>In a rush to pay your fine?</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    
    </header>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               <marquee behavior="scroll" direction="left" id="bg"><font color="#003d4d"> Welcome to Easy Pay On-Line Fine Payment System </font></marquee>
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" id="gamage">
                <div class="panel-heading" id="baff1">
                    <h4 id="vsg3"><i class="fa fa-fw fa-check"></i>Offences relted to Driving Licence</h4>
                </div>
                <div class="panel-body">
                    <p>According to the mortor vehicle act introduced in 1988, here mention the offences and the penalties related to them</p>
                    <a href="about.html" class="btn btn-default" style="background-color:#0080ff"><b>Learn More</b></a>
                </div>
                    </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" id="sasith">
                <div class="panel-heading" id="baff2">
                    <h4 id="vsg2"><i class="fa fa-fw fa-check"></i>Easy To Pay</h4>
                </div>
                <div class="panel-body">
                    <p>Are you fed up with wasting time in post office and police stations? Then here is the solution we have provide you with the 
                    facility of paying off your fines using your credit/debit card</p>
                    <a href="about.html" class="btn btn-default" style="background-color:#0080ff"><b>Learn More</b></a>
                </div>
            </div>
        </div>
        <div class="col-md-4" >
            <div class="panel panel-default" id="visal" >
                <div class="panel-heading" id="baff3">
                    <h4 id="vsg1"><i class="fa fa-fw fa-check"></i> My Mobile</h4>
                </div>
                <div class="panel-body">
                    <p>Now you can pay your fine slip using your mobile, Just a simple procedure to follow</p>
                    <a href="about.html" class="btn btn-default" 
					style="background-color:#0080ff"><b>Learn More</b></a>
                </div>
            </div>
        </div>
        </div>

    <script type="text/javascript" >
		
		$('document').ready(function(){
			$('#visal').mouseover(function(){
				$('#visal').css("background-color","#99ebff");
			})
			$('#visal').mouseout(function(){
				$('#visal').css("background-color","white");
			})
			
			$('#sasith').mouseover(function(){
				$('#sasith').css("background-color","#99ebff");
			})
			$('#sasith').mouseout(function(){
				$('#sasith').css("background-color","white");
			})
			
			$('#gamage').mouseover(function(){
				$('#gamage').css("background-color","#99ebff");
			})
			$('#gamage').mouseout(function(){
				$('#gamage').css("background-color","white");
			})
			
			
			
		
			
			
			$('#bg').mouseover(function(){
				$('#bg').css("color","#0a6f9a");
			})
			$('#bg').mouseout(function(){
				$('#bg').css("color","#000000");
			})
			
			
			
			$('#baff1').mouseover(function(){
				$('#baff1').css("background-color","#9a889d");
			})
			$('#baff1').mouseout(function(){
				$('#baff1').css("background-color","white");
			})
			$('#baff2').mouseover(function(){
				$('#baff2').css("background-color","#9a889d");
			})
			$('#baff2').mouseout(function(){
				$('#baff2').css("background-color","white");
			})
			$('#baff3').mouseover(function(){
				$('#baff3').css("background-color","#9a889d");
			})
			$('#baff3').mouseout(function(){
				$('#baff3').css("background-color","003d4d");
			})
			
		})
	</script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
	
	
</body>
</html>
