<div id="main">

	<navbar></navbar>

	<br><br>

	<div class="container">
		<div class="page-header">

			<h1>{{ title }}</h1>

			<menu-bar :items="[{label: 'A empresa'}, { label: 'Serviços'}]"></menu-bar>

		</div>
	</div>

</div>


<template id="nav">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
				<a class="navbar-brand" href="#">Project name</a>
		</div>
		<!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
		<div id="navbar">

			<menu-bar :items="topNav" @emit-click="getLink"></menu-bar>

			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</template>

<template id="menu">
	<ul class="nav navbar-nav">
		<li v-for="(item, index) in items">
			<a href="#" @click.stop.prevent="emitClick(index)">
				{{ item.label }}
			</a>
		</li>
		<!-- <li class="active"><a href="#">Home</a></li>
		<li></li>
		<li><a href="#contact">Contact</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li class="dropdown-header">Nav header</li>
				<li><a href="#">Separated link</a></li>
				<li><a href="#">One more separated link</a></li>
			</ul>
		</li> -->
	</ul>
</template>