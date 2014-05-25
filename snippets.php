<div class="container">
	<div class="row">
		<div class="col-md-12" id="plotarea">
			
		</div>
	</div>
</div>
<style type="text/css">
	#plotarea{height: 380px; display: block;}
	._jsPlumb_hover{}
	 ._jsPlumb_source_hover, ._jsPlumb_target_hover {
	    border:1px solid orange;
	    color:orange;
	}
</style>

<script src="js/data.js"></script>
<script>


	 $(document).ready(function(){
	 	 //plot nodes first
	 	 var plotarea = $("#plotarea");
		 for(var nodeid in data.nodeDetails){
		 	var node = data.nodeDetails[nodeid];
		 	nodeHTML =   '<div class="node '+node.tags+'" id="'+ nodeid +'">' + node.title+ '</div>';

		 	plotarea.append(nodeHTML);

				
			var left =  (plotarea.offset().left + Math.floor((Math.random()* (plotarea.width() - $("#"+nodeid).width()))+1));
			var top = (plotarea.offset().top + Math.floor((Math.random()* (plotarea.height() - $("#"+nodeid).height()))+1));
			$("#"+nodeid).css({"top" : top, "left":  left});
			
			jsPlumb.draggable($("#"+nodeid),{containment : plotarea});
		 }
		var connectionProperties = {
				endpoint : "Blank",
				connector: ["Bezier", {curviness : 50}],
			 	anchor : "AutoDefault",
			 	overlays: [["Arrow", {width: 10,length: 10,location: 1}]],
			 	paintStyle: {strokeStyle: "#5b9ada",lineWidth: 3},
			 	hoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 }
			 };

			 
		 //plot connections
		jsPlumb.ready(function(){
		 	for(var connectionid in data.connections){
				var connection = data.connections[connectionid];
				connectionProperties.source = $('#'+connection.source);
				connectionProperties.target = $('#'+connection.target);
				//debugger
				/*jsPlumb.connect({source : $('#'+connection.source),target : $('#'+connection.target) });*/
				jsPlumb.connect(connectionProperties);
			}
		 });
	 });
	 
	 function setDefault(instance){
	 	instance.importDefaults({
			  PaintStyle : {strokeStyle: "#5b9ada",lineWidth: 3},
			  DragOptions : { cursor: "crosshair" },
			  Endpoint : "Blank",
			  HoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 },
			  Overlays: [["Arrow", {width: 10,length: 10,location: 1}]],
			  Anchor : "AutoDefault",
			  Connector: ["Bezier", {curviness : 50}]
			});
	 }
</script>

<div class="container">
	Hide specific type of node and connections.
	<div class="row">
		<h3>Creation : Create a connection from backend</h3>
		<div class="col-md-12">
			<dl>
				<dt>Either set styling properties as default</dt>
				<dd>
					<pre>
						jsPlumb.importDefaults({
			  PaintStyle : {strokeStyle: "#5b9ada",lineWidth: 3},
			  DragOptions : { cursor: "crosshair" },
			  Endpoint : "Blank",
			  HoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 },
			  Overlays: [["Arrow", {width: 10,length: 10,location: 1}]],
			  Anchor : "AutoDefault",
			  Connector: ["Bezier", {curviness : 50}]
			});

			jsPlumb.connect({source : $(source),target : $(target) });
					</pre>
				</dd>
				<dt>Or set them at the time of connection if they may differ for each connection. The advantage of this to give different class, id to connections. So they can be removed or filtered easily later</dt>
				<dd>
					<pre>
						var connectionProperties = {
				endpoint : "Blank",
				connector: ["Bezier", {curviness : 50}],
			 	anchor : "AutoDefault",
			 	overlays: [["Arrow", {width: 10,length: 10,location: 1}]],
			 	paintStyle: {strokeStyle: "#5b9ada",lineWidth: 3},
			 	hoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 }
			 };

			 connectionProperties.source = $(source);
				connectionProperties.target = $(target);
				jsPlumb.connect(connectionProperties);
					</pre>
				</dd>
			</dl>
		</div>
	</div>

	<div class="row">
		<h3>Creation : Create a connection from UI</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>

	<div class="row">
		<h3>Deletion : Delete a connection</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>

	<div class="row">
		<h3>Deletion : Delete a node and all its connection</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>

	<div class="row">
		<h3>Undo & Redo : Create then Delete a connection then undo</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>

	<div class="row">
		<h3>Move a connection from one node to another</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>
	
	<div class="row">
		<h3>Hover Effect : Highlite connection and connecting nodes when mouse hover on a connection</h3>
		<div class="col-md-12">
			<dl>
				<dt>Set hoverPaintStyle of connection</dt>
				<dd><pre>hoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 }</pre></dd>
				<dt>Define some CSS properties for classes : _jsPlumb_source_hover, _jsPlumb_target_hover. Or _jsPlumb_hover only</dt>
			</dl>
		</div>
	</div>
	<div class="row">
		<h3>Hover Effect : Highlite node and all its connection when mouse hover on a node</h3>
		<div class="col-md-12">
			<dl>
				<dt></dt>
				<dd></dd>
			</dl>
		</div>
	</div>

	<div class="row">
		<h3>Hover Effect : Highlite node and its branch when mouse hover on a node</h3>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>



	
</div>