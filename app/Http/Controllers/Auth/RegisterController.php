<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    private $mailer;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->middleware('guest');
        $this->mailer = $mailer;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));


        return $this->registered($request, $user)
                        ?: redirect('/news')->with('success', 'Votre compte est désormais crée. Merci de le valider en cliquant sur le lien qui vous a été envoyé par email.');
    }


    public function confirm($user_id, $token){

        $user = User::findOrFail($user_id);
        if($user->confirmation_token == $token){
            $user->confirmation_token = "CONFIRMED";
            $user->confirmed = true;
            $user->save();

            $this->guard()->login($user);
            return redirect('/news')->with('success', "Votre compte a bien été confirmé. Il est désormais en attente d'approbation.");
        }



        
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|alpha',
            'surname' => 'required|string|alpha',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'date_dut' => 'required|string|max:4|alpha_num',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $token = str_random(60);
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'confirmation_token' => $token,
            'password' => bcrypt($data['password']),
            'date_dut' => $data['date_dut'],
        ]);

        $this->mailer->send(['text' => 'emails.register'], compact('token', 'user'), function($message) use ($user){
            $message->to($user->email)->subject('Confirmation de votre compte');
        });

        return $user;
    }
}
