<div id="main">
	<h1><?= $title ?></h1>

	<p>Mensagem original: {{ message }}</p>

	<p>Mensagem ao contrário: {{ reversedMessage }}</p>

	<p>Mensagem ao contrário por método: {{ mReversedMessage() }}</p>

	<p>Data: {{ now }}</p>
	<p>Data por método: {{ mNow() }}</p>

	<h4>Diretiva HTML</h4>
	<div v-html="rawHtml"></div>

	<h4>Diretiva if-else</h4>
	<div v-if="user.id != 0">
		{{ user.id }} - {{ user.name }}
	</div>
	<div v-else>
		Nenhum usário
	</div>

	<h4>Diretiva for</h4>
	<ul>
		<li v-for="item in linguagens">
			{{ item.name }}
		</li>
	</ul>

	<h4>Diretiva model</h4>
	<input type="text" v-model="message">

	<h4>Diretiva bind</h4>
	<p>Para se usar a diretiva v-bind pode escrever o "v-bind:[atributo]" ou ":[atributo]"</p>
	<img v-bind:src="image" :alt="altImage" width="100px" height="100px">

	<h4>Outros exemplos</h4>

	<ul>
		<li><a href="bulma">Bulma</a></li>
		<li><a href="bootstrap">Bootstrap</a></li>
	</ul>

</div>