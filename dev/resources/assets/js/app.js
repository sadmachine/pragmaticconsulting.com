/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("link-list", require("./components/link-list.vue"));
Vue.component("li-link", require("./components/li-link.vue"));

var app = new Vue({
    el: "#app",
    mounted: function() {
        // This function programmatically adds the script that generates the twitter feed on the "news-and-events" page
        // This has to be done after Vue has been mounted to avoid warnings from vue about script tags within the app
        if (document.getElementById("twitter_feed")) {
            let twitter_feed_script = document.createElement("script");
            twitter_feed_script.setAttribute(
                "src",
                "https://platform.twitter.com/widgets.js"
            );
            twitter_feed_script.setAttribute("charset", "utf-8");
            document
                .getElementById("twitter_feed")
                .appendChild(twitter_feed_script);
        }
    }
});
