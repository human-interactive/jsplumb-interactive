<!DOCTYPE html>
    <?php
      include 'header.php';
    ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <style type="text/css">
          #plotarea{width: 100%; height: 380px; overflow: hidden; display: block;}
            #upperpanel, #lowerpannel{width: 98%; height: 150px;margin: 5px auto;}
        </style>
    <?php
      include 'nav.php';
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Setup</h2>
          <?php include 'setupinfo.php' ?>

        <ul class="nav nav-tabs">
          <li class="active"><a href="#jsplumbclasses" data-toggle="tab"><h4>Classes</h4></a></li>
          <li><a href="#defaultproperties" data-toggle="tab"><h4>Defaults</h4></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="jsplumbclasses">
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Element Type</th>
                  <th>Class Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Endpoint</td>
                  <td>_jsPlumb_endpoint</td>
                </tr>
                <tr>
                  <td>Connector</td>
                  <td>_jsPlumb_connector</td>
                </tr>
                <tr>
                  <td>Overlay</td>
                  <td>_jsPlumb_overlay</td>
                </tr>
                <tr>
                  <td><div data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" data-content="You can change component's style on hover. To change style of an <strong>endpoint</strong> and a <strong>connection</strong>, set folowing properties of jsPlumb respectivly: EndpointHoverStyle, HoverPaintStyle"><span class="label label-primary">Hover</span></div></td>
                  <td>_jsPlumb_hover, _jsPlumb_source_hover, _jsPlumb_target_hover</td>
                </tr>
                <tr>
                  <td>Draggaed Element</td>
                  <td>_jsPlumb_drag_select</td>
                </tr>
                
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="defaultproperties">
          <p>There are 3 ways to set <a data-toggle="modal" data-target=".bs-example-modal-lg" href="defaultproperties.html">default properties</a> for jsPlumb.
            <pre>jsPlumb.Defaults.IndividualPorperty = value as String|Array|Object; </pre>
            <pre>jsPlumb.importDefaults({Property : Value; ... }); </pre>
            <pre>var instance = jsPlumb.getInstance({Property : Value; ... }); </pre>
            You can also passing common properties while establising a connection.
          </p>
          </div>
        </div><!-- Tabs panel end-->
      </div><!-- First Column End -->
        <div class="col-md-8">
          <h3>Establishing Connections</h3>
          <?php include 'connectiondemo.php' ?>
      </div><!-- Second Column End -->
      </div><!-- row ends -->
      <hr/> 
      <?php include 'dragaconnection.php'  ?>
    </div> <!-- /container -->      
    
     <hr/>
    <footer>
        <p>&copy; thinkzarahatke.com 2014</p>
      </footer>
<!--    <script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery-ui.1.9.2.min.js"></script>
    <script src="js/jquery.jsPlumb-1.6.2-min.js"></script>
    <!--<script src="http://jsplumbtoolkit.com/js/jquery.jsPlumb-1.6.2-min.js"></script>-->
    <script src="js/bootstrap-colorpicker.min.js"></script>
    <script src="js/jquery.snippet.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

      var connection;
      var connectionproperties = {
              source:$("#source"),
              target:$("#target"),
              anchor:[ "Continuous", { faces:["top","bottom"] }],
              endpoint:[ "Dot", { radius:5, hoverClass:"myEndpointHover" }],
              connector:[ "Bezier", { curviness:100 } ],
              overlays: [
                    [ "Arrow", { foldback:0.2 }, {cssClass:"overlayClass"} ],
                    [ "Label", { cssClass:"labelClass" } ]  
                ],
              label : "I am label.",
              paintStyle:{strokeStyle:"red",lineWidth:3}
            };
      var paintstyle = {strokeStyle:"#5b9ada", dashstyle:"2 4", lineWidth:1};

      $("#controlbox").hide();
      $("#plotsettings").click(function(){
        var top = document.documentElement.scrollTop || document.body.scrollTop;
        var left = document.documentElement.scrollLeft || document.body.scrollLeft;
        left = left + $( window ).width() / 2;
        top = top + ($( window ).height() - $("#controlbox").height()) / 2;
        $("#controlbox").css({"top" : top, "left" : left});
        $("#controlbox").toggle();
      });
      $("pre.htmlSnippet").snippet("javascript", {style : "zellner"});
      $('.collapse').collapse();

      $('.collapsable .collapse-toggle i.collapsable-icon').click(function(){$(this).toggleClass('glyphicon-plus  glyphicon-minus')});


      $('#arraowposition, #arraowdirection').slider({
        formater: function(value) {
          return 'Current value: ' + value;
        }
      });

      $('.colorpicker').colorpicker();

      $("#controlbox").draggable({containment:$("layer"), handle: ".panel-heading", cursor:"move"});
      $("div").popover();$("span").popover();



      jsPlumb.ready(function() {

          jsPlumb.draggable($("#source"),{containment:$("#upperpanel")});
          jsPlumb.draggable($("#target"),{containment:$("#lowerpannel")});
          
          
          jsPlumb.Defaults.Container =  $("#plotarea");
          
          connection = jsPlumb.connect(connectionproperties);

          generateHoverPopover($("#source"),'top',"Anchor");
          generateHoverPopover($("._jsPlumb_endpoint"),'left',"Endpoint");
          generateHoverPopover($("._jsPlumb_connector"),'left',"Connector");
          generateHoverPopover($("._jsPlumb_overlay"),'top',"Overlays");
          
          $("#changeconnection").click(function(){
            var color = $("input[name='connectioncolor']").val();
            if(color){
              connectionproperties.paintStyle.strokeStyle = color;  
            }
            var color = $("input[name='connectionstyle']").val();
            connectionproperties.paintStyle.lineWidth = $("input[name='stroke']").val();
            connectionproperties.connector = connectionStyle[$("select[name='connectionstyle']").val()];
            if($("select[name='paintstyle']").val() && $("select[name='paintstyle']").val() == "Dashed"){
              connectionproperties.paintStyle.dashstyle = "2 4";
            }else{
              connectionproperties.paintStyle.dashstyle = "";
            }


            //remove old connection
            jsPlumb.detach(connection);
            //create new connection
            connection = jsPlumb.connect(connectionproperties);
            generateHoverPopover($("#source"),'top',"Anchor");
            generateHoverPopover($("._jsPlumb_endpoint"),'left',"Endpoint");
            generateHoverPopover($("._jsPlumb_connector"),'left',"Connector");
            generateHoverPopover($("._jsPlumb_overlay"),'top',"Overlays");
          });
          
        //setZoom(0.25);
      });
    });

    /*window.setZoom = function(zoom, transformOrigin, el) {
      transformOrigin = transformOrigin || [ 0.5, 0.5 ];
      el = el || jsPlumb.Defaults.Container;
      var s = "scale(" + zoom + ")",
          oString = (transformOrigin[0] * 100) + "% " + (transformOrigin[1] * 100) + "%";

      
        $("#plotarea").css("-webkit-transform",s);
        $("#plotarea").css("-moz-transform",s);
        $("#plotarea").css("-ms-transform",s);
        $("#plotarea").css("-o-transform", s);
        $("#plotarea").css("transform",s);

        $("#plotarea").css("-webkit-transformOrigin",oString);
        $("#plotarea").css("-moz-transformOrigin",oString);
        $("#plotarea").css("-ms-transformOrigin",oString);
        $("#plotarea").css("-o-transformOrigin", oString);
        $("#plotarea").css("transformOrigin",oString);
        
        jsPlumb.setZoom(zoom);    
    };*/
    
    var connectionStyle = {
     "Bezier" : ["Bezier", {curviness : 50}],
     "Flowchart" : [ "Flowchart", /*{stub:5}*/ ],
     "Straight" : ["Straight"],
     "StateMachine" : [ "StateMachine", {curviness : 20,proximityLimit : 80,loopbackRadius : 30} ] 
    };
    

    function generateHoverPopover(selector,position,title){
      selector.popover({
            trigger: 'hover',
            placement: position,
            title : title,
            html : true,
            content : popoverText[title]
          });
    }
    
    var popoverText = {
      "Overlays" : "There can be any number of overlays. These are decorators for connector. You can control their position, direction, and style.",
      "Connector": "This is the line drawn between 2 endpoints. It basically defines the line style whereas <strong>paintstyle</strong> defines line stroke.",
      "Endpoint" : "Connects a connector to an element on an anchor. If it is detachable then it can be dragged to anchor of same or other element.",
      "Anchor"   :  "These are like ports on an element where a connector connects through endpoints. <br/> There are four faces of an element : top, right, botton and left."
    }

    var tips = ["What is in your mind?", "Where are you taking me to?", "Don't pull me...", "Somebody help me!!"];
    
    function getRandomArbitary (min, max) {
      return Math.random() * (max - min) + min;
    }

    var getARandomTip= function(){
      console.log(tips[getRandomArbitary(0,4)]);
      return tips[getRandomArbitary(0,4)];
    }

    </script>
          <?php 
          include 'stylebox.php' ;
          include 'largemodal.php';
          ?>
    </body>
</html>
