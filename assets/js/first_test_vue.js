var vm = new Vue({
  el: '#main',
  data: {
    message: 'Olá Vue!',
    rawHtml: '<h3>Teste com html</h3>',
    user: {
      id: 1,
      name: 'Marcelo'
    },
    linguagens: [
      { name: 'JavaScript' },
      { name: 'PHP' },
      { name: 'CSS' },
      { name: 'Python' },
      { name: 'C++' },
    ],
    image: "https://cdn.pixabay.com/photo/2016/03/05/19/10/airplane-1238277_960_720.jpg",
    altImage: "test vue"

  },
  computed : {
    // uma função "getter" computada (computed getter)
    reversedMessage: function() {
      // `this` aponta para a instância Vue da variável `vm`
      return this.message.split('').reverse().join('')
    },
    now: function() {
      return Date.now()
    }
  },
  methods : {
    mReversedMessage: function() {
      return this.message.split('').reverse().join('')
    },
    mNow: function() {
      return Date.now()
    }
  }
})


