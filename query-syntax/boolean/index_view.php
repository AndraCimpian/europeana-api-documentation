<h2 id="boolean-search">boolean search</h2>

	<p>To combine several fields in one search you can use boolean operators AND, OR, and NOT (note the case-sensitivity). Use parentheses to group logical conditions.  Note that two consecutive terms without any boolean operator in between default to the AND operator so the following examples are equivalent:</p>
	<p>Boolean operators can also be used with search by fields. The following example illustrates search for objects whose location is in Paris or in London:</p>
	<p>The boolean NOT operator cannot be used alone but only in conjunction with another boolean operator. For example, looking for objects which contain the term lisa but do not contain the term mona is done by the following:</p>
	<p class="todo">provide an example of fielded search with boolean operators</p>


	<h3>example : boolean operator AND</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=mona AND lisa</pre>
		<p><a href='/search?query=mona AND lisa' target="_blank" class="demo">» demo</a></p>


	<h3>example : boolean operator with search by field</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=where: (Paris OR London)</pre>
		<p><a href='/search?query=where: (Paris OR London)' target="_blank" class="demo">» demo</a></p>


	<h3>example : boolean NOT operator</h3>
	
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=lisa NOT mona</pre>
		<p><a href='/search?query=lisa NOT mona' target="_blank" class="demo">» demo</a></p>
