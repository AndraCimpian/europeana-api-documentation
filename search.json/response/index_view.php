<h2>search.json response</h2>
<p>A collection of fields and field objects specific to the search method call.</p>

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
				<td>breadCrumbs</td>
				<td><a href="/documentation/search.json/response/breadCrumb" title="breadCrumb[]">breadCrumb[]</a></td>
				<td>A collection of search elements (query and qf parameters) (available in case of breadrumb and portal profile applications). <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>facets</td>
				<td><a href="/documentation/search.json/response/facet" title="facet[]">facet[]</a></td>
				<td>A collection of facet objects (available in case of facets and portal profile applications). <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>items</td>
				<td><a href="/documentation/search.json/response/item" title="item[]">item[]</a></td>
				<td>if the search has results, the hits take place in the "items" array. Each item is an object, and represents a summary of metadata record. The actual content is depending of the profile parameter.</td>
			</tr>

			<tr>
				<td>itemsCount</td>
				<td>int</td>
				<td>the number of retrieved hits (you can set the number per request with the rows parameter, but it can not be greater than 100)</td>
			</tr>

			<tr>
				<td>totalResults</td>
				<td>int</td>
				<td>the total number of results</td>
			</tr>

			<tr>
				<td>spellcheck</td>
				<td><a href="/documentation/search.json/response/spellcheck" title="spellcheck[]">spellcheck[]</a></td>
				<td>A collection of spellcheck suggestions (available in case of spellcheck and portal profile applications). <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

		</tbody>

</table>
