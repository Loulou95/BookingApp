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
    isOpen: false,
    deleteWithSplice: true,
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

    deleteTodo: function(todoId) {
},

    toggle: function(){
        this.isOpen = !this.isOpen
    },

    deleteEnquiry (id){
        console.log('123')
         console.log(id)

         axios.delete('/Enquiries/'+id)

        .then( (response) => {
        //     // handle success
        //delete that.customers[id]
        //that.$set(that.customers, {}, that.customers)

        for (let [index, customer] of this.customers.entries()) {
            if (customer.id === id) {
                this.customers.splice(index, 1)
                this.isOpen = true
            }
        }
        console.log (response.data);
           })

    },




}


})
