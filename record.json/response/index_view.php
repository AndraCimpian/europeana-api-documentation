<h2>record.json response</h2>
<p>A collection of fields and field objects specific to the record method call.</p>

<table class="bordered">

	<thead>

		<tr>
			<th>fields</th>
			<th>data&nbsp;type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

			<tr>
				<td>object <span class="required">*</span></td>
				<td><a href="/documentation/record.json/response/object">object</td>
				<td>an object represents the EDM metadata record</td>
			</tr>

			<tr>
				<td>similarItems</td>
				<td><a href="/documentation/search.json/response/item" title="item[]">item[]</a></td>
				<td>A collection of metadata records similar to the current one. Available only if profile parameter’s value is set to similar. The collection of items is the same as the search call’s item collection.</td>
			</tr>

		</tbody>

</table>
<span class="required">*</span> <small>indicates an object property guaranteed to be in the object</small>
