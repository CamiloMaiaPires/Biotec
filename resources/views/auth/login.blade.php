     <!doctype html>
      <html lang="pt-br">
        <head>
       
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
          <link rel="stylesheet" href="../css/estilo.css"/>
           <link rel="stylesheet" href="../css/login.css"/>
      
          <title>Login - Biotecnologia</title>
        </head>
        <body>
          <div class="container" id="login">
            <center>
              <h4>Login - Biotecnologia Unifesp</h4>
              <img src="../img/logobiotec_transparente.png", width="70%", height="auto"/>
            </center>
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-group">
                <label for="email"  value="{{ __('Email') }}">Email:</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">  
                @if($errors->has('email'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
              <div class="form-group">
                <label for="password" value="{{ __('Password') }}">Senha:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
                @if($errors->has('password'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
              <center>
                <button type="submit" class="btn btn-success">{{ __('Login') }}</button>
              </center>
            </form>
          </div>
      
          
            <script src="{{asset('site/jquery.js')}}"></script>
            <script src="{{asset('site/bootstrap.js')}}"></script>
        </body>
    </html>