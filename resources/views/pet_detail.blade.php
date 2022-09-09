<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pet Detail</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .petDetailTitle {
                text-align: center;
            }

            .backBtn {
                margin-top: 1rem;
            }
        </style>
    </head>

    <body class="antialiased">
        <div class="container">
            <button class="btn btn-primary backBtn" onclick="window.history.back()">Back</button>

            <h1 class="petDetailTitle">Pet Detail</h1>

            <br>

            <h2><u>Pet Name</u> - {{ $petDetail->pet_name}}</h2>
            <h2><u>Pet D.O.B</u> - {{ $petDetail->pet_date_of_birth }}</h2>
            <h2><u>Pet Age</u> - {{ $petDetail->pet_age }}</h2>
            <h2><u>Breed Name</u> - {{ $petDetail->breed_name }}</h2>
            <h2><u>Breed Description</u> - {{ $petDetail->breed_description }}</h2>
            <h2><u>Owner Name</u> - {{ $petDetail->owner_name }}</h2>
        </div>
    </body>
</html>
