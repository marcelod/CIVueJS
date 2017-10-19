<div id="app" class="container">

	<h1><?= $title ?></h1>

	<form class="form-inline">

		<input v-model.number="a" class="form-control"/> <!-- similar ao enter -->

		<select v-model="operator" class="form-control"/>
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>

		<input v-model.number="b" class="form-control" />

	</form>

	<h3>Resultado: {{ a }} {{ operator }} {{ b }} = {{ c }}</h3>

	<hr>

<pre>
{{ $data }}
</pre>

</div>