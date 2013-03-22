<h2 id="refinement-search">refinement search</h2>

	<p>Refining a search can be achieved by adding the terms to the normal query parameter, but using the refinement facet gives a opportunity to keep it separate from the normal query and these refinements will be included into the breadcrumb. If you want to build an application which applies the same filters (fielded search) for all queries (for example you build an agricultural portal, and you want to select only those records from Europeana, which has some relation with agriculture), you'd better put the non variable part into qf parameter, because those queries are reusable in next queries. If you put an AND between the user entered term, and your invariant query part, it will always run a brand new search, and doesn't use the reusable part. The qf parameter is repeatable, so you can use it multiple times with different filters.</p>
	<p class="todo">add explanation</p>


	<h3>searching for “paris” and filtering on the term “bible”</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=text:bible</pre>
		<p><a href='/search?query=query=paris&qf=text:bible' target="_blank" class="demo">» demo</a></p>


	<h3>more then one refinement term is possible; adding the refinement “latin”</h3>
	
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=text:bible&qf=text:latin</pre>
		<p><a href='/search?query=query=paris&qf=text:bible&qf=text:latin' target="_blank" class="demo">» demo</a></p>


	<h3>or exclude “latin” from the search results</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=paris&qf=text:bible&qf=-text:latin</pre>
		<p><a href='/search?query=query=paris&qf=text:bible&qf=-text:latin' target="_blank" class="demo">» demo</a></p>