
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



Vue.component('input-form', {
  template: '#form',

  data() {
    return {
      title: '',
    }
  },

  methods: {
    submit() {
      this.$eventHub.$emit('submit', this.title);
    }
  }
});

Vue.component('my-list', {
  template: '#list',

  created() {

    var vm = this;

    this.$eventHub.$on('submit', function(title) {

      if (title) {
        vm.list.push({ title: title});
      }

    });
  },

  data() {
    return {
      list: [
        { title: 'Buscar o Thomas' },
      ]
    }
  }
});

Vue.component('panel', {
  template: '#panel'
});


// var eventBus = new Vue();
Vue.prototype.$eventHub = new Vue();

var my_mixin = {
  methods: {
    getUsers() {
      console.log('getUsers a');
    }
  }
}


var vm = new Vue({
  el: '#main',

  mixins: [my_mixin],

  data: {
    title: 'Teste Codeigniter + Vue',
  },

});


