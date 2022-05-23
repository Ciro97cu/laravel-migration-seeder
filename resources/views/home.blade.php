<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
</head>
<body>
    
    @forelse ($arrayTrains as $train)
        <h3>{{$train->azienda}}</h3>
        <p>Stazione di partenza: {{$train->stazione_di_partenza}}</p>
        <p>Stazione di partenza: {{$train->stazione_di_arrivo}}</p>
        <p>Data di partenza: {{$train->getData()}}</p>
        <p>Orario di partenza: {{$train->orario_di_partenza}}</p>
        <p>Orario di arrivo: {{$train->orario_di_arrivo}}</p>
        
    @empty
        Nessun Treno in partenza nella data odierna
    @endforelse

</body>
</html>