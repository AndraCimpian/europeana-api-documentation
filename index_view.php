<h2 id="API Call Methods" class="headline">API Call Methods</h2>
	
	<span class="modified">last updated : <?php echo date( 'r', filemtime( __FILE__ ) ); ?></span>
	<p>Below is a summary of the API call methods available and their corresponding responses.</p>


	<h3 id="GET requests">GET requests</h3>
	
		<table class="bordered">

			<thead>

				<tr>
					<th>name</th>
					<th>description</th>
				</tr>

			</thead>

			<tbody>

					<tr>
						<td><a href="/documentation/opensearch.rss" title="opensearch.rss">opensearch.rss</a></td>
						<td>Find objects within the Europeana repository following the <a href="http://www.opensearch.org/" target="_blank">OpenSearch specification</a>.</td>
					</tr>

					<tr>
						<td><a href="/documentation/record.json" title="record.json">record.json</a></td>
						<td>Retrieve information about a single object<sup><a href="#footnote-1">1</a></sup> within the Europeana repository.</td>
					</tr>

					<tr>
						<td><a href="/documentation/search.json" title="search.json">search.json</a></td>
						<td>Find objects<sup><a href="#footnote-1">1</a></sup> within the Europeana repository.</td>
					</tr>

					<tr>
						<td><a href="/documentation/search.kml" title="search.kml request">search.kml</a></td>
						<td>Find geographic annotation<sup><a href="#footnote-2">2</a></sup> for objects within the Europeana repository that match the search query provided.</td>
					</tr>

					<tr>
						<td><a href="/documentation/suggestions.json" title="suggestions.json">suggestions.json</a></td>
						<td>Provides suggestions aimed at applications that use autocompletion for search queries.</td>
					</tr>
		
				</tbody>
		
		</table>


	<h3>responses</h3>
	
		<table class="bordered">
	
			<thead>
	
				<tr>
					<th>name</th>
					<th>description</th>
				</tr>
	
			</thead>
	
			<tbody>
	
				<tr>
					<td><a href="http://www.opensearch.org/Specifications/OpenSearch/1.1#OpenSearch_response_elements" target="_blank" title="opensearch.rss">opensearch.rss</a></td>
					<td>An OpenSearch XML response.</td>
				</tr>
	
				<tr>
					<td><a href="/documentation/record.json/response" title="record.json">record.json</a></td>
					<td>A  collection of fields and field objects specific to the record.json method call.</td>
				</tr>
	
				<tr>
					<td><a href="/documentation/search.json/response" title="search.json">search.json</a></td>
					<td>A collection of fields and field objects specific to the search.json method call.</td>
				</tr>
	
				<tr>
					<td><a href="/documentation/search.kml/response" title="search.kml">search.kml</a></td>
					<td>A collection of fields and field objects specific to the search.kml method call.</td>
				</tr>
	
				<tr>
					<td><a href="/documentation/suggestions.json" title="suggestions.json">suggestions.json</a></td>
					<td>A collection of fields and field objects specific to the suggestions.json method call.</td>
				</tr>
	
			</tbody>
	
		</table>


	<h4 id="footnotes" class="headline">footnotes</h4>

		<sup id="footnote-1">1</sup> <small>Objects within the Europeana repository are made up of Cultural Heritage Objects (CHO), contextual resources, and digital representations, see the <a href="http://pro.europeana.eu/edm-documentation" title="edm documentaion" target="_blank">edm documentation</a> for further information.</small><br/>
		<sup id="footnote-2">2</sup> <small>Geographic annotation is an XML format, <a href="http://en.wikipedia.org/wiki/Keyhole_Markup_Language#Geodetic_reference_systems_in_KML" title="Keyhole Markup Language (KML)" target="_blank">Keyhole Markup Language (KML)</a>, that provides geographic coordinates and other metadata used for visualization of items on the Internet in two-dimensional and three-dimensional maps.
