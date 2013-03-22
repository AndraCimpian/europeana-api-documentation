<h2 id="spatial-range-search">spatial range search</h2>

	<p>You can search for geographic location by specifying the bounded box of the area. You have to use the range operator and pl_wgs84_pos_lat (latitude position) and pl_wgs84_pos_long (longitude position) fields.</p>

	<h3>example</h3>

		<p>This will find all documents which has a latitude position between 10-12, and longitude position between 1-2.</p>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=*:*&qf=pl_wgs84_pos_lat:[10 TO 12]&qf=pl_wgs84_pos_long:[1 TO 2]</pre>
		<p><a href='/search?query=*:*&qf=pl_wgs84_pos_lat:[10 TO 12]&qf=pl_wgs84_pos_long:[1 TO 2]' target="_blank" class="demo">» demo</a></p>
