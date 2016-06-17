<script type="text/javascript" charset="utf-8"  >
  var $mh = $('#main-header'); 
    var hclass = 'mini';
    $mh.removeClass(hclass); 
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 10) {
            $mh.addClass(hclass);
        } else {
            $mh.removeClass(hclass);
        }
    });  
  </script>
