<?php namespace Modules\ProjectManager\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ProjectManager\Entities\Milestone;
use Modules\ProjectManager\Repositories\MilestoneRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MilestoneController extends AdminBaseController
{
    /**
     * @var MilestoneRepository
     */
    private $milestone;

    public function __construct(MilestoneRepository $milestone)
    {
        parent::__construct();

        $this->milestone = $milestone;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$milestones = $this->milestone->all();

        return view('projectmanager::admin.milestones.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectmanager::admin.milestones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->milestone->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('projectmanager::milestones.title.milestones')]));

        return redirect()->route('admin.projectmanager.milestone.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Milestone $milestone
     * @return Response
     */
    public function edit(Milestone $milestone)
    {
        return view('projectmanager::admin.milestones.edit', compact('milestone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Milestone $milestone
     * @param  Request $request
     * @return Response
     */
    public function update(Milestone $milestone, Request $request)
    {
        $this->milestone->update($milestone, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('projectmanager::milestones.title.milestones')]));

        return redirect()->route('admin.projectmanager.milestone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Milestone $milestone
     * @return Response
     */
    public function destroy(Milestone $milestone)
    {
        $this->milestone->destroy($milestone);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('projectmanager::milestones.title.milestones')]));

        return redirect()->route('admin.projectmanager.milestone.index');
    }
}
