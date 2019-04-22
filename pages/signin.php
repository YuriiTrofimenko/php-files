<?php if(!isset($_SESSION['user_name'])) : ?>
    <form class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="text" placeholder="login" name="login" aria-label="Login">
        <input class="form-control mr-sm-2" type="password" placeholder="password" name="password" aria-label="Password">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signin">Sign In</button>
    </form>
<?php else: ?>
    <form class="form-inline my-2 my-lg-0" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signout">Sign Out (<?php echo $_SESSION['user_name']; ?>)</button>
    </form>
<?php endif; ?>