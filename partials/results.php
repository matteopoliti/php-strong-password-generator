<?php
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    unset($_SESSION['password']);
} else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">

    <div class="container">
        <h1 class=" text-capitalize text-secondary text-center ">La tua Password</h1>

        <div class=" bg-light p-4 rounded w-75 m-auto my-4">
            <div class="alert alert-success" role="alert">
                La tua password generata è:
                <?php
                echo $password;
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>