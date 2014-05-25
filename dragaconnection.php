<div class="row"><h3>Drag a Connection</h3>
	<div class="col-md-12">
		<p>An endpoint can have a type. A connection have same type of endpoints only. So if you wanna connect a connector to another type of endpoint, it'll not connect. Endpoint type is defined as <strong>scope</strong> attribute.</p>
		<p>DO you know? A connection is by default detachable until its endpoint is set to "Blank". So if you drag it and leave in empty space that connection will be deleted. </p>
		<p>DON't you want this? either make it non-detachable<code>detachable:false</code> or reattachable<code>reattach:true</code> at the time of <code>jsPlumb.connect({});</code>.<br/>
		
		What !!! it dint work? Suppose you plotted a graph for given nodes. You set <code>detachable:false</code> for type : "MNO" and all endpoints are of same type or rather same scope.
		<pre>{"source" : "A", "target" : "B", "type" : "ABC"},
{"source" : "A", "target" : "C", "type" : "MNO"},
{"source" : "C", "target" : "B", "type" : "MNO"}</pre>
		In this case, you can't detach connection between A, B as well.
		<br/>In case you wanna set those propery as default;
		<pre>jsPlumb.importDefaults({
  ConnectionsDetachable:true,
  ReattachConnections:true
});</pre>
		</p>
		<p>You can also set a <strong>maxConnection</strong> property for an endpoint. And cant take action when endpoint is full by setting <strong>onMaxConnections</strong> So if you drop a connection in space or on wrong type endpoint (endpoint has different scope), or on endpoint which is already full, you will loose that connection (if you haven't set reattach:true).</p>
		<p>DO you wanna detach it programatically?
<pre>var conn = jsPlumb.connect({ some params});
...
jsPlumb.detach(conn);</pre>
		Remember that your this action will also delete the connection if you haven't set <code>deleteEndpointsOnDetach:false</code> and the target endpoint was not registered with <strong>addEndpoint</strong>).
		</p>
		<p>There may be a situation when you need to draw a differnt type/style of connection among various elements. You can do it in 2 steps.
			<ol>
				<li>Registering a connection style and give it some name to this style</li>
				<li>Pass it to <strong>type</strong> parameter to <strong>connect</strong> or <strong>addEndpoint</strong> method.</li>
			</ol>
<pre>
jsPlumb.registerConnectionTypes({
    "basic": {
        paintStyle:{ strokeStyle:"blue", lineWidth:5  },
        hoverPaintStyle:{ strokeStyle:"red", lineWidth:7 }
    },
    "selected":{
        paintStyle:{ strokeStyle:"red", lineWidth:5 },
        hoverPaintStyle:{ lineWidth: 7 }
    }   
});

var c = jsPlumb.connect({ source:"someDiv", target:"someOtherDiv", type:"basic" });	</pre>
A connection can have multiple types. So different styling will be merged and apply to that connection. You can set following parameters;
	<ul>
		<li>detachable</li>
		<li>paintStyle</li>
		<li>hoverPaintStyle</li>
		<li>scope</li>
		<li>parameters</li>
		<li>overlays</li>
	</ul>
		More methods: setType, addType, hasType and toggleType.
		</p>
		<p>
			In similar way, you can define type of an endpoint too.
<pre>
jsPlumb.registerEndpointTypes({
  "basic":{         
    paintStyle:{fillStyle:"blue"}
  },
  "selected":{          
    paintStyle:{fillStyle:"red"}
  }
});

var e = jsPlumb.addEndpoint("someElement", {
  anchor:"TopMiddle",
  type:"basic"
});	
</pre>
		<strong>Parameterized type</strong> : pass value through data parameter.
<pre>
jsPlumb.registerEndpointType("example", {
    paintStyle:{ fillStyle:"${color}"}
});

var e = jsPlumb.addEndpoint("someDiv", { 
    type:"example",
    data:{ color: "blue" }
});
</pre>
		</p>
	</div>
</div>
