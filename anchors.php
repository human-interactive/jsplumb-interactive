    	<div class="container">
    		<div class="row">
    			<div class="col-md-9">
<h3><strong>Anchor : </strong></h3>

<ol>
	<li>
	<p><strong>Static</strong> : Static point : Top, Right, Bottom, Left. You can use Left, Right suffix with Top &amp; Bottom. Or [x, y, dx, dy], where x and yare coordinates in the interval [0,1] specifying the position of the anchor, and dx and dy are coordinates in the interval [-1, 1]. So LeftCenter : [0, 0.5, -1, 0], and CenterTop : [0.5, 0, 0, -1].</p>
	</li>
</ol>

<p>&nbsp;&nbsp; &nbsp;offset : You can pass 2 more optional parameters to define offset. Eg anchor<strong>:</strong>[ 0.5, 1, 0, 1, 0, 50 ]</p>

<ol>
	<li>
	<p><strong>Dynamic</strong> : an array of static anchors. An anchor close to connected element will be used.</p>
	</li>
	<li>
	<p><strong>Perimeter</strong> : Define the path for algorithm to find out location for dynamic anchors.</p>
	</li>
	<li>
	<p><strong>Continuous</strong> : Dynamic anchors where you need not to specify locations. It is more expensive.</p>
	</li>
</ol>

<p>&nbsp;&nbsp; &nbsp;Eg : anchor<strong>:</strong>&quot;Continuous&quot;</p>

<p><strong>Class</strong> :</p>

<p>_jsPlumb_endpoint_anchor_top<br />
_jsPlumb_endpoint_anchor_right<br />
_jsPlumb_endpoint_anchor_left<br />
_jsPlumb_endpoint_anchor_bottom</p>
</div></div></div>