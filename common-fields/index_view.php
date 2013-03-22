<h2>common fields</h2>
<p>Every json api response will contain a set of standard response fields and a http status code that relates to the result of the call.</p>

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
			<td>apikey</td>
			<td>string</td>
			<td>the authentication parameter sent out by the client (the wskey parameter)</td>
		</tr>

		<tr>
			<td>action</td>
			<td>string</td>
			<td>the name of the API method that was called</td>
		</tr>

		<tr>
			<td>success</td>
			<td>string</td>
			<td>a boolean (true/false) flag denoting the successful execution of the call</td>
		</tr>

		<tr>
			<td>statsDuration&nbsp;<span class="todo">* </span></td>
			<td>int</td>
			<td>is number, represents the time taken in milliseconds to serve this request</td>
		</tr>

		<tr>
			<td>requestNumber</td>
			<td>int</td>
			<td>a positive number denoting the number of request by this API key within the last 24 hours</td>
		</tr>

		<tr>
			<td>error</td>
			<td>string</td>
			<td>if the call was not successful this field will contain a detailed text message.</td>
		</tr>

	</tbody>

</table>
<span class="todo">*</span> <small>not yet implemented</small>


<h3>http status codes</h3>
<table class="bordered">

	<thead>

		<tr>
			<th>number</th>
			<th>explanation</th>
		</tr>

	</thead>

	<tbody>

			<tr>
				<td>200</td>
				<td>The request was executed successfully.<br/><span class="todo">clarify : a record request with an invalid record id returns a json with "success":false, yet the request itself was successful - should it not be "success":true since the execution of the call was successful? "error":"Invalid record identifier" seems fine<br/>this page returns a json</span></td>
			</tr>

			<tr>
				<td>400</td>
				<td>The request sent by the client was syntactically incorrect.<br/><span class="todo">this page returns an html page - should this return a json?</span></td>
			</tr>

			<tr>
				<td>401</td>
				<td>Service is called with invalid argument(s)<br/><span class="todo">clarify: seems that this means a missing wskey and that 400 is used for all other malformed queries, but when trying a record request without a wskey 400 is returned<br/>this page returns a json</span></td>
			</tr>

			<tr>
				<td>404</td>
				<td>The requested resource is not available<br/><span class="todo">clarify: does that mean that there is no such ID?<br/>this page returns an html page - should this return a json?</td>
			</tr>

			<tr>
				<td>429</td>
				<td>The request could be served because the application has reached its usage limit<br/><span class="todo">does this page return a json?</span></td>
			</tr>

			<tr>
				<td>500</td>
				<td>Internal Server Error. Something has gone wrong, please report to us.<br/><span class="todo">where do i report the error?</span></td>
			</tr>

		</tbody>

</table>
