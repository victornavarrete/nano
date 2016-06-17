  <div class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 w-col-small-4">
          <h4 class="footer-heading"> <?php echo $company_name ;?></h4>
          <div><strong>Horario de Atención</strong>
            <br> <?php echo $company_time ;?>  
            <br>
            <br><strong>E-mail</strong>
            <br><?php echo $company_email ;?>  </div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <h4 class="footer-heading">Contacto</h4>
          <div><strong>Teléfono</strong>
            <br>  <?php echo $company_phone ;?>
            <br>
            <br><strong>Dirección</strong>
            <br><?php echo $company_address ;?></div>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <h4 class="footer-heading">Enlaces</h4>
          <ul class="w-list-unstyled">
            <li class="footer-list-item"><a href="http://www.gpavirtual.cl/campus/" target="_blank" class="footer-link">Campus Virtual</a>
            </li>
            <li class="footer-list-item"><a href="#" class="footer-link">Linkedin</a>
            </li>
            <li class="footer-list-item"><a href="#" class="footer-link">Facebook</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sub-footer">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-4"><img src="/assets/images/footer-logo.png" data-ix="pulse-init" class="footer-logo">
          </div>
          <div class="w-col w-col-4">
            <div class="text-sub-footer"> <?php echo $company_name ;?>
              <br>2016 - Todos los derechos Reservados</div>
          </div>
          <div class="w-col w-col-4">
            <a href="/convenio" class="w-inline-block footer-link-marco"><img src="/assets/images/convenio-marco-2.png" data-ix="pulse-init" >
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/webflow.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/web.js') ?>"></script>
<!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '<?php echo $ga_code; ?>', '<?php echo $ga_key; ?>');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>