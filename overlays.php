<div class="container">
	<div class="row">
		<div class="col-md-9"><h3><strong>Overlays</strong></h3>
You can add any number of overlays.
<ul>
	<li>
	<p><strong>Arrow</strong> - An arrow with foldback.</p>

	<ul>
		<li>
		<p><strong>width</strong></p>
		</li>
		<li>
		<p><strong>length</strong></p>
		</li>
		<li>
		<p><strong>location</strong> - from 0 to 1 inclusive</p>

		<ul>
			<li>
			<p>negative values mean distance from target;</p>
			</li>
			<li>
			<p>positive values greater than 1 mean distance from source)</p>
			</li>
		</ul>
		</li>
		<li>
		<p><strong>direction</strong> - which way to point. forwards : 1, backward : -1</p>
		</li>
		<li>
		<p><strong>foldback</strong> - Default is 0.623.</p>
		</li>
		<li>
		<p><strong>paintStyle</strong> -</p>
		</li>
	</ul>
	</li>
	<li>
	<p><strong>Label</strong> - a configurable label that is painted at some point along the connector.</p>

	<ul>
		<li>
		<p><strong>label</strong></p>
		</li>
		<li>
		<p>cssClass</p>
		</li>
		<li>
		<p>location</p>
		</li>
		<li>
		<p>labelStyle</p>
		</li>
	</ul>
	</li>
	<li>
	<p><strong>PlainArrow</strong> - an Arrow shaped as a triangle, with no foldback, meaning the tail of the Arrow is a flat edge.</p>
	</li>
	<li>
	<p><strong>Diamond</strong> -</p>
	</li>
	<li>
	<p><strong>Custom</strong> -</p>
	</li>
</ul>

	<p>PlainArrow (foldback 1), and Diamond (foldback 2) are 2 specialized instances of Arrow. So inherit Arrow&rsquo;s properties.</p>
</div></div></div>