<!DOCTYPE html>
<html lang="es">
<head>
  
  <title><?php echo $company_name ?></title> 

  <meta property="og:title" name="title" content="<?php echo $company_name ?>">
  <meta property="og:description" name="description"  content="Alineamos la gestión de personas con los resultados esperados por la empresa. Trabajamos con un modelo de acompañamiento organizacional, que comienza por determinar el nivel de automotivación de los colaboradores.">
  <meta name="twitter:card" content="summary">

  <?php include 'partials/head.php';?>
</head>
<body class="body">

  <?php include 'partials/main_nav.php';?>  

  <div class="hero">

    <img src="/assets/images/footer-logo.png" data-ix="hero-logo-load" class="hero-logo">

    <div class="w-hidden-small home-next">
      <a href="#content-home" data-ix="pulse" class="w-inline-block next-button"></a>
    </div>

    <div data-animation="outin" data-duration="800" data-infinite="1" data-easing="ease-in-out-sine" data-delay="10000" data-autoplay="1" data-hide-arrows="1" data-nav-spacing="6" class="w-slider hero-slider">
      <div class="w-slider-mask">
        <div class="w-slide slider-1">
          <div class="slider-content">
            <h2 class="slider-title">APOYAMOS LA MEJORA <br>DE LOS PROCESOS ORGANIZACIONALES</h2>
            <p class="slider-text">Alineamos la gestión de personas con los resultados esperados por la empresa. Trabajamos con un modelo de acompañamiento organizacional, que comienza por determinar el nivel de automotivación de los colaboradores.</p>
          </div>
        </div>
        <div class="w-slide slider-2">
          <div class="slider-content">
            <h2 class="slider-title">REALIZAMOS SERVICIOS A LA MEDIDA</h2>
            <p class="slider-text">Nuestra metodología busca el diseño de productos que respondan a las necesidades específicas de las empresas clientes. Desde el inicio nos preocupamos por conocer a fondo sus necesidades y ambiente competitivo.</p>
          </div>
        </div>
        <div class="w-slide slider-3">
          <div class="slider-content">
            <h2 class="slider-title">TENEMOS EXPERIENCIA EN LO QUE HACEMOS</h2>
            <p class="slider-text">GPA tiene una amplia trayectoria trabajando en consultoría y capacitación profesional. Esto nos ha permitido acumular conocimientos que han potenciado cambios positivos al interior de estas organizaciones. &nbsp;</p>
          </div>
        </div>
        <div class="w-slide slider-4">
          <div class="slider-content">
            <h2 class="slider-title">NUESTROS SERVICIOS <br>IMPACTAN POSITIVAMENTE EN LOS INDICADORES</h2>
            <p class="slider-text">Nuestro horizonte como GPA es potenciar las habilidades personales y procesos organizacionales, en pro del cumplimiento de sus objetivos. Contamos con la capacidad de medir los resultados de nuestras asesorías o capacitaciones en cuanto a su oportunidad y eficacia.</p>
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
      <p class="section-subtitle">Nace en el año 1998,
        <br>por la iniciativa de un grupo de Ingenieros, Psicólogos Laborales, Auditores y Periodistas
        <br>comprometidos con una visión interdisciplinaria del trabajo en sistemas organizacionales.</p>
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