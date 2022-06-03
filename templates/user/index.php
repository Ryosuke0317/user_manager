<html>
<head>

<meta charset="utf-8"/> 


</head>
<body>

<div>
<h3>検索フォーム</h3>
    <fieldset>
    <?php
        
        echo $this->Form->control('hob1', ['type' => 'checkbox', 'label' => '映画鑑賞']);
        echo $this->Form->control('hob2', ['type' => 'checkbox', 'label' => '読書']);
        echo $this->Form->control('hob3', ['type' => 'checkbox', 'label' => '買い物']);
        echo $this->Form->button('検索');
        echo $this->Form->button('リセット', ['type' => 'button', 'class'=>'clearForm']);
        echo $this->Form->end(); ?>
    </fieldset>
</div>
<!-- 検索フォーム
<form action="user_search.php" method="post">
<table border="0" cellspacing="0" cellpadding="0">
<tr><td>名前</td><td>
<input type="text" name="search_name" size="30" maxlength="200" value="">
</td></tr>
<tr><td>性別</td><td>
<input type="radio" id="male" name="search_seibetsu" value="1"><label for="male">男性</label>
<input type="radio" id="female" name="search_seibetsu" value="2"><label for="female"/>女性</label>
</td></tr>
</table>
<input type="submit" name="submit" value="検索">
</form> -->

<h2><?= $title ?></h2>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<th>名前</th>
<th>年齢</th>
<th>性別</th>
<th>住所</th>
<th>趣味</th>
<th>自己紹介</th>
<th>編集</th>
<th>削除</th>
</tr>

<?php foreach ($user as $user): ?>
<tr>
    <td><?= $user->user_name ?></td>
    <td><?= $user->age ?></td>
    <td>
        <?php if ($user->seibetsu == "1"): ?>男性
        <?php elseif ($user->seibetsu == "2"): ?>女性
        <?php endif; ?>
    </td>
    <td>
        <?php if ($user->tdfk == "1"): ?>東京都 <?php endif; ?>
        <?= $user->address ?>
    </td>
    <td>
        <?php if ($user->hobby1 == "1"): ?>映画鑑賞, <?php endif; ?>
        <?php if ($user->hobby2 == "1"): ?>読書, <?php endif; ?>
        <?php if ($user->hobby3 == "1"): ?>買い物<?php endif; ?>
    </td>
    <td><?= nl2br(h($user->prof)) ?></td>
    <td><button type="button" onclick="location.href='<?= $this->url->build(['action' => 'edit',$user->user_id]) ?>'">編集</button></td> 
    <!-- <td><?= $this->Html->link('編集', ['action' => 'edit',$user->user_id, 'class' => 'button']) ?></td>  -->
    <!-- ↑ボタンにできないか -->
    <td><?= $this->Form->postButton(
            '削除',
            ['action' => 'delete', $user->user_id],
            ['confirm' => '削除してよろしいですか？'])
        ?>
    </td>
    <?php endforeach; ?>    
</tr>
</table>
<!-- <div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<<') ?>
        <?= $this->Paginator->prev('<') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('>') ?>
        <?= $this->Paginator->last('>>') ?>
    </ul>
</div> -->

<p><?= $this->Html->link('ユーザーを追加', ['action' => 'add']) ?></p>

</body>
</html>