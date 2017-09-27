<div id="main">
	<h1>{{ title }}</h1>

	<button :class="btnClassA" v-on:click.prevent.stop="enviar()">Botão A</button>
	<button :class="btnClassB" @click.prevent.stop="enviar()">Botão B</button>
	<button :class="btnClassC">Botão C</button>

	<hr>

	<ul>
		<li v-for="user in users">
			{{ user.name | toUpperCase | truncate(7) }}
		</li>
	</ul>

</div>