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
    <div id="app">

        <form  v-if="!customer.id">
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
            <label for="date">Choose a date for your meeting:</label>
            <input  id="date" type="date" v-model="date"></input><br>
        </p>

        <label for="time">Choose a time for your meeting:</label>

        <input type="time" id="time" min="9:00" max="18:00" v-model="time">

        <p>
            <button @click.prevent="checkForm" value="Submit">Submit</button>
        </p>


    </form>

    <div v-if="customer.id">

      <p> Hi @{{customer.name}}, Your apointment has been booked!</p>

    </div>
</div>

<script src="{{mix("calender.js")}}"></script>
  </body>

</html>
