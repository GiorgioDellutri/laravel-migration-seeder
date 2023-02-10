<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-4 p-3 dflex ">
                        <div class="card p-4">
                            <h3>Compagnia ferroviaria: {{ $train->azienda }}</h3>
                            <p>Stazione di partenza: {{ $train->stazione_di_partenza }}</p>
                            <p>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</p>
                            <p>Orario di partenza: {{ $train->orario_di_partenza }}</p>
                            <p>Orario di arrivo: {{ $train->orario_di_arrivo }}</p>
                            <p>Codice treno: {{ $train->codice_treno }}</p>
                            <p>Numero di carrozze: {{ $train->numero_di_carrozze }}</p>
                            <p>Treno in orario: {{ $train->in_orario ? 'No' : 'Si' }}</p>
                            <p>Cancellato: {{ $train->cancellato ? 'No' : 'Si' }}</p>
                        </div>
                    </div>
                @empty
                    <p>Non ci sono treni da mostrare</p>
                @endforelse
            </div>
        </div>
    </main>
</body>

</html>
