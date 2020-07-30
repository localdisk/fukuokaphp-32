<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Redirector;
use Validator;

class Register extends Component
{
    use RegistersUsers;

    /** @var string */
    public string $name = '';

    /** @var string */
    public string $email = '';

    /** @var string */
    public string $password = '';

    /** @var string */
    public string $password_confirmation = '';

    /**
     * register user.
     *
     * @param Request $request
     * @return Redirector
     */
    public function registerUser(Request $request): Redirector
    {
        return $this->register($request)->home();
    }

    /**
     * return validator.
     *
     * @param array $data
     * @return ValidationValidator
     */
    protected function validator(array $data): ValidationValidator
    {
        return Validator::make($data['data'], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * create user.
     *
     * @param array $data
     * @return mixed
     */
    protected function create(array $data)
    {
        $attributes = $data['data'];

        return User::create($attributes);
    }

    /**
     * render component.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.register');
    }
}
