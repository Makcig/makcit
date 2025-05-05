<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index()
    {
        $skills = Skill::orderBy('type')->get();
        return view('cv', compact('skills'));
    }

    public function create()
    {
        $skills = Skill::orderBy('type')->get(); // Fetch all skills from the database
        return view('admin.add_skill', compact('skills')); // Pass skills to the view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'level' => 'nullable|integer|min:1|max:5',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ]);

        Skill::create($validated);

        return redirect()->route('admin.skills.create')->with('success', 'Skill added!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skills.create')->with('success', 'Skill deleted successfully!');
    }

    public function updateLevel(Request $request, $id)
    {
        $validated = $request->validate([
            'level' => 'nullable|integer|min:1|max:5',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->level = $validated['level'];
        $skill->save();

        return response()->json(['success' => true, 'message' => 'Skill level updated']);
    }
}
