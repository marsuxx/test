<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur mon site</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
        main {
            padding: 40px 20px;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenue sur mon site</h1>
</header>
<footer>
    &copy; <?php echo date("Y"); ?> MonSite - Tous droits réservés.
</footer>

</body>
</html>
