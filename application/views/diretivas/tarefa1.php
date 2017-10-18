<div id="app">

	<h1><?= $title ?></h1>

	<div v-if="gender == 'male' || gender == 'female'">
		<h1>Olá,

			<span v-if="gender == 'male'"> Senhor {{ name }} </span>
			<span v-else> Senhora {{ name }} </span>

		</h1>
	</div>

	<div v-else><h2>Então você não pode decidir. Bem!</h2></div>

	<div class="form-group">
	    <label for="gender">Selecione seu genero:</label>
		<select v-model="gender" class="form-control" id="gender" name="gender">
			<option value="male">Masculino</option>
			<option value="female">Feminino</option>
		</select>
	</div>

	<div class="form-group">
	    <label for="name">Diga seu nome:</label>
		<input class="form-control" v-model="name" id="name" name="name" />
	</div>

	<hr>

<pre>
{{ $data }}
</pre>

</div>