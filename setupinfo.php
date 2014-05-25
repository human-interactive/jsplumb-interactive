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
            Set <strong>position</strong> of an element to <strong>absolute</strong>.
            <pre>jsPlumb.draggable(element,{ containment: element-parent});</pre>
            <strong>Note:</strong> If you make an element draggable using jquery plugin, connection will not drag together an element.
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
