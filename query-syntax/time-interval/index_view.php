<h2 id="time-interval-search">time interval search</h2>

	<p>This is a special use of Range Search which is especially useful for looking for records falling into a specific time interval. For example, looking for objects dated by a year between 1525 and 1527 is achieved as follows:</p>
	<p>Another special use of Range Search is useful for spatial queries of objects located in a specific region.</p>
	<p>You can search objects created between two dates by using the DATE facet field, and the range operator</p>
	<p>A note: right now Europeana doesn't normalize dates, which might change in the future. In Lucene/Solr the normalized date field type follows the ISO 8601 date format, which is like in this example: 2013-02-28T10:55Z. This real date format provides quicker search, and additional mathematical operations, so better services from the aspect of Europeana. We will try to be backwards compatible, but there is a chance, that from API user's perpective it will require a change in the applications. We will notify every API registrants beforehead the change, and we will provide suggestions.</p>


	<h3>example</h3>

		<p>find every document having 1525, 1526, and 1527 terms in the YEAR field</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=YEAR:[1525 TO 1527]</pre>
		<p><a href='/search?query=YEAR:[1525 TO 1527]' target="_blank" class="demo">» demo</a></p>
