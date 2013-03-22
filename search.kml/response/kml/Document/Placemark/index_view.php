<h2>Placemark</h2>
<p>A Placemark is a Feature with associated Geometry.<br/><span class="required">nb: this call has not yet been completely thought out and does not yet meet the specification; may change at any time.</span></p>

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
			<td>name</td>
			<td>string</td>
			<td>The title of the Europeana object</td>
		</tr>

		<tr>
			<td>description</td>
			<td>string</td>
			<td>a link to the object in the Europeana portal with a thumbnail of the object</td>
		</tr>
		<tr>
			<td>Point</td>
			<td><a href="/documentation/search.kml/response/kml/Document/Placemark/Point">Point</a></td>
			<td>A <a href="https://developers.google.com/kml/documentation/kmlreference#geometry" title="Geometry object" target="_blank">Geometry object</a></td>
		</tr>
		<tr>
			<td>link</td>
			<td>string</td>
			<td>a link to the Europeana object</td>
		</tr>

		</tbody>

</table>


<table class="api-table block">

	<thead>

		<tr>
			<th>attributes</th>
			<th>data&nbsp;type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

		<tr>
			<td>id</td>
			<td>string</td>
			<td><span class="todo">should we use the id attribute of the &lt;Placemark> element to indicate the record id of the object?</span></td>
		</tr>

		</tbody>

</table>

demo of the old api returned values for the query <a href="http://www.europeana.eu/portal/map.json?query=paris">http://www.europeana.eu/portal/map.json?query=paris</a>
