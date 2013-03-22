<h2 id="range-operator">range operator</h2>

	<p>There is one search operator we like to highlight in this document namely range operator: [a TO z]. It will mach any terms between these two including the starting and ending terms as well. You can use it even for textual fields, but the most effective application is when you search for some numeric values, like date ranges, or geographical areas. We discuss two special cases in Time interval search and Geographical bounding box search sections.</p>
	<p class="todo">provide an example of non-special range search</p>


	<h3>example</h3>
	
		<p>find every document having 1525, 1526, and 1527 terms in the YEAR field</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=YEAR:[1525 TO 1527]</pre>
		<p><a href='/search?query=YEAR:[1525 TO 1527]' target="_blank" class="demo">» demo</a></p>


	<h3>example</h3>

		<p>This will find all documents which has a latitude position between 10-12, and longitude position between 1-2.</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=*:*&qf=pl_wgs84_pos_lat:[10 TO 12]&qf=pl_wgs84_pos_long:[1 TO 2]</pre>
		<p><a href='/search?query=*:*&qf=pl_wgs84_pos_lat:[10 TO 12]&qf=pl_wgs84_pos_long:[1 TO 2]' target="_blank" class="demo">» demo</a></p>
