<?php
session_start();
include_once __DIR__ . '/partials/functions.php';

if ($passwordLength != "") {
    $_SESSION['password'] = generaPassword($passwordLength);
    header("Location: ./partials/results.php");
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">

    <div class="container">
        <h1 class=" text-capitalize text-secondary text-center ">Strong password generator</h1>

        <h2 class=" text-center">Genera una password sicura</h2>

        <div class=" bg-light p-4 rounded w-75 m-auto my-4">
            <form action="index.php">
                <div class="d-flex gap-3 align-items-center justify-content-between mb-4 ">
                    <label for="length" class="form-label text-dark fs-5">Lunghezza password:</label>
                    <input type="number" min="0" max="76" class="form-control w-25 me-5 " id="length" name="length" data-bs-theme="light">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php if ($isEmpty) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Nessun parametro valido inserito.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>