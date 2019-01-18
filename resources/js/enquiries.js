import Vue from 'vue'
import axios from 'axios';

var app = new Vue({
  el: '#app',
  data: {

    name: null,
    number: null,
    time: null,
    date: null,
    customers: {},
    clients: {},
    submitted: false,
    isHidden: false,
    isOpen: false
 },

mounted() {
    this.getAllEnquiries();
},



methods: {

    getAllEnquiries (){
          let that = this;
          axios.get('/Enquiries/getall')

          .then(function (response) {
          // handle success
          console.log (response.data);
          that.customers = response.data;
        })

        .catch(function (error) {
          // handle error

          console.log(error);
        })

        .then(function () {
          // always executed
        });

    },

    toggle: function(){
        this.isOpen = !this.isOpen
    },

    deleteEnquiry (id){
        console.log('123')
         console.log(id)
         axios.delete('/Enquiries/'+id)
        .then(function (response) {
        //     // handle success
        console.log (response.data);
           })

    },




}


})
