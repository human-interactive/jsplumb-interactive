<!DOCTYPE html>
<?php
      include 'header.php';
    ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'nav.php' ?>
        

<!--    <script src="js/vendor/bootstrap.min.js"></script>-->
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery-ui.1.9.2.min.js"></script>
    <script src="js/jquery.jsPlumb-1.6.2-min.js"></script>
    <!--<script src="http://jsplumbtoolkit.com/js/jquery.jsPlumb-1.6.2-min.js"></script>-->
    <!--<script src="js/bootstrap-colorpicker.min.js"></script>
    <script src="js/jquery.snippet.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("pre.htmlSnippet").snippet("javascript", {style : "zellner"});
        $('.collapse').collapse();
        $('.collapsable .collapse-toggle i.collapsable-icon').click(function(){$(this).toggleClass('glyphicon-plus  glyphicon-minus')});
        $('.slider').slider({
          formater: function(value) {
            return 'Current value: ' + value;
          }
        });
        $('.colorpicker').colorpicker();

        jsPlumb.ready(function() {

        });
      });
    </script>-->
    <?php include 'snippets.php' ?>
    </body>
</html>
