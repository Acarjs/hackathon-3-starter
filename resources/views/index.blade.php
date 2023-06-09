<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1 class="h1">Search Animals</h1> 
         <main>
        <form class="search-form" action="" method="get">

            <label for="">
                <input type="text" name="search" value="" placeholder="Enter name" >
                <br>
                <br>
            </label>
            <input type="submit" value="search" class="submit-button">

            @if (!empty($animals))
                <div class="results">

                    @foreach ($animals as $animal)

                        <a href="" class="result">
                            <div class="img">
                                <img src="{{ asset('/images/pets/'.$animal->image->path) }}" alt="{{ $animal->name }} photo" />
                            </div>
                            <div>
                                <div class="name">{{ $animal->name }}</div>
                                <div class="type">{{ $animal->breed }} ({{ $animal->species }})</div>
                                @if ($animal->owner)
                                    <div class="owner"><span>Owner: </span> {{ $animal->owner->first_name . ' ' . $animal->owner->surname }}</div>
                                @endif
                            </div>
                        </a>

                    @endforeach

                </div>

                
            @endif

        </form>
    </main>

</body>
</html>