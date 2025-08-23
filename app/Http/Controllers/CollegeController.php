<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CollegeTeam;

class CollegeController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|max:2048',
            'team_name' => 'required|string|max:255',
            'alt_name' => 'nullable|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('college_teams', 'public');
        }

        CollegeTeam::create([
            'logo' => $logoPath,
            'team_name' => $request->team_name,
            'alt_name' => $request->alt_name,
            'department' => $request->department,
        ]);

        return redirect()->back()->with('success', 'Team added successfully!');
    }

     public function update(Request $request, $id)
    {
        $team = CollegeTeam::findOrFail($id);

        $request->validate([
            'logo' => 'nullable|image|max:2048',
            'team_name' => 'required|string|max:255',
            'alt_name' => 'nullable|string|max:255',
            'department' => 'required|string|max:255',
            'gold' => 'required|integer|min:0',
            'silver' => 'required|integer|min:0',
            'bronze' => 'required|integer|min:0',
        ]);

        $logoPath = $team->logo;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('college_teams', 'public');
        }

        $team->update([
            'logo' => $logoPath,
            'team_name' => $request->team_name,
            'alt_name' => $request->alt_name,
            'department' => $request->department,
            'gold' => $request->gold,
            'silver' => $request->silver,
            'bronze' => $request->bronze,
        ]);

        return redirect()->back()->with('success', 'Team updated successfully!');
    }

     public function destroy($id)
    {
        $team = CollegeTeam::findOrFail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Team deleted successfully!');
    }
}
