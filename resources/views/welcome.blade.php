<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->

    </head>
    <body>

        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">stazione_di_partenza</th>
                    <th scope="col">stazione_di_destinazione</th>
                    <th scope="col">binario_di_partenza</th>
                    <th scope="col">tipo_di_treno</th>
                    <th scope="col">prezzo_biglietto</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($trains as $element)

                        <tr>
                            <th scope="row">{{$element->id}}</th>
                            <td>{{$element->stazione_di_partenza}}</td>
                            <td>{{$element->stazione_di_destinazione}}</td>
                            <td>{{$element->binario_di_partenza}}</td>
                            <td>{{$element->tipo_di_treno}}</td>
                            <td>{{$element->prezzo_biglietto}}</td>
                        </tr>

                    @endforeach

                </tbody>
              </table>
        </div>

        <script src=" {{ asset('js/app.js') }} "></script>
    </body>
</html>
