<?php include './_partials/header.php'; ?>
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bcrypt_hash = '$2y$12$KH6Phpj4QVTh9D7lBMMNsunZGz9x/fzdbKGwxt.BpMJ7zk8hZzOD2';
    //$hashed_password = password_hash('in04as20', $hash);
    if (empty($email)) {
        header("Location:login.php?error=Email is required");
    } else if (empty($password)) {
        header("Location:login.php?error=Password is required&email=$email");
    } else {
        /** @var str $conn */
        $query = $conn->prepare("SELECT * FROM tbl_users WHERE email=?");
        $query->execute([$email]);
        if ($query->rowCount() === 1) {
            $user = $query->fetch();

            $user_id = $user['id'];
            $user_email = $user['email'];
            $user_full_name = $user['username'];
            $user_password = $user['password'];


            if ($email == $user_email) {
                if (password_verify($password, $bcrypt_hash)) {
                    $_SESSION['loggedin']="loged in";
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_username'] = $user_full_name;
                    header("Location:home_index.php");
                } else {
                    header("Location:login.php?error=Incorect email or password&email=$email");
                }
            }
            else{
                header("Location:login.php?error=Incorect email or password&email=$email");
            }
        } else {
            header("Location:login.php?error=Incorect email or password&email=$email");
        }
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>