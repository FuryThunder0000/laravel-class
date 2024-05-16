<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      @if (session('error'))
      <div style="color:red;">
            <span>{{ session('error') }}</span>
      </div>
      @endif
      <form action="{{route('page_secret')}}" method="post">
            @csrf
            @method('POST')
            <label for="">Votre Age: </label>
            <br>
            <input type="text" name="age">
            <br>
            <button type="submit">Envoyer</button>
      </form>
</body>

</html>