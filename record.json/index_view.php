<h2 id="record" class="headline">record.json</h2>

		<span class="modified">last updated : <?php echo date( 'r', filemtime( __FILE__ ) ); ?></span>
		<p>This API method is used for retrieving information about a single record in the Europeana repository. Its mandatory parameter is the unique Europeana ID of the record. Differently from other API parameters, the record ID is not supplied via a query parameter, but as part of the path within the URL. <span class="todo">@todo : provide more information about the way records are identified.</span></p>


<h3 id="request">request</h3>
<code class="prettyprint">http://europeana.eu/api/v2/record/[recordID].json</code>
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
				<td>recordID <span class="required">*</span></td>
				<td>int</td>
				<td>The id of the record being requested.<br/>The record id consists of two parts concatenated together, the collection number and the item identifier, <code class="prettyprint">/09102/_SMS_MM_M777</code></td>
			</tr>

			<tr>
				<td>wskey <span class="required">*</span></td>
				<td>string</td>
				<td>The API key you get when you register (see wskey section). The API key you get when you register (do not confuse with the other key, called Private key). Mandatory parameter in every JSON-based calls</td>
			</tr>

			<tr>
				<td>callback</td>
				<td>string</td>
				<td>Name of a client side (JavaScript) callback function. If you set a funtion the JSON response will be wrapped by this function call, so it is not JSON, but <a href="http://en.wikipedia.org/wiki/JSONP" target="_blank" title="JSONP">JSONP</a> (JSON with Paggings). JSONP provides a method to request data from a server in a different domain, something prohibited by typical web browsers because of the <a href="http://en.wikipedia.org/wiki/Same_origin_policy" title="same origin policy" target="_blank">same origin policy</a>.</td>

			<tr>
				<td>profile</td>
				<td>string</td>
				<td>[default = full]<br/><b>full</b> : all the available information about the returned records will be available.<br/><b>similar</b> : the records will contain, in addition to the full profile, information about Europeana records which are similar to the returned records.</td>
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
			<td><a href="/documentation/record.json/response" title="record.json">record.json</a></td>
			<td>A collection of fields and field objects specific to the record.json method call.</td>
		</tr>

		</tbody>

</table>


<h3 id="examples">examples</h3>
<pre class="prettyprint">
// Explicitly specifying the full profile
/api/v2/record/09102/_SMS_MM_M777.json?wskey=xxxx&profile=full
</pre>
<p><a href="/record.json?recordID=/09102/_SMS_MM_M777&profile=full" class="demo">» demo</a></p>

<pre class="prettyprint">
// Using full profile implicitly (as default) -- the effect is similar to the previous call
/api/v2/record/09102/_SMS_MM_M777.json?wskey=xxxx
</pre>
<p><a href="/record.json?recordID=/09102/_SMS_MM_M777" class="demo">» demo</a></p>

<pre class="prettyprint">
// Specifying the similar profile
/api/v2/record/09102/_SMS_MM_M777.json?wskey=xxxx&profile=similar
</pre>
<p><a href="/record.json?recordID=/09102/_SMS_MM_M777&profile=similar" class="demo">» demo</a></p>