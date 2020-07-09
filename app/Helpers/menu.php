<?php
if (! function_exists('getMenus')) {
    /**
     * get user menu
     *
     * @return \App\Model\Feature[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    function getMenus()
    {
        $menuGroup = \App\Model\Feature::with('allChildren')->where('id_parent', 0)->where('status', true)->get();
        $user = Auth::user();
        foreach ($menuGroup as $key => $menu)
        {
            /** check user permission and remove if don't have */
            if($menu->menu_type == 'menu' && !$user->can($menu->prefix_permission . '-read') && $menu->prefix_permission != 'beranda') {
                unset($menuGroup[$key]);
            }
            foreach ($menu->allChildren as $subKey => $subMenu)
            {
                /** check user permission and remove if don't have */
                if($subMenu->menu_type == 'menu' && !$user->can($subMenu->prefix_permission . '-read')) {
                    unset($menu->allChildren[$subKey]);
                }
                foreach ($subMenu->allChildren as $subSubKey => $subSubMenu)
                {
                    /** check user permission and remove if don't have */
                    if($subSubMenu->menu_type == 'menu' && !$user->can($subSubMenu->prefix_permission . '-read')) {
                        unset($subMenu->allChildren[$subSubKey]);
                    }
                }
                /** check is has children and remove if don't have */
                if($subMenu->menu_type != 'menu' && count($subMenu->allChildren) == 0) {
                    unset($menu->allChildren[$subKey]);
                }
            }
            /** check is has children and remove if don't have */
            if($menu->menu_type != 'menu' && count($menu->allChildren) == 0) {
                unset($menuGroup[$key]);
            }
        }
        return $menuGroup;
    }
}

if (! function_exists('getCurrentMenu')) {
    /**
     * get current menu
     * @param $prefix_permission
     * @return array
     */
    function getCurrentMenu($prefix_permission)
    {
        $current = \App\Model\Feature::with('allParent')->where('prefix_permission', $prefix_permission)->first();
        $current_menu = [];
        if($current->allParent && $current->allParent->allParent && $current->allParent->allParent->name) {
            array_push($current_menu, $current->allParent->allParent->name);
        }
        if($current->allParent && $current->allParent->name) {
            array_push($current_menu, $current->allParent->name);
        }
        if($current->name) {
            array_push($current_menu, $current->name);
        }
        return $current_menu;
    }
}