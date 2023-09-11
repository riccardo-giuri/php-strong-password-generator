<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>password-generator-giuri</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Random Password Generator</h1>

        <form action="index.php" method="POST" class="d-flex gap-4 align-items-end justify-content-center mt-4">
            <div class="d-flex flex-column w-25">
                <label>Lunghezza della password voluta</label>
                <input type="text" name="passLength">
            </div>

            <button class="btn btn-primary">Invia</button>
        </form>
    </div>    
</body>
</html>