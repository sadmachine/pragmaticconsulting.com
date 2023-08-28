window.Vue = require("vue");

Vue.component("link-list", require("./components/link-list.vue"));
Vue.component("li-link", require("./components/li-link.vue"));

var app = new Vue({
    el: "#app"
});

export { app };
