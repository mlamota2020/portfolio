<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="Index">
    <title>404 Not Found - Matias' Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--FAVICON-->
    <link rel="shortcut icon" href="assets/img/brand/portfolio-logo.PNG" type="image/x-icon">
    <!--SCROLLREVEAL-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
      <?php
      $ci = new CI_Controller();
      $ci =& get_instance();
      $ci->load->helper('url');
      ?>
      <style>
         .principal-text {
            justify-content: center;
            text-align: center;
            font-size: 30px;
            padding-top: 100px;
         }

         .code {
            align-items: center;
            padding-top: 50px;
            size: 300px;
         }
      </style>
</head>
<body style="margin: 0;">
      <div class="menu-btn">
         <i class="fas fa-bars fa"></i>
      </div>
       <div class="presentation-section">
         <nav class="nav-main">
           <a href="index.html"><img class="nav-brand" src="assets/img/brand/portfolio-logo.PNG" alt="Portfolio Logo"></a>
             <ul class="nav-elements">
               <li>
                  <a href="index.html" class="actual-link">Página principal</a> 
               </li>
               <li>
                  <a href="#">Proyectos</a>
               </li>
               <li>
                  <a href="#">Sobre mí</a>
               </li>
               <li>
                  <a href="#">Contacto</a>
               </li>
            </ul>
         </nav>
         <div class="principal">
             <h1 class="principal-text">¡Hey! Creo que olvidé escribir el código de esta página...</h1>
             <img src="../../../../assets/img/banners/code-solid.svg" alt="404 Not Found" class="code">
         </div>
         <footer class="footer">
         <ul class="nav-elements-2">
           <li>
              <a href="index.html" class="actual-link">Página principal</a> 
           </li>
           <li>
              <a href="#">Proyectos</a>
           </li>
           <li>
              <a href="#">Sobre mí</a>
           </li>
           <li>
              <a href="#">Contacto</a>
           </li>
        </ul>
        <p class="footer-text"></a><img class="nav-brand-footer" src="assets/img/brand/portfolio-logo.PNG" alt="Portfolio Logo"></img> - © 2021 - Esta página tiene la <a href="https://creativecommons.org/licenses/by-sa/3.0/" class="cc-link" target="_blank">licencia de Creative Commons BY-SA 3.0</a>, lo que significa que puedes publicar y remezclar mi contenido.</p>
      </footer>
      <script src="main.js"></script>
   </div>
</body>
</html>
