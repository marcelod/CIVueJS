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
    },
    users: [
      { name: 'Marcelo Diniz' },
      { name: 'Vanessa Cicolani' },
      { name: 'Thomas Cicolani Diniz' }
    ]

  },

  methods : {
    enviar() {
      alert('Enviado!')
    },
  },

  filters: {
    toUpperCase(str) {
      return str.toUpperCase();
    },

    truncate(str, length) {
      if (str.length > length) {
        return str.substring(0, length) + ' ...';
      }

      return str;
    }
  }

})


