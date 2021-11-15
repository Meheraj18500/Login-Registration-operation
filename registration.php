<!-- Registration Page -->
<?php include('include/header.php');
  session_start();
?>

        <div class="login-area">
            <div class="login-box">

                <?php if (isset($_SESSION['confirm'])) { ?>
                <div class="alert alert-danger" role="alert"> <?php echo $_SESSION['confirm'] ?> </div>
                <?php } ?>

                <?php if (isset($_SESSION['email_exist'])) { ?>
                <div class="alert alert-warning" role="alert"> <?php echo $_SESSION['email_exist'] ?> </div>
                <?php } ?>

                <div class="logo"><img src="<?php echo $link ?>assets/image/new-logo2.png" alt=""></div>
                
                <form action="<?php echo $link ?>function/registration.php" method="post">
                    <div class="form-group">
                      <label for="name">Full name</label>
                      <input type="name" name="name" class="form-control" id="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="number">Phone</label>
                      <input type="tel" name="number" class="form-control" id="number" placeholder="Phone number" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group">
                      <label for="con_pass">Confirm password</label>
                      <input type="password" name="con_pass" placeholder="Confirm Password" class="form-control" id="con_pass" required>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="check" required>
                      <label class="form-check-label" name="check" for="check">Accept Trams & Condition</label>
                    </div>
                    <button type="submit" class="btn form-control">Registration</button>
                    <span>Already have an account? <a href="login.php">Log in</a></span>
                  </form>
            </div>
        </div>
        


<?php include('include/footer.php'); 
  unset($_SESSION['confirm']);
  unset($_SESSION['email_exist']);
?>