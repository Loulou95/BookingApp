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
    customer: {},
    clients: {},
    submitted: false,
    isHidden: false,
    isOpen: false
 },

mounted() {
    this.getAllEnquiries();
  },

  methods:{
    checkForm: function(e) {
        this.errors = [];
     if (!this.name) {
         this.errors.push('Name required.');
    }

      console.log(this.date)

      var val = number.value
      if (/^\d{11}$/.test(val)) {
    // value is ok, use it
     } else {
         alert("Invalid number; Please double check!")
         number.focus()
         return false
    }

      if (this.date == null) {
        this.errors.push('Please select a date.');
    }

      if (!this.time) {
        this.errors.push('Please select a time.')
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
            this.submitted = true;

            //window.location.href = "/Enquiries/";
          })

          .catch(function (error) {
              console.log();

              console.log(error);

        });

          e.preventDefault();

      },

      getAllEnquiries () {
      let that = this;
      axios.get('/Enquiries/getall')

      .then(function (response) {
      // handle success
      console.log (response.data);
      that.clients = response.data;
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

        delete (id){
            console.log(id)
            axios.delete('/Enquiries/'+id)
            .then(function (response) {
    // handle success
    console.log (response.data);
   })

}
}

})
