<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/projectmanager'], function (Router $router) {
    $router->bind('project', function ($id) {
        return app('Modules\ProjectManager\Repositories\ProjectRepository')->find($id);
    });
    $router->get('projects', [
        'as' => 'admin.projectmanager.project.index',
        'uses' => 'ProjectController@index',
        'middleware' => 'can:projectmanager.projects.index'
    ]);
    $router->get('projects/create', [
        'as' => 'admin.projectmanager.project.create',
        'uses' => 'ProjectController@create',
        'middleware' => 'can:projectmanager.projects.create'
    ]);
    $router->post('projects', [
        'as' => 'admin.projectmanager.project.store',
        'uses' => 'ProjectController@store',
        'middleware' => 'can:projectmanager.projects.store'
    ]);
    $router->get('projects/{project}/edit', [
        'as' => 'admin.projectmanager.project.edit',
        'uses' => 'ProjectController@edit',
        'middleware' => 'can:projectmanager.projects.edit'
    ]);
    $router->put('projects/{project}', [
        'as' => 'admin.projectmanager.project.update',
        'uses' => 'ProjectController@update',
        'middleware' => 'can:projectmanager.projects.update'
    ]);
    $router->delete('projects/{project}', [
        'as' => 'admin.projectmanager.project.destroy',
        'uses' => 'ProjectController@destroy',
        'middleware' => 'can:projectmanager.projects.destroy'
    ]);
    $router->bind('phase', function ($id) {
        return app('Modules\ProjectManager\Repositories\PhaseRepository')->find($id);
    });
    $router->get('phases', [
        'as' => 'admin.projectmanager.phase.index',
        'uses' => 'PhaseController@index',
        'middleware' => 'can:projectmanager.phases.index'
    ]);
    $router->get('phases/create', [
        'as' => 'admin.projectmanager.phase.create',
        'uses' => 'PhaseController@create',
        'middleware' => 'can:projectmanager.phases.create'
    ]);
    $router->post('phases', [
        'as' => 'admin.projectmanager.phase.store',
        'uses' => 'PhaseController@store',
        'middleware' => 'can:projectmanager.phases.store'
    ]);
    $router->get('phases/{phase}/edit', [
        'as' => 'admin.projectmanager.phase.edit',
        'uses' => 'PhaseController@edit',
        'middleware' => 'can:projectmanager.phases.edit'
    ]);
    $router->put('phases/{phase}', [
        'as' => 'admin.projectmanager.phase.update',
        'uses' => 'PhaseController@update',
        'middleware' => 'can:projectmanager.phases.update'
    ]);
    $router->delete('phases/{phase}', [
        'as' => 'admin.projectmanager.phase.destroy',
        'uses' => 'PhaseController@destroy',
        'middleware' => 'can:projectmanager.phases.destroy'
    ]);
    $router->bind('milestone', function ($id) {
        return app('Modules\ProjectManager\Repositories\MilestoneRepository')->find($id);
    });
    $router->get('milestones', [
        'as' => 'admin.projectmanager.milestone.index',
        'uses' => 'MilestoneController@index',
        'middleware' => 'can:projectmanager.milestones.index'
    ]);
    $router->get('milestones/create', [
        'as' => 'admin.projectmanager.milestone.create',
        'uses' => 'MilestoneController@create',
        'middleware' => 'can:projectmanager.milestones.create'
    ]);
    $router->post('milestones', [
        'as' => 'admin.projectmanager.milestone.store',
        'uses' => 'MilestoneController@store',
        'middleware' => 'can:projectmanager.milestones.store'
    ]);
    $router->get('milestones/{milestone}/edit', [
        'as' => 'admin.projectmanager.milestone.edit',
        'uses' => 'MilestoneController@edit',
        'middleware' => 'can:projectmanager.milestones.edit'
    ]);
    $router->put('milestones/{milestone}', [
        'as' => 'admin.projectmanager.milestone.update',
        'uses' => 'MilestoneController@update',
        'middleware' => 'can:projectmanager.milestones.update'
    ]);
    $router->delete('milestones/{milestone}', [
        'as' => 'admin.projectmanager.milestone.destroy',
        'uses' => 'MilestoneController@destroy',
        'middleware' => 'can:projectmanager.milestones.destroy'
    ]);
    $router->bind('task', function ($id) {
        return app('Modules\ProjectManager\Repositories\TaskRepository')->find($id);
    });
    $router->get('tasks', [
        'as' => 'admin.projectmanager.task.index',
        'uses' => 'TaskController@index',
        'middleware' => 'can:projectmanager.tasks.index'
    ]);
    $router->get('tasks/create', [
        'as' => 'admin.projectmanager.task.create',
        'uses' => 'TaskController@create',
        'middleware' => 'can:projectmanager.tasks.create'
    ]);
    $router->post('tasks', [
        'as' => 'admin.projectmanager.task.store',
        'uses' => 'TaskController@store',
        'middleware' => 'can:projectmanager.tasks.store'
    ]);
    $router->get('tasks/{task}/edit', [
        'as' => 'admin.projectmanager.task.edit',
        'uses' => 'TaskController@edit',
        'middleware' => 'can:projectmanager.tasks.edit'
    ]);
    $router->put('tasks/{task}', [
        'as' => 'admin.projectmanager.task.update',
        'uses' => 'TaskController@update',
        'middleware' => 'can:projectmanager.tasks.update'
    ]);
    $router->delete('tasks/{task}', [
        'as' => 'admin.projectmanager.task.destroy',
        'uses' => 'TaskController@destroy',
        'middleware' => 'can:projectmanager.tasks.destroy'
    ]);
    $router->bind('step', function ($id) {
        return app('Modules\ProjectManager\Repositories\StepRepository')->find($id);
    });
    $router->get('steps', [
        'as' => 'admin.projectmanager.step.index',
        'uses' => 'StepController@index',
        'middleware' => 'can:projectmanager.steps.index'
    ]);
    $router->get('steps/create', [
        'as' => 'admin.projectmanager.step.create',
        'uses' => 'StepController@create',
        'middleware' => 'can:projectmanager.steps.create'
    ]);
    $router->post('steps', [
        'as' => 'admin.projectmanager.step.store',
        'uses' => 'StepController@store',
        'middleware' => 'can:projectmanager.steps.store'
    ]);
    $router->get('steps/{step}/edit', [
        'as' => 'admin.projectmanager.step.edit',
        'uses' => 'StepController@edit',
        'middleware' => 'can:projectmanager.steps.edit'
    ]);
    $router->put('steps/{step}', [
        'as' => 'admin.projectmanager.step.update',
        'uses' => 'StepController@update',
        'middleware' => 'can:projectmanager.steps.update'
    ]);
    $router->delete('steps/{step}', [
        'as' => 'admin.projectmanager.step.destroy',
        'uses' => 'StepController@destroy',
        'middleware' => 'can:projectmanager.steps.destroy'
    ]);
// append





});
