<h3>Registration Form</h3>
<?php if (!isset($_POST['regbtn'])): ?>
    <form id="regform" class='cmxform' action="index.php?page=registration" method="post">
        <div class="form-group">
            <label for="cname">Login:</label>
            <input id="cname" type="text" class="form-control" name="login" placeholder="mylogin" minlength="3" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input id="password" type="password" class="form-control" name="pass1" placeholder="mypassword" required>
        </div>
        <div class="form-group">
            <label for="password_again">Confirm Password:</label>
            <input id="password_again" type="password" class="form-control" name="pass2" placeholder="mypassword" required>
        </div>
        <div class="form-group">
            <label for="cemail">Email address:</label>
            <input id='cemail' type="email" class="form-control" name="email" placeholder="myemail" required>
        </div>
        <button type="submit" class="btn btn-primary" name="regbtn">Register</button>
    </form>
<?php else:
    if(register($_POST['login'],$_POST['pass1'],$_POST['email']))
    {
        echo "<h3><span style='color:green;'>New User Added!</span><h3/>";
    }
endif; ?>