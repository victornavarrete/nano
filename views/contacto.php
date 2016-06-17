<!DOCTYPE html>
<html lang="es">
<head>
  
  <title><?php echo $company_name ?> - Contacto </title> 

  <meta property="og:title" name="title" content="<?php echo $company_name ?> - Contacto">
  <meta property="og:description" name="description"  content=">Hablemos de cómo mejorar tu empresa">
  <meta name="twitter:card" content="summary">

  <?php include 'partials/head.php';?>
</head>
<body class="body body-white">

  <?php include 'partials/main_nav.php';?>  


 <div class="main">
    <div class="w-section content-heading ch-contact">
      <div class="w-container">
        <h1 class="section-header-title">Contacto</h1>
        <p class="section-subtitle">Hablemos de cómo <strong>mejorar tu empresa</strong>
        </p>
      </div>
    </div>
    <div class="section">
      <div class="w-container">
        <div class="w-row info-contact">
          <div class="w-col w-col-6 w-col-medium-4">
          <img src="/assets/images/logo.png" class="contact-logo">
          <h2 class="hidden"> <?php echo $company_name ;?></h2>

          </div>
          <div class="w-col w-col-3 w-col-small-6 w-col-medium-4 margin-top">
            <div class=" "><strong>Horario de Atención</strong>
              <br> <?php echo $company_time ;?>  
              <br>
              <br><strong>E-mail</strong>
             <br><?php echo $company_email ;?>  </div>
          </div>
          <div class="w-col w-col-3 w-col-small-6 w-col-medium-4 margin-top">
            <div><strong>Teléfono</strong>
            <br>  <?php echo $company_phone ;?>
            <br>
            <br><strong>Dirección</strong>
            <br><?php echo $company_address ;?></div>
          </div> 

        </div>
        <div class="w-form">
          <form id="contact-form" name="contact-form" action="/send" method="post">
            <div class="w-row">
              <div class="w-col w-col-6">
                <label for="name-2">Nombre</label>
                <input id="name-2" type="text" placeholder="Ingrese su nombre completo" name="name" data-name="name" class="w-input input">
                <label for="phone">Teléfono</label>
                <input id="phone" type="text" placeholder="ingrese su teléfono" name="phone" data-name="phone" class="w-input input">
                <label for="email-2">Email</label>
                <input id="email-2" type="email" placeholder="Ingrese su email" name="email" data-name="email" required="required" class="w-input input">
              </div>
              <div class="w-col w-col-6">
                <label for="company">Empresa</label>
                <input id="company" type="text" placeholder="Ingrese su empresa" name="company" data-name="company" class="w-input input">
                <label for="mensaje">Mensaje o Solicitud</label>
                <textarea id="mensaje" placeholder="Escriba su mensaje" name="message" data-name="message" required="required" class="w-input input textarea"></textarea>
              </div>
            </div>
            <div class="text-center wrap">
              <input type="submit" value="Enviar Contacto" data-wait="Please wait..." class="w-button btn-blue">
            </div>
          </form>
          
          <div class="w-form-done" id="contact-success">
            <p>Gracias, tu información de contacto ha sido enviada!</p>
          </div>
          <div class="w-form-fail" id="contact-error">
            <p>Oops! Algo ha salido mal, intenta en un momento.</p>
          </div>

        </div>
      </div>
    </div>
    <div class="map-container">
      <div data-widget-latlng="-33.434713,-70.623779" data-widget-style="roadmap" data-widget-zoom="16" data-widget-tooltip="<?php echo $company_name ;?>" data-disable-scroll="1" class="w-widget w-widget-map map"></div>
    </div>
  </div>
 

  <?php include 'partials/footer.php';?>

  
</body>
</html>