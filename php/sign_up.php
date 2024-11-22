<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add authorship metadata and link CSS and JS files -->
    <link rel="stylesheet" href="../css/wstyles.css">
    <title>Master Recipes registration form</title>
    <script src="../js/wscript.js" defer></script>
</head>
<body>
    <?php include("headerEm.php"); ?>
    <div class = "formcontainer">
        <!-- <hr> -->
        <form action="create1.php" name="form" onsubmit="return validate();" method="post">
            <!-- You will need to write the validate function for this form. -->
        <div class="tableform">
            <div class="email">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>

            <div class="login">
                <label for="login">User Name</label>
                <input type="text" name="login" id="login" placeholder="User name">
            </div>

            <div class="pass">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Password">
            </div>
        
            <div class="pass2">
                <label for="pass2">Re-type Password</label>
                <input type="password" name = "pass2" id="pass2" placeholder="Re-type Password">
            </div>
        </div>
    
    
            <div class="checkbox">
                <input type="checkbox" name="newsletter" id="newsletter">
                <label for="newsletter">I agree to receive Master Recipes newsletters</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the terms and conditions</label>
            </div>

            <button type="submit" class="submit">Sign-Up</button>
            <button type="reset" class="reset">Reset</button>
        </form>
        <img id="sign_up" src="../images/sign_up.jpg" alt="Table Talk" width="450" height="450" >
    </div>  
    <?php include("footerEm.php"); ?>
</body>
</html>