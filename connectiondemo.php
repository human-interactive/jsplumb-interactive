<div class="row">
    <div class="col-md-6">
        <pre class="htmlSnippet">
var common = {cssClass:"myCssClass"};
var commonsettingsProperties = {
    anchors:[ "BottomCenter", "TopCenter" ],
    endpoints:["Dot", "Blank" ]
};
var conn = jsPlumb.connect({
    source:$("selector"),
    target:$("selector"),
    <a href="anchors.php" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="label label-primary">anchor</span></a>:[ "Continuous", { faces:["top","bottom"] }],
    <a href="endpoints.php" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="label label-primary">endpoint</span></a>:[ "Dot", { radius:5, hoverClass:"myEndpointHover" }, common ],
    <a href="connectors.php" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="label label-primary">connector</span></a>:[ "Bezier", { curviness:100 }, common ],
    <a href="overlays.php" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="label label-primary">overlays</span></a>: [
          [ "Arrow", { foldback:0.2 }, common ],
          [ "Label", { cssClass:"labelClass" } ]  
      ],
    label : "some Label",
    paintStyle:{strokeStyle:"red",lineWidth:3},<div id="parameters" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" data-content="Parameters can be any valid Javascript objects. And can be accessed using <code>conn.getParameter(parametername)</code>">
    <span class="label label-default">parameters</span></div>:{
        "p1": 34, 
        "p2":new Date()
    }
  }, commonsettingsProperties);
            </pre>
        <p>You may also use :
            <strong>makeSource</strong>,
            <strong>makeTarget</strong>, and
            <strong>addEndpoint</strong>methods instead.</p>
    </div>
    <div class="col-md-6">
        <div id="plotarea" class="panel panel-default">
            <div class="lead pull-left" style="color : #DBDBDB">Container</div>
            <div class="pull-right">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-zoom-in"></span>
                </button>
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-zoom-out"></span>
                </button>
                <button type="button" id="plotsettings" class="btn btn-default">
                    <span class="glyphicon glyphicon-cog"></span>
                </button>
            </div>
            <div class="clearfix"></div>
            <div id="upperpanel" class="panel panel-default">
                <p class="lead" style="color : #DBDBDB">Containment</p>
                <div id="source" class="node" style="top:91px; left: 106px;">Source</div>
            </div>
            <div id="lowerpannel" class="panel panel-default">
                <p class="lead" style="color : #DBDBDB">Containment</p>
                <div id="target" class="node" style="top:281px; left: 266px;">Target</div>
            </div>
        </div>
        <h4>Main Components</h4>
        <p>
            <ul class="list-unstyled">
                <li><i class="glyphicon glyphicon-check"></i> A, B can't move out from their containments.</li>
                <li><i class="glyphicon glyphicon-check"></i> A can connect to B because both are in same container.</li>
            </ul>
        </p>
    </div>
</div>
