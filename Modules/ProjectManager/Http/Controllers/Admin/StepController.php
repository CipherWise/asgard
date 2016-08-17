<?php namespace Modules\ProjectManager\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ProjectManager\Entities\Step;
use Modules\ProjectManager\Repositories\StepRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class StepController extends AdminBaseController
{
    /**
     * @var StepRepository
     */
    private $step;

    public function __construct(StepRepository $step)
    {
        parent::__construct();

        $this->step = $step;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$steps = $this->step->all();

        return view('projectmanager::admin.steps.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectmanager::admin.steps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->step->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('projectmanager::steps.title.steps')]));

        return redirect()->route('admin.projectmanager.step.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Step $step
     * @return Response
     */
    public function edit(Step $step)
    {
        return view('projectmanager::admin.steps.edit', compact('step'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Step $step
     * @param  Request $request
     * @return Response
     */
    public function update(Step $step, Request $request)
    {
        $this->step->update($step, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('projectmanager::steps.title.steps')]));

        return redirect()->route('admin.projectmanager.step.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Step $step
     * @return Response
     */
    public function destroy(Step $step)
    {
        $this->step->destroy($step);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('projectmanager::steps.title.steps')]));

        return redirect()->route('admin.projectmanager.step.index');
    }
}
