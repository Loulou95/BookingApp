<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

  </head>
  <!-- Styles -->
  <style>
    input {
      margin: 0 0 10px 0;
    }

    body {
      text-align: center;
    }

  </style>

<body>
    <h1>The Barbers Shop</h1><br>

    <div id="app">

        <h3 v-if="!submitted">Book an Appointment</h3><br>

        <form  v-if="!customer.id && !submitted">

            {{ csrf_field()}}

            <p v-if="errors.length">

                <b>Please correct the following error(s):</b>

                <ul>

                    <li v-for="error in errors">@{{ error }}</li>

                </ul>

            </p>

            <p>

                <label for="name">Name:</label>

                <input type="text" name="name" id="name" v-model="name">
            </p>

            <p>

                <label for="number">Number:</label>

                <input type="text" name="number" id="number" v-model="number">

            </p>

            <p>

                <label for="date">Choose a date for your appointment:</label>

                <input  id="date" type="date" v-model="date"></input><br>

            </p>

                <label for="time">Choose a time for your meeting:</label>

                <input type="time" id="time" min="9:00" max="18:00" v-model="time">

            <p>

                <button @click.prevent="checkForm" value="Submit">Submit</button>

            </p>

    </form>


    <div v-if="customer.id">

        <div>
            Hi @{{customer.name}}, your Appointment has now been booked on the <b>@{{date}}</b>!<br>
            You will receive a message soon to confirm your booking!

        </div><br>

        <button onClick="location.href='{{ url('booking') }}'">Book New Appointmet</button>

    </div>

</div>



<script src="{{mix("calender.js")}}"></script>

</body>

</html>
