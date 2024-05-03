<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/create_playlist.css')}}">
</head>
<body>
    <main>
    <form action={{route('playlist.add')}} method="POST" class="create_container">
        @csrf
        @method('POST')
        <p class="create_text">Ponle nombre a tu playlist</p>
        <input type="text" name="nombre" class="create_input" placeholder="Mi Playlist #xx" value="Mi Playlist">
        <input type="text" name="usuario"  value="{{$idUsuario}}" hidden>
        <div class="buttons_container">
            <a href={{route('library.obtener', ['idUser'=>$idUsuario])}} class="btn_cancel">Cancelar</a>
            <button type="submit" class="btn_create">Crear</button>
        </div>
    </form>
    </main>
</body>
</html>