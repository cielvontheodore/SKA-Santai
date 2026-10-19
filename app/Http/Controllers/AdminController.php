<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the admin accounts.
     */
    public function index()
    {
        $admins = User::orderByDesc('is_super_admin')->orderBy('name')->get();

        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new admin.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created admin in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'is_super_admin' => 'nullable|boolean',
        ]);

        $validated['is_super_admin'] = $request->boolean('is_super_admin');

        User::create($validated);

        return redirect()->route('admin.admins.index')->with('success', 'Admin created successfully.');
    }

    /**
     * Show the form for editing the specified admin.
     */
    public function edit(User $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified admin in storage.
     */
    public function update(Request $request, User $admin)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($admin->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'is_super_admin' => 'nullable|boolean',
        ]);

        $isSuperAdmin = $request->boolean('is_super_admin');

        if ($admin->is_super_admin && ! $isSuperAdmin && User::where('is_super_admin', true)->count() <= 1) {
            return back()->withInput()->withErrors([
                'is_super_admin' => 'Minimal harus ada satu super admin.',
            ]);
        }

        $admin->name = $validated['name'];
        $admin->email = $validated['email'];
        $admin->is_super_admin = $isSuperAdmin;

        if (! empty($validated['password'])) {
            $admin->password = $validated['password'];
        }

        $admin->save();

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully.');
    }

    /**
     * Remove the specified admin from storage.
     */
    public function destroy(User $admin)
    {
        if ($admin->id === Auth::id()) {
            return redirect()->route('admin.admins.index')->with('error', 'Anda tidak bisa menghapus akun sendiri.');
        }

        if ($admin->is_super_admin && User::where('is_super_admin', true)->count() <= 1) {
            return redirect()->route('admin.admins.index')->with('error', 'Minimal harus ada satu super admin.');
        }

        $admin->delete();

        return redirect()->route('admin.admins.index')->with('success', 'Admin deleted successfully.');
    }
}
