<div id="app" class="container">

	<h1><?= $title ?></h1>

	<h2>Insira os números nos campos e escolha a operação.</h2>

	<form class="form-inline">

		<input v-model.number="a" class="form-control" @keyup.13="calculate" /> <!-- similar ao enter -->

		<select v-model="operator" class="form-control" @keyup.tab="calculate" />
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>

		<input v-model.number="b" class="form-control" @keyup.enter="calculate" />

		<button type="submit" @click.prevent="calculate" class="btn btn-primary">
			Calcular
		</button>

	</form>

	<h3>Resultado: {{ a }} {{ operator }} {{ b }} = {{ c }}</h3>

	<hr>

<pre>
{{ $data }}
</pre>

</div>