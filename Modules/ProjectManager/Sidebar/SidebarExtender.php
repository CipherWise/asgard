<?php namespace Modules\ProjectManager\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('projectmanager::abcs.title.abcs'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('projectmanager::projects.title.projects'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.projectmanager.project.create');
                    $item->route('admin.projectmanager.project.index');
                    $item->authorize(
                        $this->auth->hasAccess('projectmanager.projects.index')
                    );
                });
                $item->item(trans('projectmanager::phases.title.phases'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.projectmanager.phase.create');
                    $item->route('admin.projectmanager.phase.index');
                    $item->authorize(
                        $this->auth->hasAccess('projectmanager.phases.index')
                    );
                });
                $item->item(trans('projectmanager::milestones.title.milestones'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.projectmanager.milestone.create');
                    $item->route('admin.projectmanager.milestone.index');
                    $item->authorize(
                        $this->auth->hasAccess('projectmanager.milestones.index')
                    );
                });
                $item->item(trans('projectmanager::tasks.title.tasks'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.projectmanager.task.create');
                    $item->route('admin.projectmanager.task.index');
                    $item->authorize(
                        $this->auth->hasAccess('projectmanager.tasks.index')
                    );
                });
                $item->item(trans('projectmanager::steps.title.steps'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.projectmanager.step.create');
                    $item->route('admin.projectmanager.step.index');
                    $item->authorize(
                        $this->auth->hasAccess('projectmanager.steps.index')
                    );
                });
// append





            });
        });

        return $menu;
    }
}
