<html>
<head>
</head>
<body>

<h1>ユーザー情報を編集</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('user_name', ['label' => '名前']);
    echo $this->Form->control('age', ['label' => '年齢']);
    echo $this->Form->control('seibetsu', [
        'type' => 'radio',
        'label' => '性別',
        'required' => true,
        'options' => [
          1 => '男性',
          2 => '女性',
         ],
        ]);

        $list = [
            [ 'text' => '東京都', 'value' => 1 ]
          ];

    echo $this->Form->control('tdfk', [
        'type' => 'select',
        'label' => '住所',
        'required' => true,
        'options' => $list,
        'multiple' => false,
        'empty' => '選択してください'
      ]);
    echo $this->Form->control('address', ['label' => '']);
    echo '趣味';
    echo $this->Form->control('hobby1', ['type' => 'checkbox', 'label' => '映画鑑賞']);
    echo $this->Form->control('hobby2', ['type' => 'checkbox', 'label' => '読書']);
    echo $this->Form->control('hobby3', ['type' => 'checkbox', 'label' => '買い物']);
    echo $this->Form->control('prof', ['label' => '自己紹介','rows' => '3']);
    echo $this->Form->button(__('登録する'));
    echo $this->Form->end();
?>

<p><?= $this->Html->link('ユーザー一覧へ戻る', ['action' => 'index']) ?></p>

</body>
</html>