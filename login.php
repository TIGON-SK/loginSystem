<?php include './_partials/header.php'; ?>
<?php if (!isset($_SESSION['user_email']) && !isset($_SESSION['user_username'])) { ?>
    <div class="container">

        <form class="login-form shadow rounded" action="auth.php" method="post">
            <h1 class="text-center">LOGIN</h1>
            <? if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php } ?>

            <? if (isset($_GET['warning'])) { ?>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> <?php echo htmlspecialchars($_GET['warning']); ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       name="email"
                       value="<?php if (isset($_GET['email'])) {
                           echo(htmlspecialchars
                           ($_GET['email']));
                       } ?>"
                       class="form-control  mt-3"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp">
                <small id="emailHelp"
                       class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       name="password"
                       class="form-control mt-3"
                       id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<?php }
else{
    header("Location:logout.php");
}?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>