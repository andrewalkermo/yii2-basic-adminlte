<?php

use yii\helpers\Url;
use webvimark\modules\UserManagement\models\User;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Url::to('@web/img/andre.jpeg') ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>André Walker</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Rotas do módulo de usuário', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Rotas Backend',
                        'icon' => 'cog',
                        'url' => '#',
                        'visible' => User::hasPermission('admin', $superAdminAllowed = true),
                        'items' => [
                            ['label' => 'Usuários', 'url' => ['/user-management/user/index'], 'visible' => User::canRoute('/user-management/user/index', $superAdminAllowed = true)],
                            ['label' => 'Regras de acesso', 'url' => ['/user-management/role/index'], 'visible' => User::canRoute('/user-management/role/index', $superAdminAllowed = true)],
                            ['label' => 'Permissões', 'url' => ['/user-management/permission/index'], 'visible' => User::canRoute('/user-management/permission/index', $superAdminAllowed = true)],
                            ['label' => 'Grupo de permissões', 'url' => ['/user-management/auth-item-group/index'], 'visible' => User::canRoute('/user-management/auth-item-group/index', $superAdminAllowed = true)],
                            ['label' => 'Log de visitas', 'url' => ['/user-management/user-visit-log/index'], 'visible' => User::canRoute('/user-management/user-visit-log/index', $superAdminAllowed = true)],
                        ]
                    ],
                    [
                        'label' => 'Rotas Frontend',
                        'icon' => 'desktop',
                        'url' => '#',
                        'items'=>[
                            ['label'=>'Login', 'url'=>['/user-management/auth/login'], 'visible' => User::canRoute('/user-management/auth/login', $superAdminAllowed = true)],
                            ['label'=>'Logout', 'url'=>['/user-management/auth/logout'], 'visible' => User::canRoute('/user-management/auth/logout', $superAdminAllowed = true)],
                            ['label'=>'Cadastro', 'url'=>['/user-management/auth/registration'], 'visible' => User::canRoute('/user-management/auth/registration', $superAdminAllowed = true)],
                            ['label'=>'Mudar senha', 'url'=>['/user-management/auth/change-own-password'], 'visible' => User::canRoute('/user-management/auth/change-own-password', $superAdminAllowed = true)],
                            ['label'=>'Recuperar senha', 'url'=>['/user-management/auth/password-recovery'], 'visible' => User::canRoute('/user-management/auth/password-recovery', $superAdminAllowed = true)],
                            ['label'=>'Confirmar e-mail', 'url'=>['/user-management/auth/confirm-email'], 'visible' => User::canRoute('/user-management/auth/confirm-email', $superAdminAllowed = true)],
                        ],
                    ],
                    ['label' => 'Desenvolvimento', 'options' => ['class' => 'header'], 'visible' => YII_ENV_DEV],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'], 'visible' => YII_ENV_DEV],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'], 'visible' => YII_ENV_DEV],
                ],
            ]
        ) ?>

    </section>

</aside>
