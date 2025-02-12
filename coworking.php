
<?php include 'db_connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="coworking.css">
    <link rel="stylesheet" href="kjgjk.css">
    <link rel="stylesheet" href="ayiub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   

    <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-CODE.js" crossorigin="anonymous"></script> 
   
</head>
<body style="background-color: #f6eedf;" >


<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#">Marrakech Cowork Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <span>01</span><a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
    <span>02</span><a class="nav-link" href="apropos.php">À Propos</a>
</li>

                    <li class="nav-item">
                        <span>03</span><a class="nav-link" href="https://wa.me/0636813823">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span>04</span><a class="nav-link" href="blog.php">Blog</a>
                    </li>
                </ul>
            </div>
          

        </div>
      
    </nav>
   
   






<header>
    <h1 style="text-align: center ; bottom:50px;   " class="head" ><strong>
    Bienvenue Au Marrakeche Cowork Club!
    </strong></h1>
  </header>

  <br><br><br>

  <div class="containerr">
          <div class="immage-container">
              <img src="images/20190731_WeWork_SonyCenter_Berli.png" alt="image principale" >
          </div>


         <div class="selectionChoix"> 
          <div class="menu">
            <button class="menu-item active" data-page="page1">Open Space</button>
            <button class="menu-item" data-page="page2">Bureaux Privés</button>
            <button class="menu-item" data-page="page3">Bureaux Express</button>
            <button class="menu-item" data-page="page4">Salle de Réunion</button>
          </div>
        
          <!-- Pages des images -->
          <div class="pages">
            <!-- Page 1 -->
            <div class="page active" id="page1">
              <br><br>
              <h2 style="text-align: center;" >L’Endroit Idéal pour Échanger et Innover.</h2>
              <p class="subtext">Tarifs à partir de 50 DH</p>
              <br>
              <div class="images">
                <img src="images/open1.png" alt="Open Space 1">
                <img src="images/open2.png" alt="Open Space 2">
                <img src="images/open3.png" alt="Open Space 3">
              </div>
              <br>
              <a href="index.php">
              <button class="btn">DEMANDER LES TARIFS →</button>
              </a>
              
              <br> <br>

              <p class="description">
                  Profitez d’un espace de travail calme avec WiFi haut débit 200 Mbps, accès aux call boxes et casier personnel, 
                  et rejoignez une communauté dynamique avec des événements hebdomadaires.
              </p>
            </div>
        
            <!-- Page 2 -->
            <div class="page" id="page2">
              <br><br>
              <h2 style="text-align: center;">Votre Espace Professionnel, Confort et Confidentialité.</h2>
              <p class="subtext">Tarifs à partir de 4500 DH</p>
              <br>
              <div class="images">
                <img src="images/prive1.png" alt="Bureau Privé 1">
                <img src="images/prive2.png" alt="Bureau Privé 2">
                <img src="images/prive3.png" alt="Bureau Privé 3">
              </div>
              <br>
              <button class="btn">DEMANDER LES TARIFS →</button>
              <br> <br>

              <p class="description">
                Nos bureaux privés à Marrakech Cowork Club offrent un environnement professionnel optimal avec climatisation,
                sécurité renforcée, mobilier de qualité et WiFi ultra-rapide à 200 Mbps.  </p>
            </div>
        
            <!-- Page 3 -->
            <div class="page" id="page3">
              <br><br>
              <h2 style="text-align: center;">Votre Bureau Prêt à l'Emploi, Quand Vous en Avez Besoin.</h2>
              <p class="subtext">Tarifs à partir de 50 DH</p>
              <br>
              <div class="images">
                <img src="images/expresse1.png" alt="Bureaux Express 1">
                <img src="images/expresse2.png" alt="Bureaux Express 2">
                <img src="images/expresse3.png" alt="Bureaux Express 3">
              </div>
              <br>
              <button class="btn">DEMANDER LES TARIFS →</button>
              <br> <br>

              <p class="description">
                Les Bureaux Express de Marrakech Cowork Club offrent des bureaux entièrement équipés et prêts à l'emploi, parfaits pour les professionnels en déplacement. Ils s'adaptent à tous vos besoins, que ce soit pour une réunion ou une journée de travail.  </p>
           
            </div>
        
            <!-- Page 4 -->
            <div class="page" id="page4">
              <br><br>
              <h2 style="text-align: center;">L’Espace Parfait pour Vos Événements Professionnels.</h2>
              <p class="subtext">Tarifs à partir de 600 DH</p>
              <br>
              <div class="images">
                <img src="images/salleder1.png" alt="Salle de Réunion 1">
                <img src="images/salleder2.png" alt="Salle de Réunion 2">
                <img src="images/salledr3.png" alt="Salle de Réunion 3">
              </div>
              <br>
              <button class="btn">DEMANDER LES TARIFS →</button>
              <br> <br>

              <p class="description">
                Notre espace de réunion est l’idéal pour vos événements professionnels, équipé de technologies modernes, d’un cadre élégant et d’un mobilier confortable, il peut accueillir des réunions, des ateliers ou des présentations. </p>
           
            
            </div>
          </div>
          
          
          
         
          
  </div>
        </div>










<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a style=" position: relative; left: 78%; bottom: 1370px;"   class="btn btn-custom" href="https://wa.me/0636813823">Contactez-Nous </a>


    <h6  style="font-weight: bold;">Votre Coworking Space Idéal à Marrakech!</h6>

    <h1 style="font-size: 65px; ">Connexion Rapide, Calme, et <br>Flexibilité à un Prix Abordable.</h1>
    <hr style="border: none; background-color: black; height: 1px; width: 85%; margin-left: 55px; margin: 56px;" >

</div>
<a style=" position: relative; left: 78%; bottom: 95px;"   class="btn btn-custom" href="#">Contactez-Nous </a>
</div>
 

<section class="features container text-center">
    <div class="row justify-content-center align-items-center">

        <!-- Feature 1 -->
        <div class="col-md-4 feature">
            <span class="number">01.</span>
            <i class="fas fa-wifi icon"></i>
            <p class="feature-text">WiFi <br> 200 Mbps</p>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4 feature">
            <span class="number">02.</span>
            <hr class="divider">
            <i class="fas fa-smile icon"></i>
            <p class="feature-text">Calme et <br> productif</p>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4 feature">
            <span class="number">03.</span>
            <hr class="divider">
            <i class="fas fa-dollar-sign icon"></i>
            <p class="feature-text">Prix <br> abordables</p>
        </div>

    </div>
</section>

<hr style="border: none; background-color: black; height: 1px; width: 85%; margin-left: 55px; position: relative ;  top: -135px; " >
<div class="box">
    <p class="small-text">REJOIGNEZ-NOUS AU Marrakech COWORK CLUB ET BOOSTEZ VOTRE INSPIRATION À MARRAKECH!</p>
    <h1 class="big-text">Choisissez Entre Bureau Privé Et Open Space Avec Des Options Flexibles À La Journée Ou Au Mois.</h1>
</div>


<section class="stats-section">
    <div class="container">
        <div class="row">
            <!-- Left Text -->
            <div class="col-md-6">
                <h2>Pourquoi Choisir <br> Marrakech Cowork Club ?</h2>
            </div>
            <!-- Right Stats -->
            <div class="col-md-6">
                <div class="stats">
                    <div class="stat-item">
                        <h3>+<span>575</span></h3>
                        <p>MEMBRES SATISFAITS</p>
                    </div>
                    <div class="stat-item">
                        <h3>+<span>5500</span></h3>
                        <p>MEMBRE DANS LA COMMUNAUTÉ</p>
                    </div>
                    <div class="stat-item">
                        <h3>+<span>35</span></h3>
                        <p>ÉVÉNEMENTS ORGANISÉS</p>
                    </div>
                </div>
                <p class="description">
                 Marrakech Cowork Club propose des tarifs compétitifs dans un environnement propice à la productivité...
                </p>
            </div>
        </div>
    </div>
</section>

<div>
    <h2 style="text-align: center;">
        <strong>
            Avis de la <br> Communauté!
        </strong>
    </h2>
</div>

<div class="hero">
    <img src="images/imageco.jpg" class="background-image">

    <div class="overlayy">
        <h1 class="moving-text">Bienvenue à Marrakech Cowork Club</h1>
        <h2 class="static-text">L'espace idéal pour travailler en toute sérénité</h2>

        <a href="index.php">       

            <button class="cta-button">Réservez Maintenant</button>
        </a>
        
    </div>
</div>


<div class="contact-section">
    <div class="contact-container">
        <!-- Left Side: Contact Title -->
        <div class="contact-title">
            <h2>Contactez-nous</h2>
        </div>

        <!-- Right Side: Contact Buttons -->
        <div class="contact-buttons">
            <button class="contact-btn">+212 6 54 140 016</button>
            <button class="contact-btn">WHATSAPP : +212 6 54 140 016</button>
            <button class="contact-btn">GOOGLE MAPS</button>
            <button class="contact-btn"> MARRAKECHCOWORKCLUB@GMAIL.COM</button>
        </div>
    </div>

    <!-- Separator Line -->
    <hr>

    <!-- Image Gallery -->
    <div class="image-gallery">
        <div class="image-container">
            <img src="images/prive2.png" alt="Coworking Space 1">
            <div class="overlay"><i class="fab fa-instagram"></i></div>
        </div>
        <div class="image-container">
            <img src="images/open3.png" alt="Coworking Space 2">
            <div class="overlay"><i class="fab fa-instagram"></i></div>
        </div>
        <div class="image-container">
            <img src="images/expresse1.png" alt="Coworking Space 3">
            <div class="overlay"><i class="fab fa-instagram"></i></div>
        </div>
        <div class="image-container">
            <img src="images/open1.png" alt="Coworking Space 4">
            <div class="overlay"><i class="fab fa-instagram"></i></div>
        </div>
        <div class="image-container">
            <img src="images/20190731_WeWork_SonyCenter_Berli.png" alt="Coworking Space 5">
            <div class="overlay"><i class="fab fa-instagram"></i></div>
        </div>
    </div>
</div>





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

<!-- FontAwesome for Instagram Icon -->
<script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>

<script>
       // Sélectionner tous les boutons et les pages
            const menuItems = document.querySelectorAll('.menu-item');
            const pages = document.querySelectorAll('.page');
            
            // Ajouter un événement de clic à chaque bouton
            menuItems.forEach(item => {
              item.addEventListener('click', () => {
                // Retirer la classe active de tous les boutons
                menuItems.forEach(btn => btn.classList.remove('active'));
                // Ajouter la classe active au bouton cliqué
                item.classList.add('active');
            
                // Masquer toutes les pages
                pages.forEach(page => {
                  page.classList.remove('active');
                });
            
                // Afficher la page correspondante
                const pageId = item.getAttribute('data-page');
                document.getElementById(pageId).classList.add('active');
              });
            });
           
</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="cowork.js"></script>

</body>
</html>
