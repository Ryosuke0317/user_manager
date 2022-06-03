<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
// use Cake\Log\Log;

class UserController extends AppController
{
    public function initialize() :void
    {
        parent::initialize();
        
        // $this->viewBuilder()->layout('user_table');
        $this->loadComponent('Flash'); // Flashコンポーネントを含める
        // $this->loadComponent('Paginator');
        // $ses = $this -> request -> getSession(); //セッション制御
    }

    public $paginate = [
        'limit' => 5,
    ];

    // public function index()
    // {
    //     $user = $this->User->find()->all();
    //     $this->set(compact('user'));

    //     // ORM テーブルのページ分割
    //     $this->set('user', $this->paginate($this->User));
    
    //     // // 部分的に完了したクエリをページ分割する
    //     // $query = $this->User->find('published');
    //     // $this->set('user', $this->paginate($query));
        
    // }

    public function index() {
        // session_cache_limiter('none');
        $ar_data = [];
        $ar_data = $this->User->find();
        $this->set('title', 'ユーザー一覧');
        if ( $this -> request -> is(['put']) || $this -> request -> is(['post'])) {
            $find = $this->request->getData();
            // var_dump($find); //デバッグ用
            if (isset($find['name'])&& $find['name'] != NULL) {
                $ar_data = $ar_data->where(['user.user_name like ' => '%' . $find['name'] . '%']);
            }
            if (isset($find['sex'])&& $find['sex'] != NULL) {
                $ar_data = $ar_data->where(['user.seibetsu like' => $find['sex']]);
            }
            if ($find['hob1']== '1') {
                $ar_data = $ar_data->where(['user.hobby1 like ' => $find['hob1']],);
            }
            if ($find['hob2']== '1') {
                $ar_data = $ar_data->where(['user.hobby2 like ' => $find['hob2']]);
            }
            if ($find['hob3']== '1') {
                $ar_data = $ar_data->where(['user.hobby3 like ' => $find['hob3']]);
            }
          
          
            // $this->paginate = $this->User->find()->where(['user.user_name like ' => '%' . $find . '%']);
            // $query->where(['user.user_name like ' => '%' . $find . '%']);
            $this->set('title', '検索結果');
            // if ($find['name'] == "" && $find['sex'] == "" && $find['hob1'] =="0" && $find['hob2'] =="0" && $find['hob3'] =="0"){
            // $this->set('title', 'ユーザー一覧');
            // }
        }
        $this->set('user',$ar_data);
    }

    public function add()
    {
        $user = $this->User->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());

            if ($this->User->save($user)) {
                $this->Flash->success(__('ユーザー情報を登録しました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ユーザー情報が登録されませんでした。'));
        }
        $this->set('user', $user);

    }

    public function edit($id = null)
    {
        $user = $this->User->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->User->patchEitity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('記事が更新されました。'));
                return $this->redirect(['action' => "index"]);
            }
            $this->Flash->error(__('記事の更新ができませんでした。'));
        }
        $this->set('user', $user);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->User->get($id);
        if ($this->User->delete($user)) {
            $this->Flash->success(__('ID: {0}のユーザー情報が削除されました。', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}