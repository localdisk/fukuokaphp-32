<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

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
     */
    public function login(): Redirector
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

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.login');
    }
}
