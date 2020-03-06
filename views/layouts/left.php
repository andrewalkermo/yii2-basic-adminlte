<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

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
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],

                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'accounts', 'icon' => 'dashboard', 'url' => ['/accounts']],
                    ['label' => 'adverts', 'icon' => 'dashboard', 'url' => ['/adverts']],
                    ['label' => 'affiliates', 'icon' => 'dashboard', 'url' => ['/affiliates']],
                    ['label' => 'answers', 'icon' => 'dashboard', 'url' => ['/answers']],
                    ['label' => 'board', 'icon' => 'dashboard', 'url' => ['/board']],
                    ['label' => 'boleto', 'icon' => 'dashboard', 'url' => ['/boleto']],
                    ['label' => 'bonus', 'icon' => 'dashboard', 'url' => ['/bonus']],
                    ['label' => 'called', 'icon' => 'dashboard', 'url' => ['/called']],
                    ['label' => 'cards', 'icon' => 'dashboard', 'url' => ['/cards']],
                    ['label' => 'cashout', 'icon' => 'dashboard', 'url' => ['/cashout']],
                    ['label' => 'catchthigh', 'icon' => 'dashboard', 'url' => ['/catchthigh']],
                    ['label' => 'history', 'icon' => 'dashboard', 'url' => ['/history']],
                    ['label' => 'hits', 'icon' => 'dashboard', 'url' => ['/hits']],
                    ['label' => 'indicated', 'icon' => 'dashboard', 'url' => ['/indicated']],
                    ['label' => 'invested', 'icon' => 'dashboard', 'url' => ['/invested']],
                    ['label' => 'levels', 'icon' => 'dashboard', 'url' => ['/levels']],
                    ['label' => 'moves', 'icon' => 'dashboard', 'url' => ['/moves']],
                    ['label' => 'mp', 'icon' => 'dashboard', 'url' => ['/mp']],
                    ['label' => 'pages', 'icon' => 'dashboard', 'url' => ['/pages']],
                    ['label' => 'paypal', 'icon' => 'dashboard', 'url' => ['/paypal']],
                    ['label' => 'rating', 'icon' => 'dashboard', 'url' => ['/rating']],

                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
