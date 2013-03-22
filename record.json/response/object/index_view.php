<h2>object</h2>
<p>an object represents the EDM metadata record</p>
<table class="bordered">

	<thead>

		<tr>
			<th>properties</th>
			<th>data&nbsp;type</th>
			<th>description</th>
		</tr>

	</thead>

	<tbody>

			<tr>
				<td>about</td>
				<td>string</td>
				<td>is the record ID string such as "/9200143/41CCA52E2986E491BBA631D4899768A5002C455A". You can find it as part of URL of record call or of the full object page at Europeana portal.</td>
			</tr>

			<tr>
				<td>agents</td>
				<td><a href="/documentation/record.json/response/object/agent" title="agent[]">agent[]</a></td>
				<td>A collection of EDM Agent objects. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>aggregations</td>
				<td><a href="/documentation/record.json/response/object/aggregation" title="aggregation[]">aggregation[]</a></td>
				<td>A collection of EDM Aggregation objects. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>europeanaAggregation</td>
				<td><a href="/documentation/record.json/response/object/europeanaAggregation" title="europeanaAggregation[]">europeanaAggregation[]</a></td>
				<td>A collection of EDM europeanaAggregation objects. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>europeanaCollectionName</td>
				<td>array</td>
				<td>A collection of collection identifiers that this record belongs to. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>europeanaCompleteness</td>
				<td>int</td>
				<td>a number (in range of 0-10) representing the metadata quality of the record. Note: the base of calculation will change in the future, so the numbers will change.</td>
			</tr>

			<tr>
				<td>places</td>
				<td><a href="/documentation/record.json/response/object/place" title="place[]">place[]</a></td>
				<td>A collection of EDM Place objects. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>providedCHOs</td>
				<td><a href="/documentation/record.json/response/object/providedCHO" title="providedCHO[]">providedCHO[]</a></td>
				<td>A collection of EDM ProvidedCHO objects. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>proxies</td>
				<td><a href="/documentation/record.json/response/object/proxy" title="proxy[]">proxy[]</a></td>
				<td>A collection proxy objects for EDM ProvidedCHO objects. This is the most important part, because this contains the data provider's metadata. <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>title</td>
				<td><a href="/documentation/record.json/response/object/title" title="title[]">title[]</a></td>
				<td>A collection title objects <span class="todo">more explanation needed - what is this, why would i use it, any online references to it</span></td>
			</tr>

			<tr>
				<td>type</td>
				<td>string</td>
				<td>is the object type (same as the TYPE facet, see there)</td>
			</tr>

		</tbody>

</table>
