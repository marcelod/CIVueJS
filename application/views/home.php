<div id="main">
	<h1><?= $a ?></h1>

	<p>Mensagem original: {{ message }}</p>

	<p>Mensagem ao contrário: {{ reversedMessage }}</p>

	<p>Mensagem ao contrário por método: {{ mReversedMessage() }}</p>

	<p>Data: {{ now }}</p>
	<p>Data por método: {{ mNow() }}</p>

	<div v-html="rawHtml"></div>

</div>