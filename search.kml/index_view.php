<h2 id="search.kml" class="headline">search.kml</h2>
<p>Find geographic annotation3 for objects within the Europeana repository that match the search query provided.<br/><span class="required">nb: this call has not yet been completely thought out and does not yet meet the specification; may change at any time.</span></p>


<h3 id="request">request</h3>
<code class="prettyprint">http://europeana.eu/api/v2/search.kml</code>
<table class="bordered">

	<thead>

		<tr>
			<th>parameters</th>
			<th>data&nbsp;type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

			<tr>
				<td>query <span class="required">*</span></td>
				<td>string</td>
				<td>The search term(s) for the search. See the <a href="/documentation/query-syntax" title="query syntax">query syntax</a> section of this documentation for information on forming complex queries and examples.</td>
			</tr>

			<tr>
				<td>wskey <span class="required">*</span></td>
				<td>string</td>
				<td>the API key you get when you register (see wskey section). The API key you get when you register (do not confuse with the other key, called Private key). Mandatory parameter in every JSON-based calls</td>
			</tr>

			<tr>
				<td><span class="todo">any other parameters?</span></td>
				<td></td>
				<td></td>
			</tr>

		</tbody>

</table>
<span class="required">*</span> <small>indicates a required parameter</small>


<h3 id="response">response</h3>
<table class="bordered">

	<thead>

		<tr>
			<th>response type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

		<tr>
			<td><a href="/documentation/search.kml/response" title="search.kml">search.kml</a></td>
			<td>A collection of elements specific to the search.kml method call.</td>
		</tr>

		</tbody>

</table>


<h3 id="examples">examples</h3>
<p>Finding geo-coordinates of objects near wien, austria</p>
<pre class="prettyprint">
/api/v2/search.kml?query=wien&wskey=xxxx
</pre>
<p><a href="/search.kml?query=wien" title="demo" class="demo">» demo</a></p>
