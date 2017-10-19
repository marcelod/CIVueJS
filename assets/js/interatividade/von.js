new Vue({
  el: '#app',
  data: {
	upvotes: 0
  },

  methods: {
  	upvote: function() {
  		this.upvotes++;
  	}
  }
})