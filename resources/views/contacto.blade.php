<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Coctact Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="\contact\fonts\material-design-iconic-font\css\material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="\contact\css\style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="/contacto" method="POST">
					@csrf
					<h3>Contact Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<label class="form-group">
						<input type="text" name ="nombre" class="form-control"  value="{{$nombre}}" required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" name ="correo"  class="form-control"  value="{{$correo}}" required >
						<span for="">Your Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea name="mensaje" id="" class="form-control" required></textarea>
						<span for="">Your Message</span>
						<span class="border"></span>
					</label>
					<button>Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>