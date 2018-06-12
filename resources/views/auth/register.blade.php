@extends('theme_iutmetz')

@section('content')
<div class="container">


                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                            <p><strong>Nom</p></strong>


                                <p><input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus><p></p>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <p><strong>{{ $errors->first('name') }}</strong></p>
                                    </span>
                                @endif

                                <p><strong>Prénom</p></strong>


                                <p><input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required><p></p>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <p><strong>{{ $errors->first('surname') }}</strong></p>
                                    </span>
                                @endif



                            <p><strong>Email</p></strong>


                                <p><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required></p>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p><strong>{{ $errors->first('email') }}</strong></p>
                                    </span>
                                @endif




                            <p><strong>Mot de passe</p></strong>


                                <p><input id="password" type="password" class="form-control" name="password" required></p>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <p><strong>{{ $errors->first('password') }}</strong></p>
                                    </span>
                                @endif




                            <p><strong>Confirmation</p></strong>


                                <p><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></p>

<p><strong>Année d'obtention du DUT</p></strong>

                                <p><input id="date_dut" type="text" class="form-control" name="date_dut" value="{{ old('date_dut') }}" required><p></p>

                                @if ($errors->has('date_dut'))
                                    <span class="help-block">
                                        <p><strong>{{ $errors->first('date_dut') }}</strong></p>
                                    </span>
                                @endif


<p>
                                <button type="submit" class="btn btn-primary">
                                    S'inscrire
                                </button>
</p>

                    </form>
</div>
@endsection
