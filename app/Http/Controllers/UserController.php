<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed', // Ensure confirmation field is present
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

    // Update user details
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8|confirmed',
        ]);

        // Update user fields
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    // Send password reset link
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|string|email']);

        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Password reset link sent.'])
            : response()->json(['message' => 'Unable to send reset link.'], 400);
    }

    // Reset password
    public function resetPassword(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',  // Corrected the rule here
            'password' => 'required|string|min:5|confirmed',
        ]);

        // Get the currently authenticated user’s ID
        $id = Auth::user()->id;

        // Find the user by ID
        $user = User::find($id);

        // Check if user exists and update fields
        if ($user) {
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->with(['success' => 'Updated successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something went wrong']);
        }
    }




    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Optionally, regenerate session ID to prevent session fixation
            $request->session()->regenerate();
    
            // Redirect to the dashboard route
            return redirect()->route('dashboard')->with('success', 'Login successful');
        }
    
        return redirect()->back()->with(['error'=>'wrong email or password Please Try again']);
    }
    


    // Logout user
    public function logout(Request $request)
    {
        // Ensure we are using the 'web' guard (or change this if using a different guard)
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Or any route you prefer
    }


}
