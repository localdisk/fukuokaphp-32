<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;
use InvalidArgumentException;
use Livewire\Component;
use Throwable;

class PasswordResetForm extends Component
{
    /** @var string */
    public string $token = '';

    /** @var string */
    public string $email = '';

    /** @var string */
    public string $password = '';

    /** @var string */
    public string $password_confirmation = '';

    /**
     * mount component.
     * @param string $token
     * @return void
     * @throws BindingResolutionException
     */
    public function mount(string $token): void
    {
        $this->token = $token;
        $this->email = request('email');
    }

    /**
     * reset password.
     *
     * @return RedirectResponse
     * @throws Throwable
     * @throws InvalidArgumentException
     * @throws BindingResolutionException
     */
    public function resetPassword()
    {
        $valideted = $this->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        Password::broker()->reset($valideted, function (User $user, string $password) {
            $user->password = $password;
            $user->setRememberToken(Str::random(60));
            $user->save();

            Auth::login($user);
        });

        return redirect()->route('home');
    }

    /**
     * render component.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.password-reset-form');
    }
}
