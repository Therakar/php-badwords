<?php 
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $censored_text = str_replace($_GET['bad_word'], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>FRASE NON CENSURATA</h1>
    <p><?php echo $text ?></p>
    <p>Lunghezza della frase:<?php echo strlen($text) ?></p>

    <h1>FRASE CENSURATA</h1>
    <p> <?php echo $censored_text ?> </p>
    <p>Lunghezza della frase:<?php echo strlen($censored_text) ?></p>
</body>
</html>