<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Search Animals</h1>
    <form action="" method="GET">
        <label for="animal">Animal</label>
        <input type="text" name="search" id="animal" value="" >
        <input type="submit">
    </form>

     <ul>
  @foreach ($animals as $animal)
     
        <li> {{$animal->name }} </li>
      
  @endforeach
</ul>

{{-- <body>
    <h1>Search Animals</h1>
    <form action="{{ route('admin.index') }}" method="GET">
        <label for="animal">Animal</label>
        <input type="text" name="search" id="animal" value="{{ request('search') }}">
        <input type="submit">
    </form>

    <br><br><br>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @foreach ($animals as $animal)
        <div>
            <h2>{{ $animal->name }}</h2>
            <p>Email: {{ $animal->email }}</p>
            <a href="{{ route('admin.show', $animal->id) }}">View</a><br>
            <a href="{{ route('admin.edit', $animal->id) }}">Edit</a><br>
            <form action="{{ route('admin.destroy', $animal->id) }}" method="POST">
                @csrf
                @method('DELETE') <br>
                <button type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach --}}
   
    
</body>
</html>