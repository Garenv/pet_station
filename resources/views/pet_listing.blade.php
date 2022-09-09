<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pet Listing</title>

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

            .petListing {
                text-align: center;
            }
        </style>
    </head>

    <body class="antialiased">
        <h1 class="petListing">Pet Listing</h1>
        <br>

        <form>

        </form>

        <div class="container">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Pet Name</th>
                        <th>Pet Age</th>
                        <th>Breed</th>
                    </tr>
                </thead>

            <tbody class="row_num">
                @foreach($petListing as $petList)
                    <tr>
                        <td><a href="{{ route('pet_detail', $petList->id) }}">{{ $petList->pet_name }}</a></td>
                        <td>{{ \Carbon\Carbon::parse($petList->pet_date_of_birth)->diff(\Carbon\Carbon::now())->y }}</td>
                        <td>{{ $petList->breed_name }}</td>
                    </tr>
                @endforeach
            </tbody>

            </table>
            {{-- Using the Bootstrap 5 paginator defined in AppServiceProvider.php --}}
            {{ $petListing->links() }}
        </div>
    </body>
</html>
