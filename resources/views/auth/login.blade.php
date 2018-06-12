@extends('theme_iutmetz')

@section('content')
<div class="container">
<h2>Connexion</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


                            <p><strong>Adresse Email</strong></p>


                                <p><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus></p>

                                @if ($errors->has('email'))
                                    <p>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif



                            <p><strong>Mot de Passe</strong></p>


                                <p><input id="password" type="password" class="form-control" name="password" required></p>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif







                                <p><button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a></p>

                    </form>
                </div>

@endsection
