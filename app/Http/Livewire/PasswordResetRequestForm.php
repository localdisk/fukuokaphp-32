<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use InvalidArgumentException;
use Livewire\Component;
use Throwable;

class PasswordResetRequestForm extends Component
{
    /** @var string */
    public string $email = '';

    /**
     * send password reset mail.
     *
     * @return RedirectResponse
     * @throws Throwable
     * @throws InvalidArgumentException
     * @throws BindingResolutionException
     */
    public function sendResetLink()
    {
        $validated = $this->validate([
            'email' => 'required|email',
        ]);

        $response = Password::broker()->sendResetLink($validated);

        session()->flash('message', $this->message($response));

        // TODO mail queue
        return back();
    }

    /**
     * build message.
     *
     * @param string $type
     * @return (Translator|string|array|null)[]
     * @throws BindingResolutionException
     */
    private function message(string $type)
    {
        if ($type !== Password::RESET_LINK_SENT) {
            return ['type' => 'error', 'body' => trans($type)];
        }

        return ['type' => 'success', 'body' => trans($type)];
    }

    /**
     * render component.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.password-reset-request-form');
    }
}
