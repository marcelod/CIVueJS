<div id="main">

	<navbar></navbar>

	<br><br>

	<div class="container">
		<div class="page-header">

			<h1>{{ title }}</h1>

		</div>

		<panel>
			<div class="panel-heading" slot="title">
		    	<h3 class="panel-title">Usuários</h3>
		  	</div>
		  	<template slot=body>
			  	<div class="panel-body" slot="body">

		    		<button class="btn btn-success" @click.stop.prevent="getUsers()">Lista usuários por mixin - ajax (resource)</button>

					<br><br>

					<div v-if="response.status == 'error'" class="alert alert-danger">{{ response.msg }}</div>

					<div v-if="loader.users" class="alert alert-info">Carregando usuários</div>

		    		<ul class="list-group">
		    			<li class="list-group-item" v-for="user in users">
		    				{{ '[' + user.id + '] ' + user.name + ' - ' + user.email }}
		    			</li>
		    		</ul>
		  		</div>
		  	</template>
		</panel>

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
	</ul>
</template>


<template id="panel">
	<div class="panel panel-default">
		<slot name="title"></slot>
		<slot name="body"></slot>
	</div>
</template>