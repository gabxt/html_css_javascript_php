<!DOCTYPE html>
<html>

<head>
     <title>Reg Lap</title>
     <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
     <video controls autoplay muted loop src="./images/1111.mp4"></video>
     <div class="kozepe">
          <div>
         
               <form action="signup-check.php" method="post">
                   
                    <h2>Regisztráció</h2>
                    <?php if (isset($_GET['error'])) { ?>
                         <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                         <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <label>Email</label>
                    <?php if (isset($_GET['email'])) { ?>
                         <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
                    <?php } else { ?>
                         <input type="text" name="email" placeholder="Email"><br>
                    <?php } ?>

                    <label>Felhasználónév</label>
                    <?php if (isset($_GET['uname'])) { ?>
                         <input type="text" name="uname" placeholder="Felhasználónév" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                         <input type="text" name="uname" placeholder="Felhasználónév"><br>
                    <?php } ?>

                    <label>Vezetéknév</label>
                    <?php if (isset($_GET['first_name'])) { ?>
                         <input type="text" name="first_name" placeholder="Vezetéknév" value="<?php echo $_GET['first_name']; ?>"><br>
                    <?php } else { ?>
                         <input type="text" name="first_name" placeholder="Vezetéknév"><br>
                    <?php } ?>

                    <label>Keresztnév</label>
                    <?php if (isset($_GET['last_name'])) { ?>
                         <input type="text" name="last_name" placeholder="Keresztnév" value="<?php echo $_GET['last_name']; ?>"><br>
                    <?php } else { ?>
                         <input type="text" name="last_name" placeholder="Keresztnév"><br>
                    <?php } ?>


                    <label>Jelszó</label>
                    <input type="password" name="password" placeholder="Jelszó"><br>

                    <label>Jelszó újra</label>
                    <input type="password" name="re_password" placeholder="Jelszó újra"><br>

                    <button type="submit">Regisztrál</button>
                    <a href="index.php" class="ca">Ha már regisztráltál</a>
               </form>
          </div>
     </div>
</body>

</html>