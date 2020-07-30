<?php

namespace App\Http\Livewire;

use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class Logout extends Component
{
    /**
     * logout.
     *
     * @param Request $request
     *
     * @return Redirector|RedirectResponse
     */
    public function logout(Request $request, AuthManager $auth)
    {
        $auth->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

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
        return view('livewire.logout');
    }
}
