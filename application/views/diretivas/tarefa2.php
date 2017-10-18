<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Este sou eu!!!</h2>

	<ul class="list-group">
		<li v-for="(me, key, index) in about_me" class="list-group-item">
			{{ index }}: {{ key }} = {{ me }}
		</li>
	</ul>


	<hr>

<pre>
{{ $data }}
</pre>

</div>