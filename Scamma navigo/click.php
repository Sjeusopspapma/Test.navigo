<?php
include('prevents/anti1.php');
include('prevents/anti2.php');
include('prevents/anti3.php');
include('prevents/anti4.php');
include('prevents/anti5.php');
include('prevents/anti6.php');
include('prevents/anti7.php');
include('prevents/anti8.php');
include('ab.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .counter-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .counter {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .reset-button {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .reset-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="counter-container">
        <?php
        $counter_file = 'counter.txt';
        
        if (isset($_POST['reset'])) {
            // Supprimer le fichier de compteur
            if (file_exists($counter_file)) {
                unlink($counter_file);
            }
            $count = 0; // Réinitialiser le compteur
        } elseif (file_exists($counter_file)) {
            $count = (int) file_get_contents($counter_file);
        } else {
            $count = 0;
        }
        ?>
        <p class="counter">Nombre de visites : <?php echo $count; ?></p>
        <form method="post">
            <button class="reset-button" type="submit" name="reset">Réinitialiser le compteur</button>
        </form>
    </div>
</body>
</html>
