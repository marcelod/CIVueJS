<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Votação de Prefeitos</h2>

	<ul class="list-group">
		<li v-for="candidate in candidates" class="list-group-item">
			{{ candidate.name }} - {{ candidate.votes }}
			<button class="btn btn-default btn-sm" @click="candidate.votes++">
				Votar
			</button>
		</li>
	</ul>

	<input @keyup.delete="clear" class="form-control" placeholder="Tecle `delete` para zerar os votos" />

	<h2>Prefeito com mais votos: {{ mayor.name }}!</h2>


	<hr>

<pre>
{{ $data }}
</pre>

</div>