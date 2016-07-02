<!DOCTYPE html>
<html lang="es">
<head>
  
  <title><?php echo strip_tags( $company_name) ?></title> 

  <meta property="og:title" name="title" content="<?php echo strip_tags( $company_name) ?>">
  <meta property="og:description" name="description"  content="Alineamos la gestión de personas con los resultados esperados por la empresa. Trabajamos con un modelo de acompañamiento organizacional, que comienza por determinar el nivel de automotivación de los colaboradores.">
  <meta name="twitter:card" content="summary">

  <?php include 'partials/head.php';?>
</head>
<body class="body">

  <?php include 'partials/main_nav.php';?>  

  <div class="hero">

    <img src="/assets/images/logo-home.png" data-ix="hero-logo-load" class="hero-logo">

    <div class="w-hidden-small home-next">
      <a href="#content-home" data-ix="pulse" class="w-inline-block next-button"></a>
    </div>

    <div data-animation="outin" data-duration="800" data-infinite="1" data-easing="ease-in-out-sine" data-delay="10000" data-autoplay="1" data-hide-arrows="1" data-nav-spacing="6" class="w-slider hero-slider">
      <div class="w-slider-mask">
        <div class="w-slide slider-1">
          <div class="slider-content">
            <h2 class="slider-title">NOS MOTIVA ENTREGAR<br> UN SERVICIO DE FORMACIÓN DE EXCELENCIA</h2>
            <p class="slider-text">Diferenciado de lo que actualmente existe en el mercado. 
Propiciamos una formación integral de las personas para que, de esta manera, puedan contribuir al avance de nuestro país.</p>
          </div>
        </div>
        <div class="w-slide slider-2">
          <div class="slider-content">
            <h2 class="slider-title">TENEMOS EXPERIENCIA EN LO QUE HACEMOS</h2>
            <p class="slider-text">Nos enfocamos a entregar formación profesional en servicio al cliente.
Buscamos generar un reconocimiento como formadores de personal de servicio en el mercado nacional.</p>
          </div>
        </div>
        <div class="w-slide slider-3">
          <div class="slider-content">
            <h2 class="slider-title"> NOS ORIENTAMOS A FORMAR PERSONAS<br> CON UNA SÓLIDA BASE ÉTICA ORIENTADAS AL SERVICIO </h2>
            <p class="slider-text">Para esto desarrollamos las competencias de relación de nuestros alumnos, con el objetivo de que sean capaces de actuar bajo altos estándares, apoyando el desarrollo de las empresas para las cuales trabajan e impulsando su propio éxito en el mundo laboral.</p>
          </div>
        </div>
        
      </div>
      <div class="w-slider-arrow-left w-hidden-tiny">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right w-hidden-tiny">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-shadow w-round hero-navs"></div>
    </div>
  </div>

  <main id="content-home" class="section section-home">
    <div class="w-container">
      <h1 class="section-title"><?php echo $company_name ?></h1>

      <p class="section-subtitle"> Nace en Agosto de 2011, <br>como producto de la necesidad detectada por sus socios, de contribuir de manera activa a mejorar el nivel de atención en nuestro país. </p>

    

      <div class="wrap">
      <a href="/somos" data-ix="pulse-2" class="btn to-center">Conoce Sobre Nosotros</a>
      </div>
      <div class="wrap margin-top">
        <div class="w-row">
          <div class="w-col w-col-2"></div>
          <div class="w-col w-col-4 w-clearfix"><img src="/assets/images/convenio-marco.png" class="logo-cov-marco-banner">
          </div>
          <div class="w-col w-col-4"><img src="/assets/images/sence.png" class="logo-franquicia" alt="Sence">
          </div>
          <div class="w-col w-col-2"></div>
        </div>
      </div>
      <div class="wrap"><a href="/convenio" data-ix="pulse-2" class="btn to-center">Conocer el Convenio</a>
      </div>
    </div>
  </main>

  <?php include 'partials/footer.php';?>
 <?php include 'partials/script_menu.php';?>
  
</body>
</html>