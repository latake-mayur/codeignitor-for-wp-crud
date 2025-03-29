<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?= link_tag("style.css"); ?>
</head>

<body>
    <div class="container login-container">
        <h2>Login</h2>

        <?php
        if (session("error")) { ?>
            <!-- Error message for invalid login credentials -->
            <div class="error-alert"><?php echo session("error")?></div>
        <?php } ?>


        <?php
        if (session("success")) { ?>
            <!-- Success message for successful login -->
            <div class="success-alert"><?php echo session("success")?></div>
        <?php } ?>

        <form method="post" action="Submit_URL">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>