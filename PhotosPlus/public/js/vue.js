// main.js
import Vue from "vue"
import VueSimpleAlert from "vue-simple-alert";

Vue.use(VueSimpleAlert);

var demo = new Vue({
    el: '#main',

    data: {
        show_tooltip: false,
        text_content: 'Edit me.'
    },

    methods: {
        hideTooltip: function(){
            this.show_tooltip = false;
        },
        toggleTooltip: function(){
            this.show_tooltip = !this.show_tooltip;
        }
    }
})