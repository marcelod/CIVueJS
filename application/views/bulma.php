<div id="main">
	<h1>{{ title }}</h1>

	<button :class="btnClassA" v-on:click.prevent.stop="enviar()">Botão A</button>
	<button :class="btnClassB" @click.prevent.stop="enviar()">Botão B</button>
	<button :class="btnClassC">Botão C</button>

</div>