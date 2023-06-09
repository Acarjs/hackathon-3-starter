
<!DOCTYPE html>
<html>
<head>
    <title>Edit Animal</title>
</head>
<body>
    <h1>Edit</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $animal->name }}" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $animal->email }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

