<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Vamos ouvir algumas histórias!</h2>

	<ul class="list-group">
		<li v-for="(story, index) in stories" class="list-group-item">
			{{ index }}. {{ story.writer }} disse {{ story.plot }}
		</li>
	</ul>


	<hr>

<pre>
{{ $data }}
</pre>

</div>