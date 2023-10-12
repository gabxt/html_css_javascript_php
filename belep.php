<!DOCTYPE html>
<html>

<head>
	<title>Belépés</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<video  autoplay muted loop src="./images/112.mp4"></video>

	<div class="kozepe">
		<div>
			<form action="login.php" method="post">

				<h2>Belépés</h2>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<label>Felhaszmálónév</label>
				<input type="text" name="uname" placeholder="Felhasználónév"><br>

				<label>Jelszó</label>
				<input type="password" name="password" placeholder="Jelszó"><br>

				<button type="submit">Belépés</button>
				<a href="signup.php" class="ca">Új user létrehozása</a>

			</form>
		</div>
	</div>
</body>

</html>