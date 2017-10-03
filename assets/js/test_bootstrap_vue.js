
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


var vm = new Vue({
  el: '#main',

  data: {
    title: 'Teste Codeigniter + Vue',
  }

})


