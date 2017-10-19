<div id="app" class="container">

	<h1><?= $title ?></h1>

	<button class="btn btn-block btn-lg btn-primary" v-on:click="upvote">
		Upvote! {{ upvotes }}
	</button>

	<hr>

<pre>
{{ $data }}
</pre>

</div>