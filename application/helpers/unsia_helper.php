<?php

function is_logged_in()
{

    $CI = get_instance();

    if (!$CI->session->userdata('email')) {
        redirect('admin/auth');
    } else {
        $role_id    = $CI->session->userdata('role_id');
        $menu       = $CI->uri->segment(2);

        $queryMenu  = $CI->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id    = $queryMenu['id'];

        $userAccess = $CI->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('admin/auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{

    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
