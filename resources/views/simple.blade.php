<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  	<div class="container text-center">
  		<h1 style="margin-top: 5em;margin-bottom: 1em;">Simple</h1>
  		<div class="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
  				<div class="form-group">
  					<input type="text" id="input_text" class="form-control" placeholder="Masukan Text!" style="margin-bottom: 10px">
  					<button type="button" class="btn btn-primary" onclick="simple()">Submit</button>
  				</div>
  				<div id="result"></div>
  			</div>
  			<div class="col-md-4"></div>
  		</div>
  	</div>

  	<script>
  		function simple(){
  			var itext = document.getElementById('input_text').value;
  			var tresult = '<h1>' + itext + '</h1>';
  			document.getElementById('result').innerHTML = tresult;
  			console.log(itext);
  			console.log(tresult);
  		}
  		//document.getElementByID('submit').addEventListener('click', simple);
  	</script>
  </body>
</html>