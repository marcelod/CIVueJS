new Vue({
  el: '#app',
  data: {
	a: 1,
	b: 2,
	operator: '+'
  },

  computed: {
  	c: function() {
  		switch (this.operator) {
			case "+":
				return this.a + this.b
				break;

			case "-":
				return this.a - this.b
				break;

			case "*":
				return this.a * this.b
				break;

			case "/":
				return this.a / this.b
				break;
		}
  	}
  }
})