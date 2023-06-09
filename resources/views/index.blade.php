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

</body>
</html>