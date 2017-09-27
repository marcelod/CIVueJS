var vm = new Vue({
  el: '#main',
  data: {
    title: 'Teste Codeigniter + Vue + Bulma',
    btnClassA : {
      'button is-dark' : true,
      'is-small' : true,
      'is-outlined' : true,
      'is-inverted' : true,
      'is-outlined' : false,
    },
    btnClassB : {
      'button is-primary' : true,
      'is-medium' : false,
      'is-outlined' : false,
      'is-inverted' : false,
      'is-outlined' : true,
    },
    btnClassC : {
      'button is-success' : true,
      'is-large' : true,
      'is-outlined' : true,
      'is-inverted' : true,
      'is-outlined' : false,
    }
  },
  methods : {
    enviar() {
      alert('Enviado!')
    },
    // mNow: function() {
    //   return Date.now()
    // }

  }
    /*message: 'Olá Vue!',
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
  */
})


