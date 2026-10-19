<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the profile record.
     */
    public function index()
    {
        $profile = Profile::current();

        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Show the form for editing the profile.
     */
    public function edit()
    {
        $profile = Profile::current();

        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the profile content.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_label' => 'nullable|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',

            'intro_eyebrow' => 'nullable|string|max:255',
            'intro_title' => 'required|string|max:255',
            'intro_text_1' => 'nullable|string',
            'intro_text_2' => 'nullable|string',

            'fact_1_value' => 'nullable|string|max:255',
            'fact_1_label' => 'nullable|string|max:255',
            'fact_2_value' => 'nullable|string|max:255',
            'fact_2_label' => 'nullable|string|max:255',
            'fact_3_value' => 'nullable|string|max:255',
            'fact_3_label' => 'nullable|string|max:255',
            'fact_4_value' => 'nullable|string|max:255',
            'fact_4_label' => 'nullable|string|max:255',

            'vision_text' => 'nullable|string',
            'mission_text' => 'nullable|string',

            'values_eyebrow' => 'nullable|string|max:255',
            'values_title' => 'nullable|string|max:255',
            'values_subtitle' => 'nullable|string|max:255',

            'value_1_title' => 'nullable|string|max:255',
            'value_1_desc' => 'nullable|string',
            'value_2_title' => 'nullable|string|max:255',
            'value_2_desc' => 'nullable|string',
            'value_3_title' => 'nullable|string|max:255',
            'value_3_desc' => 'nullable|string',
            'value_4_title' => 'nullable|string|max:255',
            'value_4_desc' => 'nullable|string',

            'cta_title' => 'nullable|string|max:255',
            'cta_subtitle' => 'nullable|string|max:255',
            'cta_button_label' => 'nullable|string|max:255',
        ]);

        Profile::current()->update($validated);

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }
}
