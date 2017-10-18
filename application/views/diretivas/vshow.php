<div id="app">

	<h1><?= $title ?></h1>

	<h2 v-show="!message">You must send a message for help!</h2>

	<textarea class="form-control" v-model="message"></textarea>

	<button class="btn btn-default" v-show="message">
		Send word to allies for help!
	</button>

	<hr>

<pre>
{{ $data }}
</pre>

</div>