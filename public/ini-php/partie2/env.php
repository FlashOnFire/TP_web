<html lang="fr">
<head>
    <title>PHP Partie 2</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    print ('<h1>Les variables d\'environnement</h1>');
    echo 'Adresse IP du client : '.$_SERVER['REMOTE_ADDR'].'<br>';
    echo 'Port du client : '.$_SERVER['REMOTE_PORT'].'<br>';
    echo 'Racine du serveur : '.$_SERVER['DOCUMENT_ROOT'].'<br>';
    echo 'Methode d\'appel du script : '.$_SERVER['REQUEST_METHOD'].'<br>';
    echo '<br>';
    print ('<h1>La fonction phpinfo()</h1>');
    phpinfo();
?>
</body>
</html>