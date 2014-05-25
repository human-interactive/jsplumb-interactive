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
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Setup</h2>
          <p>jsPlumb is registered on the browser's window by default
            <pre>jsPlumb.ready(function() { ... });</pre>
            or you can create your instances.
            <pre>var instance = jsPlumb.getInstance();</pre>
          </p>
          <div class="panel panel-info collapsable">
            <div class="panel-heading flat">
              <h4 class="panel-title">
                <i class="glyphicon glyphicon-move"></i> Dragging
                <a class="collapse-toggle" data-toggle="collapse" href="#Dragging"><i class="glyphicon glyphicon-plus pull-right collapsable-icon"></i>
              </a>
              </h4>
            </div>
            <div id="Dragging" class="panel-collapse collapse in">
              <div class="panel-body">
                Set <strong>position:absolute</strong>
                <pre>jsPlumb.draggable(element, {  containment: element-parent});</pre>
              </div>
            </div>
          </div>
          <div class="panel panel-info collapsable">
            <div class="panel-heading flat">
              <h4 class="panel-title">
                <i class="glyphicon glyphicon-zoom-in"></i> Zooming
                <a class="collapse-toggle" data-toggle="collapse" href="#Zooming"><i class="glyphicon glyphicon-plus pull-right collapsable-icon"></i>
              </a>
              </h4>
            </div>
            <div id="Zooming" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>Set transform CSS property of container and tell the current zoom level to jsPlumb</p>
                <pre>jsPlumb.setZoom(0.75);</pre>
              </div>
            </div>
          </div>

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
                  <td><div data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" data-content="You can change component's style on hover. To change style of an <strong>endpoint</strong> and a <strong>connection</strong>, set folowing properties of jsPlumb respectivly: EndpointHoverStyle, HoverPaintStyle">Hover <i class="glyphicon glyphicon-tag"></i></div></td>
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
          </p>
          </div>
        </div>
        </div>
        <div class="col-md-8">
          <h2>Example Demo</h2>
          <div class="row">
            <div class="col-md-6">
              
            <h4>Snippet</h4>
            <div>
            <pre class="htmlSnippet">
var common = {cssClass:"myCssClass"};
jsPlumb.connect({
    source:$("selector"),
    target:$("selector"),
    anchor:[ "Continuous", { faces:["top","bottom"] }],
    endpoint:[ "Dot", { radius:5, hoverClass:"myEndpointHover" }, common ],
    connector:[ "Bezier", { curviness:100 }, common ],
    overlays: [
          [ "Arrow", { foldback:0.2 }, common ],
          [ "Label", { cssClass:"labelClass" } ]  
      ],
      label : “some Label”,
      paintStyle:{
              strokeStyle:"red",
              lineWidth:3
          }
  });
            </pre>
            </div>
            </div>
          <div class="col-md-6">
          <div id="plotarea" class="panel panel-default">
              <div class="lead pull-left" style="color : #DBDBDB">Container</div>
              <div class="pull-right">
                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-zoom-in"></span></button>
                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-zoom-out"></span></button>
                <button type="button" id="plotsettings" class="btn btn-default"><span class="glyphicon glyphicon-cog"></span></button>
              </div>
              <div class="clearfix"></div>
            <div id="upperpanel" class="panel panel-default"><p class="lead" style="color : #DBDBDB">Containment</p>
              <div id="source" class="node" style="top:91px; left: 106px;" >Source</div>
            </div>
            <div id="lowerpannel" class="panel panel-default"><p class="lead" style="color : #DBDBDB">Containment</p>
              <div id="target" class="node" style="top:281px; left: 266px;">Target</div>
            </div>
          </div>
          <h4>Main Components</h4>
          <p><a href="anchors.php" data-toggle="modal" data-target=".bs-example-modal-lg" >Anchor</a>, <a href="endpoints.php" data-toggle="modal" data-target=".bs-example-modal-lg" >Endpoint</a>, <a href="connectors.php" data-toggle="modal" data-target=".bs-example-modal-lg" >Connector</a>, <a href="overlays.php" data-toggle="modal" data-target=".bs-example-modal-lg" >Overlay</a></p>
          <p>
            <ul class="list-unstyled">
              <li><i class="glyphicon glyphicon-check"></i> A, B can't move out from their containments.</li>
              <li><i class="glyphicon glyphicon-check"></i> A can connect to B because both are in same container.</li>
            </ul>
          </p>
       </div>
      </div>

      <hr>
      <footer>
        <p>&copy; thinkzarahatke.com 2014</p>
      </footer>
    </div> <!-- /container -->        
    
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
      $("div").popover();

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
      "Endpoint" : "Connects a connector to an element on an anchor. It can be dragged to anchor of same or other element.",
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
