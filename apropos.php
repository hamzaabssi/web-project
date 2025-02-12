<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="kjgjk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>


.navbar {
    background: white;
    box-shadow: none;
    padding: 2px 0;
   
    
    margin: 0;
     width: 100%;
}
.navbar-brand {
    font-weight: bold;
    margin-left: +20px;
    }
.nav-link {
    color: #9c8555 !important;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 0.9rem;
    transition: color 0.3s ease;
    position: relative;
    bottom: 10px;

}

.nav-link:hover {
    color: #1a1f0a !important;
}

.nav-item span {
    font-size: 0.8rem;
    color: #b0a58e;
    margin-right: 5px;
    position: relative;
    top: 3px;
    
    
}
.btn-custom {
background-color: #1a1f0a;
color: white;
padding: 8px 18px;
border-radius: 25px;
font-size: 0.9rem;
font-weight: bold;
text-transform: uppercase;
transition: background-color 0.3s ease, color 0.3s ease;
}



.btn-custom:hover {
    background-color: #141a08;
    color: white;

}


 


.container {
    background-color: white;
    width: 100%;
    
    
   
    display: flex;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    border-radius: 10px;
}
.container img{
   width: 60%;
   object-fit: cover;
   height: auto;
   right: 50px;

}
.container .infos{
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;

}
.container .infos h1 {
    font-family: 'Montserrat', sans-serif; /* Police moderne et simple */
    font-size: 40px;
    color: #333;
}
#vision{
    font-family: 'Montserrat', sans-serif; /* Police moderne et simple */
    font-size: 30px;
    color: #333;
    margin-top: 50px;
    letter-spacing: 1.6;
    
    margin-left: 230px;
}
#para{
    font-family: 'Playfair Display', serif;  
   font-size: large;
    color: #555; /* Couleur sombre mais pas complètement noire */
    letter-spacing: 0.5px; /* Espacement subtil entre les lettres */
}
.container .infos p {
    margin-top: 15px;
    font-size: 18px;
    line-height: 1.6;
    color: #555;
}
#titre{
    
    font-weight:300;
   
    font-size: x-large;
}
.container2{
    background-color:  #e0d5b3;
    width: 100%;
   
    display: flex;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    border-radius: 10px;
}
.container2 .slogan{
    font-weight: bolder;
   font-size:60px;

}
button{
    
  background-color:black;
  color: white;
  padding: 12px 24px;
  border: 2px solid black;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 80px;
  margin-left: 180px;

}
button:hover {
  background-color: white;
  color: black;
}






/* Footer Styling */
.footer {
  background-color: #B89C6C; /* Marron doré, inspiré de ton image */
  color: white;
  text-align: center;
  padding: 30px 20px;
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
<body>

<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Marrakech Cowork Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
                        <span>03</span><a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span>04</span><a class="nav-link" href="blog.php">Blog</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-custom" href="contact.php">Contactez-Nous</a>
        </div>
    </nav>



<br>

    <div class="container" >
    <img src="images/20190731_WeWork_SonyCenter_Berli.png" alt="image principale">  
        <div class="infos">
            <p> <h1>Qui Sommes-Nous ?</h1>
                <span id="para">Targa Cowork Club est bien plus qu’un simple espace de travail. Situé à Marrakech, 
                nous offrons des bureaux privés, un open space et des espaces flexibles pour favoriser la productivité et la collaboration. Notre mission est de créer un environnement professionnel et convivial où chaque membre peut s’épanouir et atteindre ses objectifs. Avec une communauté active de plus de 5500 membres et un taux de satisfaction de 95%, nous mettons tout en œuvre pour répondre aux besoins des entrepreneurs, freelances et startups.
            </span>
               <span id="vision">Notre Vision</span> </p>
        </div>

    </div>
    <br><br><br><br><br>
    <span id="titre">Marrakech cowork club    </span>
    <br><br>
    <div class="container2">
        <div class="slogan">
            Un Espace, Une Communauté,<br> Une Vision.
        </div>
        <div class="boton">
            <button>Contactez-Nous</button>
        </div> 
    </div>



    <footer class="footer">
        <div class="footer-content">
          <div class="contenir">
            <div class="para">
          <p><strong>Targa Cowork Club</strong> – Votre destination pour des bureaux privés, open space et espaces
             de travail flexibles à Marrakech. 
             Découvrez un cadre paisible et professionnel, avec des services sur mesure pour répondre à vos besoins. Plongez dans notre communauté dynamique et offrez à votre entreprise l'environnement qu'elle mérite pour s'épanouir.</p>
            </div>
             <div class="footer-right">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.8402073922617!2d-8.021875!3d31.632486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe0188ec3a33b%3A0x9c5ddf5ef87e9c92!2sTarga%2C%20Marrakech!5e0!3m2!1sen!2sma!4v1234567890123"
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

   

    
























  

   
    <!-- FontAwesome for Instagram Icon -->
<script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="cowork.js"></script>
</body>
</html>
