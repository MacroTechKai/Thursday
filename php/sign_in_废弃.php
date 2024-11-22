<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - MealMaster</title>
    <link rel="stylesheet" href="../css/wstyles.css">

</head>
<body>
    <?php include("headerEm.php"); ?>
    
    <div class = "formcontainer">
        <!-- <img id="sign_in" src="../images/tabletalk.png" alt="Table Talk" width="700" height="280" > -->
    <form name="form" onsubmit="return validate();" method="post">
  
    <div class="tableform">
    <dr>
        <dr>
        <dr>
    <div class="email">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="pass">
            <label for="pass">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            </div>
                <button type="submit" class="submit">Sign in</button>
                <button type="reset" class="reset">Reset</button>
                <span>Not a member? <a href="sign_up.php">Sign up</a></span>
        </form>
        
    
    <img id="sign_in" src="../images/tabletalk.png" alt="Table Talk" width="600" height="200" >
    </div>
    <?php include("footerEm.php"); ?>
</body>
</html>

