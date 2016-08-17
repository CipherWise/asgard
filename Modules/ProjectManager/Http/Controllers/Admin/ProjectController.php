<?php namespace Modules\ProjectManager\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ProjectManager\Entities\Project;
use Modules\ProjectManager\Repositories\ProjectRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProjectController extends AdminBaseController
{
    /**
     * @var ProjectRepository
     */
    private $project;

    public function __construct(ProjectRepository $project)
    {
        parent::__construct();

        $this->project = $project;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$projects = $this->project->all();

        return view('projectmanager::admin.projects.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectmanager::admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->project->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('projectmanager::projects.title.projects')]));

        return redirect()->route('admin.projectmanager.project.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('projectmanager::admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Project $project
     * @param  Request $request
     * @return Response
     */
    public function update(Project $project, Request $request)
    {
        $this->project->update($project, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('projectmanager::projects.title.projects')]));

        return redirect()->route('admin.projectmanager.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $this->project->destroy($project);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('projectmanager::projects.title.projects')]));

        return redirect()->route('admin.projectmanager.project.index');
    }
}
