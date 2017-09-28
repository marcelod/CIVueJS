
Vue.component('navbar', {
  template: "#Lbar"
});

Vue.component('menu-bar', {
  template: "#Imenu"
});


var vm = new Vue({
  el: '#main',
  data: {
    title: 'Teste Codeigniter + Vue',
    subtitle: 'e para o template será o Bulma',
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
    ],
    firstName: "",
    lastName: "",
    // fullName: "",

  },

  methods : {
    enviar() {
      alert('Enviado!')
    },

    updateUser() {
      console.log('Primeiro nome do usuário alterado com sucesso!');
    }
  },

  computed : {

    fullName() {
      return this.firstName + ' ' + this.lastName;
    },


  },

  watch : {

    firstName(newValue) {
      this.updateUser();
    },

    // lastName(newValue) {
    //   this.fullName = this.firstName + ' ' + newValue;
    // }

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
  },

  // hooks vue.js

  beforeCreate(){
    console.log('beforeCreate');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  },

  created(){
    console.log('created');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  },

  beforeMount(){
    console.log('beforeMount');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  },

  mouted(){
    console.log('mouted');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  },

  beforeUpdate(){
    console.log('beforeUpdate');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  },

  updated(){
    console.log('updated');
    console.log('titulo', this.title);
    console.log('el', this.$el);
  }

})


