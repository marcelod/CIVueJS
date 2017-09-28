<div id="main" class="container is-fullhd" >
	<section class="hero is-success">
		<div class="hero-body">
			<div class="container">
		  		<h1 class="title">
		    		{{ title }}
		  		</h1>
		  		<h2 class="subtitle">
		    		{{ subtitle }}
		  		</h2>
			</div>
		</div>
	</section>

	<hr>

	<menu-bar></menu-bar>

	<button :class="btnClassA" v-on:click.prevent.stop="enviar()">Botão A</button>
	<button :class="btnClassB" @click.prevent.stop="enviar()">Botão B</button>
	<button :class="btnClassC">Botão C</button>

	<hr>

	<ul>
		<li v-for="user in users">
			{{ user.name | toUpperCase | truncate(7) }}
		</li>
	</ul>

	<hr>

	<h3>Computed & Watch</h3>

	<p>{{ fullName }}</p>

</div>

<template id="menuC">
	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
	</ul>
</template>