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

	<navbar></navbar>

	<hr>



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


<template id="Lbar">
	<nav class="level">
		<menu-bar></menu-bar>
	</nav>
</template>

<template id="Imenu">
	<div>
		<p class="level-item has-text-centered">
			<a class="link is-info">Home</a>
		</p>
		<p class="level-item has-text-centered">
			<a class="link is-info">Menu</a>
		</p>
		<p class="level-item has-text-centered">
			<img src="http://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
		</p>
		<p class="level-item has-text-centered">
			<a class="link is-info">Reservations</a>
		</p>
		<p class="level-item has-text-centered">
			<a class="link is-info">Contact</a>
		</p>
	</div>
</template>