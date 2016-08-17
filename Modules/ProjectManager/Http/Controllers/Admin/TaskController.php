<?php namespace Modules\ProjectManager\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\ProjectManager\Entities\Task;
use Modules\ProjectManager\Repositories\TaskRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TaskController extends AdminBaseController
{
    /**
     * @var TaskRepository
     */
    private $task;

    public function __construct(TaskRepository $task)
    {
        parent::__construct();

        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$tasks = $this->task->all();

        return view('projectmanager::admin.tasks.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projectmanager::admin.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->task->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('projectmanager::tasks.title.tasks')]));

        return redirect()->route('admin.projectmanager.task.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Task $task
     * @return Response
     */
    public function edit(Task $task)
    {
        return view('projectmanager::admin.tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Task $task
     * @param  Request $request
     * @return Response
     */
    public function update(Task $task, Request $request)
    {
        $this->task->update($task, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('projectmanager::tasks.title.tasks')]));

        return redirect()->route('admin.projectmanager.task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Task $task
     * @return Response
     */
    public function destroy(Task $task)
    {
        $this->task->destroy($task);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('projectmanager::tasks.title.tasks')]));

        return redirect()->route('admin.projectmanager.task.index');
    }
}
