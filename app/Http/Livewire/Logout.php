<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * render.
     *
     * @return View|Factory
     */
    public function render()
    {
        return view('livewire.logout');
    }
}
