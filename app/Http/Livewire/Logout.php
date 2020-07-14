<?php

namespace App\Http\Livewire;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Redirector;

class Logout extends Component
{
    /**
     * logout.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws RuntimeException
     * @throws Exception
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function logout(Request $request, AuthManager $auth): Redirector
    {
        $auth->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
