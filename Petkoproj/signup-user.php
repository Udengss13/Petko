<?php require_once "controllerUserData.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Sign Up Form</h2>
                    <p class="text-center">It's quick and easy to Petko.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <!--FName-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="first_name" placeholder="First Name" required value="<?php echo $fname ?>" 
                        oninvalid="this.setCustomValidity('Please Enter your first name')"  oninput="setCustomValidity('')">
                    </div>
                    <!--MName-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="middle_name" placeholder="Middle Name" required value="<?php echo $mname ?>" 
                        oninvalid="this.setCustomValidity('Please Enter your middle name')"  oninput="setCustomValidity('')">
                    </div>
                    <!--LName-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="last_name" placeholder="Last Name" required value="<?php echo $lname ?>" 
                        oninvalid="this.setCustomValidity('Please Enter your last name')"  oninput="setCustomValidity('')">
                    </div>
                    <!--Suffix-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="suffix" placeholder="Suffix" value="<?php echo $suffix ?>" >
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>"
                        oninvalid="this.setCustomValidity('Please Enter your valid email')"  oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>

                    <div class="form-group  clearfix">
                            <label class="checkbox-inline">CAPTCHA CODE:</label>
                            <img src="captcha.php">
                    </div>
                    <div class="form-group">
                            <input type="text" name="vercode" class="form-control" placeholder="Enter Captcha Code"
                                required="required" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>