<?php
function emptyInputSignup($name, $email, $newUsername, $pwd, $pwdrepeat) {
    $result = false; 
    if (empty($name) || empty($email) || empty($newUsername) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    }
    return $result; 
}

function invalidUid($newUsername) {
    $result = false; 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $newUsername)) {
        $result = true;
    }
    return $result;
}

function invalidEmail($email) {
    $result = false; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $pwd = trim($pwd);
    $pwdrepeat = trim($pwdrepeat);
    $result = false; 
    if ($pwd == $pwdrepeat) {
        $result = true;
    }
    return $result;
}

function uidExists($conn, $newUsername, $email) {
    $sql = "SELECT * FROM tb_user WHERE Username = :username OR Email = :email";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':username', $newUsername);
    $stmt->bindParam(':email', $email);
    
    $stmt->execute();
    $resultData = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($resultData) {
        return $resultData;
    } else {
        return false;
    }
}

function createUser($conn, $name, $email, $newUsername, $pwd) {
    $sql = "INSERT INTO tb_user (Username, Email, HoTen, Userpassword) VALUES (:username, :email, :name, :pwd)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $newUsername);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':pwd', $pwd);
    $stmt->execute();
}
?>
