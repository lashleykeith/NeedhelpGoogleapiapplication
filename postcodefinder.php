<!doctype html>

<html>
<head>
<title>My First Webpage</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">


<style>

	html, body {
		height:100%;
	}

	.container{
		background-image:url(image/backgroundimage.jpg);
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:150px;
		
	}
	.center{
		text-align:center;
	}
	.white{
		color:white;
	}
	
	p{
		padding-top:15px;
		padding-bottom:15px;
	}
	
	button{
		margin-top:20px;
		margin-bottom:20px;
		
	}
	
	.alert  {
		margin-top:90px;
		display:none;
	}
</style>


</head>

<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
		
				<h1 class="center white">Weather Predictor</h1>
				
				<p class="lead center white">Enter your city below to get a forecast for the weather.</p>
				
				<form>
						
						<div class="form-group">
							<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..."/>
						
						</div>
						
						<button id="findMyPostcode" class="btn btn-success btn-lg">Find My Weather</button>
				</form>
			
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find weather data for that city.  Please try again.</div>
				
				<div id="noCity" class="alert alert-danger">Please enter a city.</div>
			</div>
		
		
		
		</div>
	
	</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
	$("#findMyPostcode").click(function(event) {
	
	alert("Working");
	
});

</script>
</body>
</html>
