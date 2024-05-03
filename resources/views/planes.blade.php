<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
    <body>
        <main>
            <div class="login_container">
                <h2>Mejora tu plan</h2>
                <img src="{{asset('img/login_listen.png')}}" alt="escuchando musica" id="login_illustration">
                <hr>
                <form action={{route('pagos.pagar')}} method="POST" class="form">
                    @csrf
                    @method('POST')
                    <div class="form_section">
                        <label for="">Selecciona tu plan</label>
                        <select name="idPlan" id="select_plan">
                            @foreach ($planes as $plan)
                            @if ($plan->idPlan !=4)
                            <option value="{{$plan->idPlan}}">{{$plan->nombre_plan}} • {{$plan->precio}}</option> 
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form_section">
                            <label for="">Nombre de titular</label>
                            <input name="titular" type="text" placeholder="Nombre de titular">
                    </div>
                    <div class="form_section">
                        <label for="">Numero de tarjeta</label>
                        <input name="tarjeta" type="text" maxlength="16" placeholder="Ingrese su tarjeta">
                    </div>
                    <div class="form_section">
                        <label for="">Fecha de expiracion</label>
                        <input name="fechaexp" type="date" maxlength="3" placeholder="Ingrese su contrasena">
                    </div>
                    <div class="form_section">
                        <label for="">Codigo de seguridad (CVV)</label>
                        <input name="cvv" type="text" maxlength="3" placeholder="Ingrese su contrasena">
                    </div>
                    <div class="form_section">
                        <input name="idUsuario" type="text" value="{{$idUsuario}}" hidden>
                    </div>
                    <button class="form_button">
                        Actualizar Plan
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>
