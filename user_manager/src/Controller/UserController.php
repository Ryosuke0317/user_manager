<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class UserController extends AppController
{
    public function initialize() :void
    {
        parent::initialize();
        
        // $this->viewBuilder()->layout('user_table');
        $this->loadComponent('Flash'); // Flashコンポーネントを含める
    }

    public function index()
    {
        $user = $this->User->find()->all();
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->User->newEmptyEntity();

    }

    public function edit()
    {
        $user = $this->User->newEmptyEntity();
        
    }

    public function delete()
    {
        $user = $this->User->newEmptyEntity();
        
    }
}