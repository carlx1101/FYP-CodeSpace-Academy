<?php

namespace App\Http\Controllers;

use Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('student.profile.show', compact('user'));
    }

    public function showPublicPreview($encryptedId)
    {
        try {
            $id = Crypt::decryptString($encryptedId);
            $user = User::findOrFail($id);
            // Add debug statement
            Log::info('Decrypted ID: ' . $id);

            return view('student.profile.public_preview', compact('user','experiences'));
        } catch (\Exception $e) {
            \Log::error('Decryption or user retrieval failed: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Invalid or expired link.');
        }


    }
}
