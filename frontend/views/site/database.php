<?php

use yii\helpers\Html;
use app\models\Country;

$this->title = 'Database';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-database">

    <div class="card">
        <div class="container">
            <h4><b>Users</b></h1>
            <p>Users database</p>
            <p>Rows count: <?= Html::encode($users_count)?><p>
            <div>
                <?= Html::a('Show', ['/user/index'], ['class'=>'btn info'])  ?>
            </div>
        </div>
    </div>
</div>