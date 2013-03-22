<h2 class="headline">search.json</h2>

	<span class="modified">last updated : <?php echo date( 'r', filemtime( __FILE__ ) ); ?></span>
	<p>The search method is used to find objects within the Europeana repository</p>


<h3 id="request">request</h3>
<code class="prettyprint">http://europeana.eu/api/v2/search.json</code>
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
				<td>callback</td>
				<td>string</td>
				<td>Name of a client side (JavaScript) callback function. If you set a funtion the JSON response will be wrapped by this function call, so it is not JSON, but <a href="http://en.wikipedia.org/wiki/JSONP" target="_blank" title="JSONP">JSONP</a> (JSON with Paggings). JSONP provides a method to request data from a server in a different domain, something prohibited by typical web browsers because of the <a href="http://en.wikipedia.org/wiki/Same_origin_policy" title="same origin policy" target="_blank">same origin policy</a>.</td>
			</tr>

			<tr>
				<td>profile</td>
				<td>string</td>
				<td>[default = full]<br/><b>full</b> : all the available information about the returned records will be available.<br/><b>similar</b> : the records will contain, in addition to the full profile, information about Europeana records which are similar to the returned records.</td>
			</tr>

			<tr>
				<td>qf</td>
				<td>string</td>
				<td>query facet filtering. this parameter can be defined more than once. See the <a href="/documentation/query-syntax/faceted" title="query-syntax documentation">query-syntax documentation</a> on faceted search for more information.</td>
			</tr>

			<tr>
				<td>rows</td>
				<td>int</td>
				<td>the number of records to return once. The maximal value is 100, default is 12.</td>
			</tr>

			<tr>
				<td>start</td>
				<td>int</td>
				<td>The item in the search results to start (first item = 1, default is 1).</td>
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
			<td><a href="/documentation/common-fields" title="common fields">common fields</a></td>
			<td>A common collection of common fields relating to the status of the api call.</td>
		</tr>

		<tr>
			<td><a href="/documentation/search.json/response" title="search.json">search.json</a></td>
			<td>A collection of fields and field objects specific to the search.json method call.</td>
		</tr>

		</tbody>

</table>


<h3 id="examples">examples</h3>
<pre class="prettyprint">
// finding all documents related to the name Rembrandt van Rijn, e.g., Mona Enqvist and Lisa Nilsson
/api/v2/search.json?query=Rembrandt van Rijn&wskey=xxxx
</pre>
<p><a href="/search.json?query=Rembrandt van Rijn" class="demo">» demo</a></p>

<pre class="prettyprint">
// finding all documents related to the famous painter
/api/v2/search.json?query="Rembrandt van Rijn"&wskey=xxxx
</pre>
<p><a href='/search.json?query="Rembrandt van Rijn"' class="demo">» demo</a></p>

<pre class="prettyprint">
// The basic syntax for a fielded search is [field name]:[query term]
/api/v2/search.json?query=who:Rembrandt van Rijn&wskey=xxxx
</pre>
<p><a href="/search.json?query=who:Rembrandt van Rijn" class="demo">» demo</a></p>

<pre class="prettyprint">
// If you want to search for multiple term, you'd better use [field name]:([term1] [term2] [term3]) (you have to use the parens to notify Solr, that all terms belongs to the same field)
/api/v2/search.json?query=who:(leonardo michealangelo)&wskey=xxxx
</pre>
<p><a href="/search.json?query=who:(leonardo michealangelo)" class="demo">» demo</a></p>

<pre class="prettyprint">
// or combining with phrase search [field name]:"[term1] [term2]"
/api/v2/search.json?query=who:"leonardo da vinci"&wskey=xxxx
</pre>
<p><a href='/search.json?query=who:"leonardo da vinci"' class="demo">» demo</a></p>
