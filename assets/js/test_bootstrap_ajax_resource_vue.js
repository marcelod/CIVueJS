
Vue.component('navbar', {
  template: "#nav",
  data() {
    return {
      topNav: [{ label: 'Home' }, { label: 'About' }, { label: 'Contact' }]
    }
  },

  methods: {
    getLink(index) {
      alert(this.topNav[index].label);
    }
  }
});

Vue.component('menu-bar', {
  template: "#menu",
  props: {
    items: {
      type: Array,
      required: true
    }
  },

  methods: {
    emitClick(index) {
      this.$emit('emit-click', index);
    }
  }
});

Vue.component('panel', {
  template: '#panel'
});

var my_mixin = {
  methods: {
    getUsers() {

      this.loader.users = true;

      var url = 'http://jsonplaceholder.typicode.com/users';

      this.$http.get(url)
        .then(function(r) {
          this.users = r.body;
        }, function(error) {
          this.response.status = 'error';
        })
        .finally(function() {
          this.loader.users = false;
        });
    }
  }
}


var vm = new Vue({
  el: '#main',

  mixins: [my_mixin],

  data: {
    title: 'Teste Codeigniter + Vue + Ajax (vue-resource)',
    users: [],
    loader: {
      users: false,
    },
    response: {
      msg: 'Página não encontrada',
      status: '',
    }
  },

});

