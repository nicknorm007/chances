require('./bootstrap');

const app = new Vue({
    el: '#app',
    data: {
        message: '',
        selected: ''
    },
    methods: {
        doSubmit: function (event) {
            alert(this.selected);

        }
    }
})
