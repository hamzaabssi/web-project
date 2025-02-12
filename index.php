
<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - SpaceCo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="coworking.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Targa Cowork Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <span>01</span><a class="nav-link" href="coworking.php">Accueil</a>
                    </li>
                    <li class="nav-item">
    <span>02</span><a class="nav-link" href="apropos.php">À Propos</a>
</li>

                    <li class="nav-item">
                        <span>03</span><a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span>04</span><a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-custom" href="#">Contactez-Nous </a>
        </div>
    </nav>


    <!-- Hero Section -->
    <header class="hero">
        <div class="container text-center">
    
           <h1 class="txt"> <strong>
           Bienvenue sur coworking spaces
           </strong>
         </h1>
           
            
            <a href="reservation.php" class="btn btn-customm mt-3">Réserver un espace</a>
        </div>
    </header>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
