<?php
    $passwordLength = $_GET['passLength'] ?? 0;

    var_dump($passwordLength);

    $warnings = [
        [
            "condition" => !is_numeric($passwordLength) && $passwordLength !== "",
            "message" => "Inserisci un Numero!"
        ],

        [
            "condition" => $passwordLength > 0 && $passwordLength >= 10,
            "message" => "Inserisci un numero da 1 a 10!"
        ],
    ];

    function CheckWarnings($warningArray) {
        $returnCheck = false;

        foreach($warningArray as $warning) {
            if($warning['condition']) {
                $returnCheck = true;
            }
        };

        return $returnCheck;
    }

    function GeneratePassword($lenght, $warnings) {
        $retrunGenerated = "";

        if(!$warnings) {   

            for ($i=0; $i < $lenght; $i++) { 
                $retrunGenerated .= chr(rand(33, 122));
            }

            return $retrunGenerated;
        }  
    }

    $hasWarning = CheckWarnings($warnings);

    $generatedPassword = GeneratePassword($passwordLength, $hasWarning);
?>

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

        <form action="index.php" method="GET" class="d-flex gap-4 align-items-end justify-content-center mt-4">
            <div class="d-flex flex-column w-25">
                <label>Lunghezza della password voluta</label>
                <input type="text" name="passLength">
            </div>

            <button class="btn btn-primary">Invia</button>
        </form>

        <?php
            foreach ($warnings as $warning) {
                if($warning['condition']) {
                    $hasWarning = true;
        ?>
            
            <h3 class="text-warning"><?php echo $warning['message'] ?></h3>

        <?php
                }
                else {
                    $hasWarning = false;
                }
            }
        ?>

        <?php
            if(!$hasWarning && $generatedPassword !== "") {
        ?>
            <h2>Password Generata:</h2>
            <h4> <?php echo $generatedPassword ?></h4>
        <?php
            }
        ?>
    </div>    
</body>
</html>