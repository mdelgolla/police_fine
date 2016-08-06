<?php require 'connections/connection.php'?>
<?php
if(!$con){
    die('Could not connect: '.mysqli_error());
}
$sql='SELECT * FROM fines';
$result=mysqli_query($con,$sql);
if(!$result){
    die('Could not retrive data: ');
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        Integrated Fine Payment System
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/modern-business.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	</style>

</head>
<body >
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
    <div class="container">

        <div class="row">
            <div class="col-lg">
                <h1 class="page-header">
                    About Us
                    <small>(Easy Pay)</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
           

        <table class="table table-bordered table-striped">
            <tr style="vertical-align: top"><td class="title"><p style="margin-top:6px;margin-bottom:2px"><font color="#000080"><b>Penalties under MVA</b></font></p></td></tr>
        </table>
        <p>The <font color="#800000">Motor Vehicle Act (MVA) 1988</font>, <font color="#000080">Central Motor Vehicle Rules</font> and <font color="#008000">State Motor Vehicle Rules</font> are the legal instruments for the conduct of road traffic in Sri Lanka. Some of the common offences and the consequent penalties are listed below:</p>
        <p>&nbsp;</p>
        <table class="table table-bordered table-striped">
            <tr>
                <td valign="TOP" class="m-cell" bgcolor="#32557D"><font color="#FFFFFF">ID</td>
                <td valign="TOP" class="l-cell" bgcolor="#32557D"><font color="#FFFFFF"><b>Offences</b></font></td>
                <td valign="TOP" class="l-cell" bgcolor="#32557D"><font color="#FFFFFF"><b>Penalty</b></font></td>
            </tr>
<?php
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo"<tr>";
    echo "<td valign='TOP' class='r-cell'>".$row['id']."</td>";
    echo "<td valign='TOP' class='l-cell'>".$row['offence']."</td>";
    echo "<td valign='TOP' class='m-cell'>".$row['fine']."</td>";
    echo "</tr>";
}?>

			<!--
            <tr>
                <td valign="TOP" class="r-cell">1.</td>
                <td valign="TOP" class="l-cell">Not carrying valid licence while driving</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">2.</td>
                <td valign="TOP" class="l-cell">Not carrying documents as required</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">3.</td>
                <td valign="TOP" class="l-cell">Dangerous Lane cutting</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">4.</td>
                <td valign="TOP" class="l-cell">Moving against One-Way</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">5.</td>
                <td valign="TOP" class="l-cell">Overtaking dangerously</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">6.</td>
                <td valign="TOP" class="l-cell">Jumping Signal (driving at red light)</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">7.</td>
                <td valign="TOP" class="l-cell">Driving on Footpath</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">8.</td>
                <td valign="TOP" class="l-cell">Stopping at Pedestrian Crossing or Crossing Stop Line</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">9.</td>
                <td valign="TOP" class="l-cell">Parking Violations</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">10.</td>
                <td valign="TOP" class="l-cell">Horn offences</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">11.</td>
                <td valign="TOP" class="l-cell">Number Plate Offences</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">12.</td>
                <td valign="TOP" class="l-cell">Improper use of Headlights</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">13.</td>
                <td valign="TOP" class="l-cell">Charging Excess Fare</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">14.</td>
                <td valign="TOP" class="l-cell">Misbehavior with Passenger</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">15.</td>
                <td valign="TOP" class="l-cell">Refusal to ply for Hire</td>
                <td valign="TOP" class="m-cell">177</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 100;
                    Subsequent Offence: Fine up to Rs. 300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">16.</td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">Breach of rules regarding carriage of hazardous goods</td>
                <td valign="TOP" class="m-cell" style="border-bottom: 1px solid #EEEEEE">177</td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    First Offence: Fine up to Rs. 100; Subsequent Offence: Fine up to Rs.
                    300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">17.</td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    Using Mobile Phones while driving
                </td>
                <td valign="TOP" class="m-cell" style="border-bottom: 1px solid #EEEEEE">
                    177
                </td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    First Offence: Fine up to Rs. 100; Subsequent Offence: Fine up to Rs.
                    300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">18.</td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    Driving without Helmet
                </td>
                <td valign="TOP" class="m-cell" style="border-bottom: 1px solid #EEEEEE">
                    177
                </td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    First Offence: Fine up to Rs. 100; Subsequent Offence: Fine up to Rs.
                    300
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">19.</td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    Breach of order, refusal to give information
                </td>
                <td valign="TOP" class="m-cell" style="border-bottom: 1px solid #EEEEEE">
                    179
                </td>
                <td valign="TOP" class="l-cell" style="border-bottom: 1px solid #EEEEEE">
                    Fine up to Rs 500 or Imprisonment up to 1 month or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">20.</td>
                <td valign="TOP" class="l-cell">
                    Allowing the vehicle to be driven by a person who does not <br>
                    possess a valid licence
                </td>
                <td valign="TOP" class="m-cell">180</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 1000 or Imprisonment up to
                    3 months or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">21.</td>
                <td valign="TOP" class="l-cell">Driving without valid licence</td>
                <td valign="TOP" class="m-cell">181</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 500 or Imprisonment up to
                    3 months or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">22.</td>
                <td valign="TOP" class="l-cell">Offences related to driving license</td>
                <td valign="TOP" class="m-cell">182</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 500 or Imprisonment up to
                    3 months or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">23.</td>
                <td valign="TOP" class="l-cell">
                    Lack of proper maintenance and structure
                    of vehicle
                </td>
                <td valign="TOP" class="m-cell">182(A)</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Rs. 1000; Subsequent
                    Offence: Rs. 5000
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">24.</td>
                <td valign="TOP" class="l-cell">
                    Driving at a speed exceeding as
                    mentioned in MVA:112
                </td>
                <td valign="TOP" class="m-cell">183</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Rs. 400; Subsequent
                    Offence: Rs. 1000.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">25.</td>
                <td valign="TOP" class="l-cell">Dangerous or Reckless Driving</td>
                <td valign="TOP" class="m-cell">184</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 1000 or
                    Imprisonment up to 6 months or both. Subsequent Offence: Fine up to Rs.
                    2000 or Imprisonment up to 2 yrs or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">26.</td>
                <td valign="TOP" class="l-cell">Driving under influence of Drugs or Alcohols</td>
                <td valign="TOP" class="m-cell">185</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 2000 or
                    Imprisonment up to 6 months or both. Subsequent Offence: Fine up to Rs.
                    3000 or Imprisonment up to 2 yrs or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">27.</td>
                <td valign="TOP" class="l-cell">Accidental Offences</td>
                <td valign="TOP" class="m-cell">187</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 500 or
                    Imprisonment up to 3 months or both. Subsequent Offence: Fine up to Rs.
                    1000 or Imprisonment up to 6 months or both
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">28.</td>
                <td valign="TOP" class="l-cell">Illegal racing on road</td>
                <td valign="TOP" class="m-cell">189</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 500 or Imprisonment up to
                    1 month or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">29.</td>
                <td valign="TOP" class="l-cell">Using vehicle in Unsafe conditions</td>
                <td valign="TOP" class="m-cell">190</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 250.
                    Subsequent Offence: Fine up to Rs. 1000 or Imprisonment up to 2 yrs or
                    both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">30.</td>
                <td valign="TOP" class="l-cell">Using Loudspeaker beyond specified limit</td>
                <td valign="TOP" class="m-cell" nowrap>190(2)</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Rs. 1000; Subsequent
                    Offence: Rs. 2000.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">31.</td>
                <td valign="TOP" class="l-cell">
                    Carriage of goods which are of dangerous
                    &amp; hazardous nature to human life
                </td>
                <td valign="TOP" class="m-cell">190(3)</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 3000 or
                    Imprisonment up to 1 year or both. Subsequent Offence: Fine up to Rs.
                    5000 or Imprisonment up to 1 years or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">32.</td>
                <td valign="TOP" class="l-cell">
                    Driving without Registration and valid
                    Permit
                </td>
                <td valign="TOP" class="m-cell">192</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 5000 (not
                    less than Rs. 2000) or Imprisonment up to 3 months or both. Subsequent
                    Offence: Fine up to Rs. 10000 (not less than Rs. 5000) or Imprisonment
                    up to 1 yr or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">33.</td>
                <td valign="TOP" class="l-cell">
                    Driving without valid Fitness
                    Certificate
                </td>
                <td valign="TOP" class="m-cell">192</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 5000 (not
                    less than Rs. 2000) or Imprisonment up to 3 months or both. Subsequent
                    Offence: Fine up to Rs. 10000 (not less than Rs. 5000) or Imprisonment
                    up to 1 yr or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">34.</td>
                <td valign="TOP" class="l-cell">
                    Using Private vehicle for Commercial
                    purposes
                </td>
                <td valign="TOP" class="m-cell">192</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 5000 (not
                    less than Rs. 2000) or Imprisonment up to 3 months or both. Subsequent
                    Offence: Fine up to Rs. 10000 (not less than Rs. 5000) or Imprisonment
                    up to 1 yr or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">35.</td>
                <td valign="TOP" class="l-cell">Breach of Permit conditions</td>
                <td valign="TOP" class="m-cell">192</td>
                <td valign="TOP" class="l-cell">
                    First Offence: Fine up to Rs. 5000 (not
                    less than Rs. 2000) or Imprisonment up to 3 months or both. Subsequent
                    Offence: Fine up to Rs. 10000 (not less than Rs. 5000) or Imprisonment
                    up to 1 yr or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">36.</td>
                <td valign="TOP" class="l-cell">
                    Overloading a vehicle beyond extent
                    limit
                </td>
                <td valign="TOP" class="m-cell">194</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 2000 and Rs. 1000 per
                    tonne of extra load.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">37.</td>
                <td valign="TOP" class="l-cell">Driving without Insurance</td>
                <td valign="TOP" class="m-cell">196</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 1000 or Imprisonment up to
                    3 months or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">38.</td>
                <td valign="TOP" class="l-cell">
                    Driving of vehicle without legal
                    authority
                </td>
                <td valign="TOP" class="m-cell">197</td>
                <td valign="TOP" class="l-cell">
                    Fine up to Rs 500 or Imprisonment up to
                    3 months or both.
                </td>
            </tr>
            <tr>
                <td valign="TOP" class="r-cell">39.</td>
                <td valign="TOP" class="l-cell">Disturbance in free flow of traffic</td>
                <td valign="TOP" class="m-cell">201</td>
                <td valign="TOP" class="l-cell">Fine up to Rs 50 per hour.</td>
            </tr>
        </table>
		<p style="text-align: left;"><b>How to Pay</b></p>
		<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.Create an account in our website</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>First you have to create an account in online fine pay system</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. login to your profile</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Login to your profile by providing valid username and password</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3.Proceed with your payment</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Once you login to your profile you will be notified the offence you commited and the fine amount. Then you can make the payment via credit or debit card easily.</p>
                </div>
            </div>
        </div>
		-->
    </div>
		
	
		
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		 </div>
        </div>
</div>
</body>
</html>
