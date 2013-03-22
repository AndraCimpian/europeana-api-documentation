<h2 id="faceted-search">faceted search</h2>

	<p>As mentioned in the Europeana Data Model section facets are available to API programmers. You can choose to limit your search to records that contain a certain value in a given facet, or alternatively to exclude such records from the results.</p>
	<p>The number of records that Europeana contains is very big and growing. Therefore we need efficient techniques to allow our end users discovering what they need easily. One of such techniques is faceted indexiing system that classifies each element along multiple dimensions. Besides being useful for searching data on Europeana portal, facets (those are those filters on the left side of a portal page) can also be used by API users. Currently we support the following facets:</p>
	<p>API support, likewise to the portal, Facet search filtering. All facets of portal are supported without limitations. All facets can also be used to exclude the filter result of the search results by adding a dash ( - ) in front of the facet label. The portal is using the same parameters in the URL, so can easily be used for trying searches.</p>
	<p class="todo">add explanation</p>
	
	<table class="bordered">

		<thead>

			<tr>
				<th>facet</th>
				<th>description</th>
			</tr>

		</thead>

		<tbody>

			<tr>
				<td><a href="#completeness" title="completeness">completeness</a></td>
				<td>The completeness is a number (scaling from 1 to 10) measuring the quality of metadata records by the completeness of mandatory and optional metadata schema fields. <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#copyright" title="copyright">copyright</a></td>
				<td>Filter on the copyright status of objects. The status is noted by the URL of the copyright. <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#country" title="country">country</a></td>
				<td>Filter by country. <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#language" title="language">language</a></td>
				<td>Filter on language set for the objects. (Not the language of the text) <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#media-type" title="media type">media type</a></td>
				<td>Select by object type. Possible values: image, text, sound, video, 3d.<span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#provider" title="provider">provider</td>
				<td>Filter by providers. The providers are usually the content aggregators in a given domain or for a region. <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#ugc" title="provider">ugc</td>
				<td>User generated content can be included or excluded in the search results. By default it is included, so no facet is needed if this is wanted. As UGC is not a required field in Europeana data, using a false value does not guarantee a valid results, so prevent using that. <span class="todo">description needed</span></td>
			</tr>

			<tr>
				<td><a href="#year" title="year">year</a></td>
				<td>Filter on year. <span class="todo">description needed - was called date, but it looks like it is only year - is that correct?</span></td>
			</tr>

		</tbody>

	</table>


	<h3 id="completeness">completeness</h3>

		<p>Searching for “paris” and filtering on a completeness of 6</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=COMPLETENESS:6</pre>
		<p><a href='/search?query=paris&qf=COMPLETENESS:6' target="_blank" class="demo">» demo</a></p>


	<h3 id="copyright">copyright</h3>

		<p>Filtering results of the term paris for objects which has the by “Free Access - Rights Reserved”</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=RIGHTS:http://www.europeana.eu/rights/rr-f/</pre>
		<p><a href='/search?query=paris&qf=RIGHTS:http://www.europeana.eu/rights/rr-f/' target="_blank" class="demo">» demo</a></p>


	<h3 id="country">country</h3>

		<p>Searching for “paris” and filtering on france</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=COUNTRY:france</pre>
		<p><a href='/search?query=paris&qf=COUNTRY:france' target="_blank" class="demo">» demo</a></p>


	<h3 id="language">language</h3>

		<p>Searching for “paris” and filtering on the language French</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=LANGUAGE:FR</pre>
		<p><a href='/search?query=paris&qf=LANGUAGE:FR' target="_blank" class="demo">» demo</a></p>


	<h3 id="media-type">media type</h3>

		<p>Searching for “paris” and filtering on images</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=TYPE:IMAGE</pre>
		<p><a href='/search?query=paris&qf=TYPE:IMAGE' target="_blank" class="demo">» demo</a></p>


	<h3 id="provider">provider</h3>

		<p>Filtering results of the term paris for objects provided by “The European Library”</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=PROVIDER:The+European+Library</pre>
		<p><a href='/search?query=paris&qf=PROVIDER:The+European+Library' target="_blank" class="demo">» demo</a></p>


	<h3 id="ugc">ugc</h3>

		<p>Filtering results of the term “paris” and including ugc</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=UGC:true</pre>
		<p><a href='/search?query=paris&qf=UGC:true' target="_blank" class="demo">» demo</a></p>
		
		<p>Filtering results of the term “paris” and excluding ugc</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=-UGC:true</pre>
		<p><a href='/search?query=paris&qf=-UGC:true' target="_blank" class="demo">» demo</a></p>


	<h3 id="year">year</h3>

		<p>Searching for “paris” and filtering on the year 1889</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=YEAR:1889</pre>
		<p><a href='/search?query=paris&qf=YEAR:1889' target="_blank" class="demo">» demo</a></p>
