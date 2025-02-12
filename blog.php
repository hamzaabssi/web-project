<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - SpaceCo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="coworking.css">
    <link rel="stylesheet" href="ayiu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    
    <style>
        .hero{
            width: 80%;
            left: 10%;
            top: 50px;
        }

        
  /* Footer Styling */
  .footer {
    background-color: #B89C6C; /* Marron doré, inspiré de ton image */
    color: white;
    text-align: center;
    padding: 30px ;
    font-size: 16px;
    height: 500px;
    border-radius: 5px;

  }
  
  .footer-content p {
    max-width: 50%;
    padding-top: 40px;
    margin: none;
    width: 50%;
    height: 400px;
    font-size: large;
    font-weight: 500;
    font-size: x-large;
  }
  .contenir{
      display: flex;
      justify-content: space-between; /* Écarte les deux div */
      align-items: center; /* Aligne les éléments verticalement */
      gap: 10px; /* Espace entre les deux div */
    
    
  }
  
  /* Boutons des réseaux sociaux */
  .social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    
  }
  
  .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background-color: white;
    color: #2E2E2E;
    border-radius: 50%;
    font-size: 22px;
    text-decoration: none;
    transition: all 0.3s ease;
    
  }
  
  /* Hover Effects */
  .social-icon:hover {
    transform: scale(1.1);
  }
  
  .instagram:hover { background-color: #2E2E2E; color: white; }
  .facebook:hover { background-color: #2E2E2E; color: white; }
  .snapchat:hover { background-color: #2E2E2E; color:white; }
  .tiktok:hover { background-color: #2E2E2E; color: white; }
    </style>
</head>
<body style="background-color: #f6eedf;">

    
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
 <section class="hero  rounded-4  "  style="background-image: url('images/The-Anatomy-of-Good-Coworking-Space-Design-In-Pictures-Fohlio-Product-Specification-and-Materials-Budget-Calculator-The-Assemblage.jpg'); background-size: cover; background-position: center; height: 400px; position: relative;">
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center;">
            <h1 style="color: white; font-size: 3rem; font-weight: bold;">NOS NOUVEAUTÉS</h1>
        </div>
    </section>
 
    <br><br><br>
    

    <h1 style="font-size: 65px; left:10%; bottom:20%; "> <strong>
     LES TENDACES <br> TECHNOLOGIQUES A <br> SUIVRE DANS LES <br> COWORKING SPACES
    </strong></h1>

    <br><br>

    <h6 style="left:10%; font-weight:bold;">
    Our design tips and tricks section provides practical advice on everything from space planning to color <br> 
    selection. Whether you're undertaking a major renovation or simply looking to refresh a room, our <br> expert tips will help you achieve professional results with ease.
    </h6>
    <hr style="border: none; background-color: black; height: 1px; width: 85%; margin-left: 55px; margin: 56px;" >


    
<footer class="footer">
          <div class="footer-content">
            <div class="contenir">
              <div class="para">
            <p><strong>Marrakech Cowork Club</strong> – Votre destination pour des bureaux privés, open space et espaces
               de travail flexibles à Marrakech. 
               Découvrez un cadre paisible et professionnel, avec des services sur mesure pour répondre à vos besoins. Plongez dans notre communauté dynamique et offrez à votre entreprise l'environnement qu'elle mérite pour s'épanouir.</p>
              </div>
               <div class="footer-right">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.8402073922617!2d-8.021875!3d31.632486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe0188ec3a33b%3A0x9c5ddf5ef87e9c92!2 Marrakech%2C%20Marrakech!5e0!3m2!1sen!2sma!4v1234567890123"
                  width="500px"
                  height="300"
                  style="border:0; border-radius: 10px;"
                  allowfullscreen=""
                  loading="lazy">
                </iframe>
              </div>
            </div>
           
               <div class="social-links">
              <a href="https://www.instagram.com" class="social-icon instagram" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.facebook.com" class="social-icon facebook" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.snapchat.com" class="social-icon snapchat" target="_blank" aria-label="Snapchat">
                <i class="fab fa-snapchat-ghost"></i>
              </a>
              <a href="https://www.tiktok.com" class="social-icon tiktok" target="_blank" aria-label="TikTok">
                <i class="fab fa-tiktok"></i>
              </a>
            </div>
           
          </div>
        </footer>



        <hr style="background-color: #f6eedf; color :#f6eedf">






</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
