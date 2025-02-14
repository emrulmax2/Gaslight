<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Main\SideMenu;

class MenuComposer
{
    /**
     * Bind menu to the view.
     */
    public function compose(View $view): void
    {
        if (!is_null(request()->route())) {
            $routeName = request()->route()->getName();
            $activeMenu = $this->activeMenu($routeName);

            $view->with('sideMenu', SideMenu::menu());
            $view->with('firstLevelActiveIndex', $activeMenu['first_level_active_index']);
            $view->with('secondLevelActiveIndex', $activeMenu['second_level_active_index']);
            $view->with('thirdLevelActiveIndex', $activeMenu['third_level_active_index']);
        }
    }

    /**
     * Determine active menu & submenu.
     */
    public function activeMenu($routeName): array
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach (SideMenu::menu() as $menuKey => $menu) {
            if (!is_string($menu) && isset($menu['route_name']) && $menu['route_name'] == $routeName) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (isset($menu['sub_menu'])) {
                foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {
                    if (isset($subMenu['route_name']) && $subMenu['route_name'] == $routeName) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                    }

                    if (isset($subMenu['sub_menu'])) {
                        foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                            if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $routeName) {
                                $firstLevelActiveIndex = $menuKey;
                                $secondLevelActiveIndex = $subMenuKey;
                                $thirdLevelActiveIndex = $lastSubMenuKey;
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex
        ];
    }
}
