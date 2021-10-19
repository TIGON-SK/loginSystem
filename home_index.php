<?php include './_partials/header.php'; ?>
<?php
if (isset($_SESSION['loggedin'])) {
    if (isset($_SESSION['user_email']) && isset($_SESSION['user_username'])) { ?>
        <div class="text-center shadow container w-50">
            <h1>Hello, <?php echo $_SESSION['user_username']; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet malesuada risus, nec efficitur
                metus
                viverra vestibulum. Duis eu mauris enim. Donec quis ante quis leo laoreet luctus sed in dui. Vivamus
                scelerisque vulputate felis, sit amet scelerisque orci imperdiet ac. Vivamus laoreet eu eros sed
                vestibulum.
                Duis in arcu felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin
                tempor
                blandit. Vivamus euismod viverra leo, eget dignissim urna hendrerit quis.

                Aliquam egestas consectetur dolor eu faucibus. Integer orci lectus, finibus vitae turpis non, convallis
                consectetur lacus. Maecenas lacinia justo sapien, vitae aliquam est pellentesque non. Mauris venenatis
                ac
                erat quis eleifend. Pellentesque tempor, tortor consequat tristique eleifend, nulla massa pretium odio,
                et
                pharetra orci urna sit amet erat. Quisque cursus semper dui, a suscipit ligula lobortis eget. Cras sed
                laoreet magna, vel tempor lectus. Vivamus non tellus quis odio accumsan tempus tempor ac neque. Sed
                ornare,
                quam at rutrum tristique, turpis tortor ultricies purus, ac ornare nulla risus blandit tellus.</p>
            <a href="logout.php" class="btn btn-warning font-weight-bold"><i class="bi bi-box-arrow-right"></i></a>
        </div>
    <?php } else {
        header('Location:login.php?error=Falied to log in');
    }
}else {
    header('Location:login.php?error=Falied to log in');
} ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</body>
</html>