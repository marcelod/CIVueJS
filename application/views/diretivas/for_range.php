<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Tabuada do 7</h2>

	<ul class="list-group">
		<li v-for="i in 11" class="list-group-item">
			7 vezes {{ i-1 }} = {{ (i-1) * 7 }}
		</li>
	</ul>


	<hr>

<pre>
{{ $data }}
</pre>

</div>