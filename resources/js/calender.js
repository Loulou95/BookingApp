import Vue from 'vue'
import axios from 'axios';

var app = new Vue({
  el: '#app',
  data: {
    errors: [],
    name: null,
    number: null,
    time: null,
    date: null,
    customer: {}
  },

  methods:{
    checkForm: function(e) {
     this.errors = [];

      if (!this.name) {
        this.errors.push('Name required.');
      }

      console.log(this.date)
      if (!this.number) {
        this.errors.push('Number required.');

      }

      if (this.date == null) {
        this.errors.push('Please select a date.');
      }

      if (!this.time) {
        this.errors.push('Please select a time.');
    }

    if (this.errors.length) {
       e.preventDefault();
       return false;

    }

        console.log('123');
        axios.post('/Storebooking', {
            name: this.name,
            number: this.number,
            time: this.time,
            date: this.date
        })
        .then((response) => {
            console.log('1');
            console.log(response);
            this.customer = response.data;
            //window.location.href = "/SuccessPage";
          })
          .catch(function (error) {
              console.log()
            console.log(error);

          });


      e.preventDefault();


  },


  }
})
