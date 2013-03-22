<h2 id="title-who-what-when-where-search">title, who, what, when, where search</h2>

	<p>The title, who, what, when and where fields are special aggregated fields. We created them in order to facilitate searches combining fields which belongs to the same domain.</p>
	<p>Here we list the aggregated fields. The field names in italic denote the EDM entity and element, while names in parentheses denote the Apache Solr fields.</p>
	<p>Since the data come from more than 2200 providers, these categories are not always as discrete as we would like to be. As you can see, that dc:subject is both under what, when and where, simply because we can not always find out automatically, whether a given subject should categorize into a given fine grained field.</p>
	
	<table class="bordered">

		<thead>

			<tr>
				<th>field</th>
				<th>description</th>
				<th>metadata fields</th>
			</tr>

		</thead>

		<tbody>

			<tr>
				<td>title</td>
				<td>title related fields</td>
				<td>edm:ProvidedCHO/dc:title (proxy_dc_title),<br/>edm:ProvidedCHO/dcterms:alternative (proxy_dcterms_alternative)</td>
			</tr>

			<tr>
				<td>who</td>
				<td>fields related to the persons who created the object or contributed in it</td>
				<td>edm:ProvidedCHO/dc:creator (proxy_dc_creator),<br/>edm:ProvidedCHO/dc:contributor (proxy_dc_contributor),<br/>ore:Agregation/skos:prefLabel (ag_skos_prefLabel)</td>
			</tr>

			<tr>
				<td>what</td>
				<td>fields related to the topic of the object</td>
				<td>edm:ProvidedCHO/dc:type (proxy_dc_type),<br/>edm:ProvidedCHO/dc:subject (proxy_dc_subject),<br/>edm:ProvidedCHO/dc:format (proxy_dc_format),<br/>skos:Concept/skos:prefLabel (cc_skos_prefLabel),<br/>skos:Concept/skos:broaderLabel (cc_skos_broaderLabel)</td>
			</tr>

			<tr>
				<td>when</td>
				<td>fields related to the temporal attribution</td>
				<td>edm:TimeSpan/skos:prefLabel (ts_skos_prefLabel),<br/>edm:ProvidedCHO/dc:coverage (proxy_dc_coverage),<br/>edm:ProvidedCHO/dcterms:created (proxy_dcterms_created),<br/>edm:ProvidedCHO/dcterms:temporal (proxy_dcterms_temporal),<br/>edm:ProvidedCHO/dc:date (proxy_dc_date),<br/>edm:ProvidedCHO/dc:subject (proxy_dc_subject)</td>
			</tr>

			<tr>
				<td>where</td>
				<td>fields related to spatial attribution</td>
				<td>edm:ProvidedCHO/dc:coverage (proxy_dc_coverage),<br/>edm:ProvidedCHO/dcterms:spatial (proxy_dcterms_spatial),<br/>edm:ProvidedCHO/dc:subject (proxy_dc_subject),<br/>edm:Place/skos:prefLabel (pl_skos_prefLabel)</td>
			</tr>

		<tbody>

	</table>

	
	<h3>example : title</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=title:(mona lisa)</pre>
		<p><a href='/search?query=title:(mona lisa)' target="_blank" class="demo">» demo</a></p>


	<h3>example : who</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=who:(mona lisa)</pre>
		<p><a href='/search?query=who:(mona lisa)' target="_blank" class="demo">» demo</a></p>
