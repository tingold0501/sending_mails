<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AvatarController extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'avatar' => ['required', 'image', 'max:2048'],
        ]);

        $request->user()->update([

        ]);

        return back()->with('status', 'avatar-updated');
    }
}
