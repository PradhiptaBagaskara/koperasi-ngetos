<?php
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-15 13:06:36
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-18 15:08:27
 */

class Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    /**
     * tampil data user
     * @return [type] [description]
     */

    public function index()
    {
        // $hash = $this->bcrypt->hash_password("password");
        // $user = array(
        //     'password' => $hash,
        //     // 'role'     => $this->input->post('role'),
        // );

        // $this->User->updateUser("admin", $user);
        return redirect("/admin");
    }
}