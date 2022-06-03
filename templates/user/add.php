<html>
<head>
</head>
<body>

<h1>新しいユーザーを作成</h1>
<?php
    echo $this->Form->create($user);
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

<!-- <form action="confirm.php" method="post">
<table border="0" cellspacing="0" cellpadding="0">

<tr><td>名前</td><td>
<input type="text" name="user_name" size="50" maxlength="200" value="">
</td></tr>

<tr><td>年齢</td><td>
<input type="text" name="age" size="30" value="">
</td></tr>

<tr><td>性別</td><td>
<input type="radio" id="male" name="seibetsu" value="1" ><label for="male">男性</label>
<input type="radio" id="female" name="seibetsu" value="2" ><label for="female"/>女性</label>
</td></tr>

<tr><td>住所</td><td>
<select id="tdfk" name="tdfk"><option value="1" >東京</option></select>
<input type="text" name="address" size="50" maxlength="200" value="">
</td></tr>

<tr><td>趣味</td><td>
<input type="checkbox" id="hobby1" name="hobby1" value="1" ><label for="hobby1">映画鑑賞</label>
<input type="checkbox" id="hobby2" name="hobby2" value="1" ><label for="hobby2">読書</label>
<input type="checkbox" id="hobby3" name="hobby3" value="1" ><label for="hobby3">買い物</label>
</td></tr>

<tr><td>自己紹介</td><td>
<textarea name="prof" cols="75" rows="5"></textarea>
</td></tr>

</table>

<p><input type="submit" value="送る"></p>
</form> -->

<p><?= $this->Html->link('ユーザー一覧へ戻る', ['action' => 'index']) ?></p>

</body>
</html>