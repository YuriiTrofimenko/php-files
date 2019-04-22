<?php
$users = 'users.txt';
/** Sign Up */
function register(string $name, string $pass, string $email) : bool {
    //data validation block
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));
    if ($name == '' || $pass == '' || $email == '') {
        echo "<h3><span style='color:red;'>Fill All Required Fields!</span></h3>";
        return false;
    }
    if (strlen($name) < 3 || strlen($name) > 30)/* ||
            strlen($pass) < 3 || strlen($pass) > 30)*/ {
        echo "<h3><span style='color:red;'>Values Length Must Be Between 3 And 30!</span></h3>";
        return false;
    }
    if (!preg_match('/^[A-z0-9]{8,16}$/', $pass)) {
        echo "<h3><span style='color:red;'>Values Length Must Be Between 8 And 16! (password)</span></h3>";
        return false;
    }
    //login uniqueness check block
    //name:pass:email
    global $users;
    $file = fopen($users, 'a+');
    while ($line = fgets($file, 128)) {
        $readname = substr($line, 0, strpos($line, ':'));
        if ($readname == $name) {
            echo "<h3><spanstyle='color:red;'>Such Login Name Is Already Used!</span></h3>";
            return false;
        }
    }
    //new user adding block
    $line = $name . ':' . md5($pass) . ':' . $email . "\r\n";
    fputs($file, $line);
    fclose($file);
    return true;
}
/** Sign In */
function login(string $login, string $pass) : bool {
    //data validation block
    $login = trim(htmlspecialchars($login));
    $pass = trim(htmlspecialchars($pass));
    if ($login === '' || $pass === '') {
        echo "<h3><span style='color:red;'>Fill All Required Fields!</span></h3>";
        return false;
    }
    global $users;
    $file = fopen($users, 'r');
    while ($line = fgets($file, 128)) {

        // $readname = substr($line, 0, strpos($line, ':'));
        // $readpass = substr($line, strpos($line, ':') + 1);
        // $readpass = substr($readpass, 0, strpos($readpass, ':'));

        list($readname, $readpass) = explode(":", $line);

        if ($readname == $login && $readpass == md5($pass)) {
            return true;
        }
    }
    echo "<h3><span style='color:red;'>Login and/or Password are wrong</span></h3>";
    return false;
}

// login("u911", "pass911");
// login("user1", "12345678");