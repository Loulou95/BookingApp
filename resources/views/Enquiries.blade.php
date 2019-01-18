<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

  </head>
  <!-- Styles -->
<body>

    <h1> The Barbers Shop</h1>

    <div id="app">

    <div>
        <p v-if="isOpen"></p>
        <p><button type="button" class="btn" v-on:click="isOpen = !isOpen">All New Appointments</button>

            <div v-if="isOpen">


                <h3> Here are all your new appointments!</h3>

                <ul v-for="customer in customers" class="clients">
                    <li>@{{customer.name}}</li>
                    <li>@{{customer.number}}</li>
                    <li>@{{customer.AppointmentTimeDate}}</li>

                    <button type="button" @click="deleteEnquiry(customer.id)">Delete</button>

                    <button id="btn">Contact @{{customer.name}}</button><br>

                </ul>






            </div>

    </div>

 </div>

<script src="{{mix("enquiries.js")}}"></script>

</body>

</html>

<style>
body{
    item-align: center;
    padding: 32px 35px 34px 40px;
    line-height: 1.6;

}
.info{
padding: 32px 35px 34px 40px;
line-height: 1.6;
}
</style>
