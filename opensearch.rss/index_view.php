<h2 id="opensearch.rss" class="headline">opensearch.rss</h2>

		<span class="modified">last updated : <?php echo date( 'r', filemtime( __FILE__ ) ); ?></span>
		<p>Basic search function following the OpenSearch specification (see <a href="http://www.opensearch.org/" title="OpenSearch" target="_blank">http://www.opensearch.org/</a>), returning the results in XML (RSS) format. This function does not support facet search or profiles. Name of parameters are different from other API call methods, because they match the opensearch standard. The OpenSearch response elements can be used by search engines to augment existing XML formats with search-related metadata.</p>


<h3 id="request">request</h3>
<code class="prettyprint">http://europeana.eu/api/v2/opensearch.rss</code>
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
			<td>searchTerms&nbsp;<span class="required">*</span></td>
			<td>string</td>
			<td>The search terms used to query the Europeana repository; similar to the query parameter in the <a href="/documentation/search.json" title="search method">search method</a>.</td>
		</tr>

		<tr>
			<td>count</td>
			<td>int</td>
			<td>The number of search results to return; possible values can be any integer up to 100 [default = 12] </td>
		</tr>

		<tr>
			<td>sort <span class="todo">*</spam></td>
			<td>string</td>
			<td>Sort the result set based on (relevance, title, publication date) [default = relevance]</td>
		</tr>

		<tr>
			<td>startIndex</td>
			<td>int</td>
			<td>The first object in the search result set to start with (first item = 1), e.g., if a result set is made up of 100 objects, you can set the first returned object to the 22nd object in the set [default = 1] </td>
		</tr>

	</tbody>

</table>
<span class="required">*</span> <small>indicates a required parameter</small><br/>
<span class="todo">*</span> <small>not yet implemented</small>


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
			<td><a href="http://www.opensearch.org/Specifications/OpenSearch/1.1#OpenSearch_response_elements" title="opensearch response" target="_blank">opensearch</a></td>
			<td>An OpenSearch XML Response. The OpenSearch response elements can be used by search engines to augment existing XML formats with search-related metadata.</td>
		</tr>

	</tbody>

</table>


<h3 id="examples">examples</h3>
<pre class="prettyprint">/api/v2/opensearch.rss?searchTerms=paris</pre>
<p><a href="/opensearch.rss?searchTerms=paris" class="demo">» demo</a></p>

<pre class="prettyprint">/api/v2/opensearch.rss?searchTerms=paris&count=3</pre>
<p><a href="/opensearch.rss?searchTerms=paris&count=3" class="demo">» demo</a></p>

<pre class="prettyprint">/api/v2/opensearch.rss?searchTerms=paris&sort=title</pre>
<p><a href="/opensearch.rss?searchTerms=paris&sort=title" class="demo">» demo</a></p>

<pre class="prettyprint">/api/v2/opensearch.rss?searchTerms=paris&startIndex=3</pre>
<p><a href="/opensearch.rss?searchTerms=paris&startIndex=3" class="demo">» demo</a></p>
