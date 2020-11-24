<?php
function user($name, $firstname, $age){
    return ' Bonjour ' .$name . $firstname . ' tu as ' . $age . ' ans '; 
} 
$info = user(' Ly ' , ' Ahmed ' , 50);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo4</title>
</head>
<body>
    <p><?php echo $info; ?></p>
</body>
</html>