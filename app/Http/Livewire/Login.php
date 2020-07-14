<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Redirector;
use Throwable;
use RuntimeException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Login extends Component
{
    /** @var string */
    public string $email = '';
    /** @var string */
    public string $password = '';

    /**
     * login.
     *
     * @return Redirector
     * @throws Throwable
     * @throws RuntimeException
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function login()
    {
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt($validated)) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
