<!DOCTYPE html>
<html lang="es">
<head>
  
  <title><?php echo $company_name ?> - Quiénes Somos</title> 

  <meta property="og:title" name="title" content="<?php echo $company_name ?> - Quiénes Somos">
  <meta property="og:description" name="description"  content=" <?php echo $company_name ?> - , nace en el año 1998, por la iniciativa de un grupo de Ingenieros, Psicólogos Laborales, Auditores y Periodistas comprometidos con una visión interdisciplinaria del trabajo en sistemas organizacionales.">
  <meta name="twitter:card" content="summary">

  <?php include 'partials/head.php';?>
</head>
<body class="body">

  <?php include 'partials/main_nav.php';?>  

  <div class="main">
    <div data-ix="new-interaction" class="w-section content-heading ch-somos">
      <div data-ix="fadein" class="w-container"><img src="/assets/images/footer-logo.png" class="logo-somos">
        <h1 class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny section-header-title sht-white">Quiénes Somos</h1>
        <p class="section-subtitle somos"><strong><?php echo $company_name ?></strong>, nace en el año 1998, por la iniciativa de un grupo de Ingenieros, Psicólogos Laborales, Auditores y Periodistas comprometidos con una visión interdisciplinaria del trabajo en sistemas organizacionales</p>
        <a href="#politica" data-ix="pulse" class="w-inline-block next-button"></a>
      </div>
    </div>
    <div id="politica" class="section section-blue">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-3"><img src="/assets/images/cert-nat.png" class="logo-calidad">
          </div>
          <div class="w-col w-col-9">
            <h2 class="section-title politic">Nuestra Política de calidad</h2>
            <div>
              <p class="mobile-text-center">“Nos comprometemos a proporcionar a nuestros clientes un servicio adecuado a sus necesidades, con soluciones a la medida, todo esto orientado a apoyar el cumplimiento de sus objetivos como empresa”.</p>
              <p class="mobile-text-center">“Nos comprometemos a trabajar en un marco de excelencia en el servicio, el que garantice el cumplimiento de los objetivos trazados ”.</p>
            </div>
          </div>
        </div>
        <a href="#valores" data-ix="pulse" class="w-inline-block next-button"></a>
      </div>
    </div>

    <div id="valores" class="section">
      <div class="w-container">
      <img width="60" src="/assets/images/ss.png" class="to-center" />

        <h2 class="section-title">¿Qué nos identifica?</h2>
        <div class="w-row margin-top">
          <div data-ix="fadein" class="w-col w-col-6">
            <div class="id-item">
              <h5 class="text-orange text-center">APOYAMOS LA MEJORA DE LOS PROCESOS ORGANIZACIONALES</h5>
              <p class="text-justify">Alineamos la gestión de personas con los resultados esperados por la empresa.
                <br>Trabajamos con un modelo de acompañamiento organizacional, que comienza por determinar el nivel de automotivación de los colaboradores.</p>
            </div>
          </div>
          <div data-ix="fadein" class="w-col w-col-6">
            <div class="id-item">
              <h5 class="text-orange text-center">TENEMOS EXPERIENCIA EN LO QUE HACEMOS</h5>
              <p class="text-justify">GPA tiene una amplia trayectoria trabajando en consultoría y capacitación profesional. Esto nos ha permitido acumular conocimientos que han potenciado cambios positivos al interior de estas organizaciones.
                <br>La amplia experiencia de nuestro equipo de profesionales permite garantizar el traspaso de conocimientos y vivencias, generando el desarrollo de habilidades conductuales de nuestros capacitados.</p>
            </div>
          </div>
        </div>
        <div class="w-row">
          <div data-ix="fadein" class="w-col w-col-6">
            <div class="id-item">
              <h5 class="text-orange text-center">REALIZAMOS SERVICIOS A LA MEDIDA</h5>
              <p class="text-justify">Nuestra metodología busca el diseño de productos que respondan a las necesidades específicas de las empresas clientes.
                <br>Desde el inicio nos preocupamos por conocer a fondo sus necesidades y ambiente competitivo.</p>
            </div>
          </div>
          <div data-ix="fadein" class="w-col w-col-6">
            <div class="id-item">
              <h5 class="text-orange text-center">NUESTROS SERVICIOS IMPACTAN POSITIVAMENTE EN LOS INDICADORES</h5>
              <p class="text-justify">Nuestro horizonte como GPA es potenciar las habilidades personales y procesos organizacionales, en pro del cumplimiento de sus objetivos.
                <br>Contamos con la capacidad de medir los resultados de nuestras asesorías o capacitaciones en cuanto a su oportunidad y eficacia.</p>
            </div>
          </div>
        </div>
        <div class="w-row margin-top">
          <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
            <a href="#" class="w-lightbox w-inline-block"><img src="/assets/images/sdasaa.jpg" class="company-img">
              <script type="application/json" class="w-json">
                { "items": [{
                  "type": "image",
                  "url": "assets/images/sdasaa.jpg"
                }] }
              </script>
            </a>
          </div>
          <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
            <a href="#" class="w-lightbox w-inline-block"><img src="/assets/images/lo.jpg" class="company-img">
              <script type="application/json" class="w-json">
                { "items": [{
                  "type": "image",
                  "url": "assets/images/lo.jpg"
                }] }
              </script>
            </a>
          </div>
          <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
            <a href="#" class="w-lightbox w-inline-block"><img src="/assets/images/DSC04268.jpg" class="company-img">
              <script type="application/json" class="w-json">
                { "items": [{
                  "type": "image",
                  "url": "assets/images/DSC04268.jpg"
                }] }
              </script>
            </a>
          </div>
          <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
            <a href="#" class="w-lightbox w-inline-block"><img src="/assets/images/sda.jpg" class="company-img">
              <script type="application/json" class="w-json">
                { "items": [{
                  "type": "image",
                  "url": "assets/images/sda.jpg"
                }] }
              </script>
            </a>
          </div>
        </div>
        <div class="wrap"><a href="/servicios" data-ix="pulse-2" class="btn to-center">Conoce Nuestros Servicios</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'partials/footer.php';?>
  <?php include 'partials/script_menu.php';?>

  
  
</body>
</html>