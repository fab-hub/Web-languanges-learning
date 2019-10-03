<html lang="pl-PL">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- JQuerry -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<!-- https://getbootstrap.com/ -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<!-- Icons -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Some extra hover effect -->
	<link rel="stylesheet" type="text/css" href="css/img_hovereffect.css">
	
	<!-- Scrollbar style -->
	<link rel="stylesheet" type="text/css" href="scrollbar_style.css">
	
	<!-- bootstrap-select -->
	<!-- https://developer.snapappointments.com/bootstrap-select/ -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap-select-1.13.9/dist/css/bootstrap-select.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css"> -->
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-select-1.13.9/dist/js/bootstrap-select.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script> -->
	
	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script> -->
	<script>//$.fn.selectpicker.Constructor.BootstrapVersion = '4';</script>
</head>
<body>
	<div class="container" style="max-width: 1000px">
		<div class="jumbotron" style="margin-top: 10%">
			<form  class="needs-validation" novalidate method="post" action="htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
					<label for="uname">Nazwa użytkownika:</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" id="uname" placeholder="Wpisz nazwę użytkownika" name="uname" required>
					</div>
					<div class="valid-feedback">OK</div>
					<div class="invalid-feedback">Wypełnij to pole.</div>
				</div>
				<div class="form-group">
					<label for="pwd">Hasło:</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" id="pwd" placeholder="Wpisz hasło" name="pswd" required>
					</div>
					<div class="valid-feedback">OK.</div>
					<div class="invalid-feedback">Wypełnij to pole.</div>
				</div>
				<!--
				<div class="form-group form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="remember" required> Cyrograf!!!
						<div class="valid-feedback">OK.</div>
						<div class="invalid-feedback">Zaznacz to pole.</div>
					</label>
				</div>
				-->
				<div class="d-flex justify-content-end">
					<button type="submit" class="btn btn-primary btn-lg" style="min-width: 150px">Zaloguj</button>
				</div>
			</form>	
			<div class="row">
				<div class="col-sm-4 text-center"></div>
				<div class="col-sm-4 text-center">
					<a href="register.html"><h2 class="text-center">Zarejestruj się</h2></a>
				</div>
				<div class="col-sm-4 text-center"></div>
			</div>
			<!--
			<div class="d-flex">
				<span class="border border-right-0 border-left-0 border-bottom-0 border-primary mw-100 flex-grow-1" style="min-height: 30px"></span>
				<span class="pr-5 border border-right-0 border-left-0 border-bottom-0 border-danger mw-100" style="min-height: 30px"></span>

			</div>
			-->
		</div>
	</div>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// collect value of input field
		$name = $_POST['uname'];
		if (! empty($name)) {
			console_log($name);
		}
	}
	?>
	<?php
	function console_log( $data ){
	  echo '<script>';
	  echo 'console.log('. json_encode( $data ) .')';
	  echo '</script>';
	}
	?>
	
	<script>
		// Disable form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Get the forms we want to add validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
</script>
</body>
</html>