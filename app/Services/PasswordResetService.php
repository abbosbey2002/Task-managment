<?php

namespace App\Services;

use Illuminate\Support\Facades\Password;

class PasswordResetService
{
    public function sendResetLink(array $data)
    {
        Password::sendResetLink(['email' => $data['email']]);
    }

    public function resetPassword(array $data)
    {
        Password::reset($data, function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });
    }
}
