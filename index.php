<!DOCTYPE html>
<html>
	<head>
		<title>Registrierungsformular</title>
		<meta charset="UTF-8">
		<link href="css/foundation.min.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="row">
			<div class="medium-12 columns">
				<h1>Registrierungsformular</h1>
				<form action="" method="post" id="formular">
					<div class="row">
						<div class="small-12 medium-6 columns">
							<label for="firstname">Firstname*</label>
							<input id="firstname" class="required" type="text" name="firstname" tabindex=1 required/>
						</div>

						<div class="small-12 medium-6 columns">
							<label for="latname">Lastname*</label>
							<input id="latname" class="required" type="text" name="latname" tabindex=2 required/>
						</div>

						<div class="small-12 medium-12 columns">
							<label for="street">Street</label>
							<input id="street" type="text" name="street" tabindex=3 />
						</div>

						<div class="small-12 medium-2 columns">
							<label for="plz">PLZ</label>
							<input id="plz" type="text" name="plz" tabindex=4 />
						</div>

						<div class="small-12 medium-10 columns">
							<label for="city">City</label>
							<input id="city" type="text" name="city" tabindex=5 />
						</div>

						<div class="small-12 medium-12 columns">
							<label for="country">Country</label>
							<input id="country" type="text" name="country" tabindex=5 />
						</div>

						<div class="small-12 medium-12 columns">
							<label for="username">Username*</label>
							<input id="username" class="required" type="text" name="username" tabindex=6 required/>
						</div>

						<div class="small-12 medium-6 columns">
							<label for="password">Password*</label>
							<input id="password" class="required" type="password" name="password" tabindex=7 required/>
						</div>

						<div class="small-12 medium-6 columns">
							<label for="password">repeat the password*</label>
							<input id="rpassword" class="required" type="password" name="rpassword" tabindex=7 required/>
						</div>

						<div class="small-12 medium-6 columns">
							<label for="email">E-Mail*</label>
							<input id="email" class="required mail" type="email" name="email" tabindex=8 required/>
						</div>

						<div class="small-12 medium-6 columns">
							<label for="phone">Phone</label>
							<input id="phone" class="required" type="tel" name="phone" tabindex=9 />
						</div>
					</div>
				</form>

				<button id="send" tabindex=10 >Submit</button>
			</div>
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>