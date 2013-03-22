<h2>Point</h2>
<p>A geographic location defined by longitude, latitude, and (optional) altitude. When a Point is contained by a Placemark, the point itself determines the position of the Placemark's name and icon.<br/><span class="required">nb: this call has not yet been completely thought out and does not yet meet the specification; may change at any time.</span></p>

<table class="bordered">

	<thead>

		<tr>
			<th>elements</th>
			<th>data&nbsp;type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

		<tr>
			<td>coordinates&nbsp;<span class="required">*</span></td>
			<td>tuple</td>
			<td>A single tuple consisting of floating point values for longitude, latitude, and altitude (in that order); do not include spaces between the three values that describe a coordinate. Longitude and latitude values are in degrees, where<br/>longitude ≥ −180 and <= 180<br/>latitude ≥ −90 and ≤ 90<br/>altitude values (optional) are in meters above sea level<br/><span class="todo">are we correctly outputting these values? The Google documentation on <a href="https://developers.google.com/kml/documentation/kmlreference#point" target="_blank">point</a> shows the coordinates tuple separated by a comma, and the values are not container in brackets, e.g., &lt;coordinates>-90.86948943473118,48.25450093195546&lt;/coordinates></span></td>
		</tr>

		</tbody>

</table>
<small><span class="required">*</span> indicates an object property guaranteed to be in the object</small>
