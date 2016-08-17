<?php namespace Modules\ProjectManager\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ProjectManager\Entities\Phase;
use Modules\ProjectManager\Repositories\PhaseRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PhaseController extends AdminBaseController
{
    /**
     * @var PhaseRepository
     */
    private $phase;

    public function __construct(PhaseRepository $phase)
    {
        parent::__construct();

        $this->phase = $phase;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$phases = $this->phase->all();

        return view('projectmanager::admin.phases.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectmanager::admin.phases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->phase->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('projectmanager::phases.title.phases')]));

        return redirect()->route('admin.projectmanager.phase.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Phase $phase
     * @return Response
     */
    public function edit(Phase $phase)
    {
        return view('projectmanager::admin.phases.edit', compact('phase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Phase $phase
     * @param  Request $request
     * @return Response
     */
    public function update(Phase $phase, Request $request)
    {
        $this->phase->update($phase, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('projectmanager::phases.title.phases')]));

        return redirect()->route('admin.projectmanager.phase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Phase $phase
     * @return Response
     */
    public function destroy(Phase $phase)
    {
        $this->phase->destroy($phase);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('projectmanager::phases.title.phases')]));

        return redirect()->route('admin.projectmanager.phase.index');
    }
}
