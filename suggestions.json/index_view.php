<h2 id="suggestions" class="headline">suggestions.json</h2>
<p>This API method is aimed at applications that have the autocompletion functionality for search queries. For the provided query term, a list of Europeana objects that contain this query term in one of their fields. </p>


<h3 id="request">request</h3>
<code class="prettyprint">http://europeana.eu/api/v2/suggestions.json</code>
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
				<td>The search term(s) to base the suggestion response upon. See the <a href="/documentation/query-syntax" title="query syntax">query syntax</a> section of this documentation for information on forming complex queries and examples. <span class="todo">it seems that the suggestion query only responds to a single word and does not use the advanced query syntax - is that true? need a better explanation or example of the following sentence</span> -> For spelling suggestions this term is used as “start with”, for phrase search it is matched on contains. In both cases it is case-insensitive.</td>
			</tr>

			<tr>
				<td>callback</td>
				<td>string</td>
				<td>Name of a client side (JavaScript) callback function. If you set a funtion the JSON response will be wrapped by this function call, so it is not JSON, but <a href="http://en.wikipedia.org/wiki/JSONP" target="_blank" title="JSONP">JSONP</a> (JSON with Paggings). JSONP provides a method to request data from a server in a different domain, something prohibited by typical web browsers because of the <a href="http://en.wikipedia.org/wiki/Same_origin_policy" title="same origin policy" target="_blank">same origin policy</a>.</td>
			</tr>

			<tr>
				<td>phrases</td>
				<td>string</td>
				<td>[default = false] true or false, give phrase suggestions instead of spelling suggestions.</td>
			</tr>

			<tr>
				<td>rows</td>
				<td>int</td>
				<td>[default = 10] change the maximum number of results.</td>
			</tr>

		</tbody>

</table>
<span class="required">*</span> <small>indicates a required parameter</small>


<h3 id="response">response</h3>
<table class="bordered">

	<thead>

		<tr>
			<th>type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

		<tr>
			<td><a href="/documentation/common-fields" title="common fields">common fields</a></td>
			<td>A common collection of common fields relating to the status of the api call.</td>
		</tr>

		<tr>
			<td><a href="/documentation/suggestions.json/response" title="suggestions.json">suggestions.json</a></td>
			<td>A collection of fields and field objects specific to the suggestions.json method call.</td>
		</tr>

		</tbody>

</table>


<h3 id="examples">examples</h3>
<pre class="prettyprint">
/api/v2/suggestions.json?query=pari
</pre>
<p><a href="/suggestions.json?query=pari" class="demo">demo</a></p>

<pre class="prettyprint">
/api/v2/suggestions.json?query=pari&phrase=true
</pre>
<p><a href="/suggestions.json?query=pari&phrase=true" class="demo">» demo</a></p>

<pre class="prettyprint">
/api/v2/suggestions.json?query=pari&rows=4
</pre>
<p><a href="/suggestions.json?query=pari&rows=4" class="demo">» demo</a></p>

<pre class="prettyprint">
/api/v2/suggestions.json?query=pari&callback=myCallback
</pre>
<p><a href="/suggestions.json?query=pari&callback=myCallback" class="demo">» demo</a></p>
