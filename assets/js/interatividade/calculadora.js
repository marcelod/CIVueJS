new Vue({
  el: '#app',
  data: {
	a: 0,
	b: 0,
	c: 0,
	operator: '+'
  },

  methods: {
  	calculate: function() {
  		switch (this.operator) {
			case "+":
				this.c = this.a + this.b
				break;

			case "-":
				this.c = this.a - this.b
				break;

			case "*":
				this.c = this.a * this.b
				break;

			case "/":
				this.c = this.a / this.b
				break;
		}
  	}
  }
})