require('./bootstrap');

import Vue from 'vue';

const app = new Vue({
    el: '#app',
    data: {
        bikes: []
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/bikes')
          .then(response => {
            console.log(response.data);
            this.bikes = response.data;
          })
          .catch(error => {
            console.log(error);
          })
    }
});