<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PasswordController extends Controller
{
    /**
     * Show the password change form.
     */
    public function showChangeForm(): View
    {
        return view('auth.change-password');
    }

    /**
     * Update the user's password.
     */
    public function update(UpdatePasswordRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $user->password = Hash::make($request->validated()['password']);
        $user->save();

        return redirect()->route('backend.index')
            ->with('success', 'Password changed successfully.');
    }
}
