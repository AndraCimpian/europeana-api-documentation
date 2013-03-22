<h2 id="basic-search">basic search</h2>

	<p>To search Europeana simply for objects that contain some term you should provide this term as a query parameter. For example, to look for everything that is related to the famous Leonardo’s painting you need the following:</p>
	<p>Note that like in many search applications omitting the quotes will result in searching for items that contain the term Mona or the term Lisa but not necessarily together an in the needed order.</p>
	<p>If you want to limit your search for a given term to a specific field you should provide the name of the field using the following syntax. For example, looking for objects whose creator is Leonardo da Vinci:</p>
	<p>Note that like in many search applications omitting the quotes will result in searching for items that contain the term Mona or the term Lisa but not necessarily together an in the needed order.</p>	
	<p>If you want to limit your search for a given term to a specific field you should provide the name of the field using the following syntax. For example, looking for objects whose creator is Leonardo da Vinci:</p>
	<p>Looking for several terms in one field requires placing them in parenthesis with spaces in between, as in the following example which looks for records whose creator is one of the Dutch Golden Age maestros:</p>


	<h3>example : simple text search</h3>
	
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query="Mona Lisa"</pre>
		<p><a href='/search?query="Mona Lisa"' target="_blank" class="demo">» demo</a></p>

	
	<h3>example : simple search by field</h3>

		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=who:"Leonardo da Vinci"</pre>
		<p><a href='/search?query=who:"Leonardo da Vinci"' target="_blank" class="demo">» demo</a></p>


	<h3>example : search for several terms in one field</h3>
	
		<i>query parameter: who:"Rembrandt Vermeer Steen"</i>
		<pre class="prettyprint">http://www.europeana.eu/api/v2/search.json?wskey=xxxx&query=who:"Rembrandt Vermeer Steen"</pre>
		<p><a href='/search?query=who:"Rembrandt Vermeer Steen"' target="_blank" class="demo">» demo</a></p>
