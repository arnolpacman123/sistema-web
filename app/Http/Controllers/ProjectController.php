<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('project_index'), 403);

        $projects = Project::paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        abort_if(Gate::denies('project_create'), 403);
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = Project::create($request->only('code', 'name', 'start_date', 'finish_date', 'condition'));
        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        abort_if(Gate::denies('project_show'), 403);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        abort_if(Gate::denies('project_edit'), 403);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        abort_if(Gate::denies('project_destroy'), 403);
        $project->delete();
        return back()->with('succes', 'Proyecto eliminado correctamente');
    }
}
