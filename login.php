<!-- Login Page -->

<?php include('include/header.php'); 
  session_start();
?>

        <div class="login-area">
            <div class="login-box">

                <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert"> <?php echo $_SESSION['success'] ?> </div>
                <?php } ?>

                <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert"> <?php echo $_SESSION['error'] ?> </div>
                <?php } ?>

                <div class="logo"><img src="<?php echo $link ?>assets/image/new-logo2.png" alt=""></div>
                
                <form action="<?php echo $link ?>function/login.php" method="post">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" placeholder="Enter Password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="check">
                      <label class="form-check-label" name="check" for="check">Remember me</label>
                    </div>
                    <button type="submit" class="btn form-control">Log in</button>
                    <span>Don't have an account yet? <a href="registration.php">Create account</a></span>
                  </form>
            </div>
        </div>


<?php include('include/footer.php');
  unset($_SESSION['success']);
  unset($_SESSION['error']);
?>