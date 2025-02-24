<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $newUsername = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];

    require_once 'connect.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($name, $email, $newUsername, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($newUsername) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {  
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) === false) {  
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $newUsername, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $newUsername, $pwd);
    header("location: ../login.php?signup=success");
    exit();

} else {
    header("location: ../signup.php");
    exit();
}
?>
