<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style4.css">
<body>
    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    <h2>The event is scheduled at 31st December</h2>
    <h3>Looking forward to see you :)</h3>
    </form>
        <form action="LandingPage.html" method="post">
        <button type="submit" class="btn btn-success"> HOMEPAGE </button>

        </form>
</body>
</html>