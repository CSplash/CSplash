const vm = new Vue({
    el: "#app",
    data: {a: 10},
    watch: {
      a: function(v) {
        document.querySelector("body").style.fontSize = `${v * 2}px`
      },
    },
  })