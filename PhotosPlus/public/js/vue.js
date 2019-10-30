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
        
        }
    }
})