<div class="clear"></div>
  
  <div id="footer_background">
  <footer>
    <div class="copyright">&copy; richard <span>young</span> <?php echo date("Y") ?></div>
  </footer>
  </div>
  
  <script>
  $(function() {
    $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });
});
  </script>