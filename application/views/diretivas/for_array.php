<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Vamos ouvir algumas histórias!</h2>

	<ul class="list-group">
		<li v-for="story in stories" class="list-group-item">
			Alguém disse "{{ story }}"
		</li>
	</ul>


	<hr>

<pre>
{{ $data }}
</pre>

</div>