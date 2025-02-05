<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Animé</title>
    <style>
        /* Styles pour l'animation */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a1c4fd, #c2e9fb);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="animated-background"></div>
    <div class="content">
        <h1>Bienvenue sur InnovaTech</h1>
        <p>Un site innovant avec un background animé !</p>
    </div>
</body>
</html>
