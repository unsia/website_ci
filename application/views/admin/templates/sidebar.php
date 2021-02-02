    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <img src="<?= base_url(); ?>assets/admin/img/logo-white.png" alt="" width="30">
            </div>
            <div class="sidebar-brand-text mx-3">UNSIA Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Query Menu -->
        <?php

        $role_id = $this->session->userdata('role_id');

        $queryMenu = "SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id` = $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC
            ";

        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <!-- Heading -->
        <!-- Looping Menu -->
        <?php foreach ($menu as $menu) : ?>
            <div class="sidebar-heading">
                <?= $menu['menu']; ?>
            </div>

            <!-- Sub Menu Sesuai Menu -->
            <?php
            $menuId = $menu['id'];
            $querySubMenu = "SELECT *
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`menu_id` = $menuId
                AND `user_sub_menu`.`is_active` = 1
                ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sMenu) : ?>
                <!-- Nav Item - Dashboard -->
                <?php if ($title == $sMenu['title']) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pb-0" href="<?= base_url($sMenu['url']); ?>">
                        <i class="<?= $sMenu['icon']; ?>"></i>
                        <span><?= $sMenu['title']; ?></span></a>
                    </li>
                <?php endforeach; ?>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

            <?php endforeach; ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

    </ul>
    <!-- End of Sidebar -->