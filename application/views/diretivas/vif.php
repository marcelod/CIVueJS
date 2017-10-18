<div id="app">

	<h1><?= $title ?></h1>

	<template v-if="!message">
		<h2>You must send a message for help!</h2>
		<p>Dispatch a messenger immediately!</p>
		<p>To nearby kingdom of Hearts!</p>
	</template>

	<textarea class="form-control" v-model="message"></textarea>

	<button class="btn btn-default" v-if="message">
		Send word to allies for help!
	</button>

	<hr>

<pre>
{{ $data }}
</pre>

</div>