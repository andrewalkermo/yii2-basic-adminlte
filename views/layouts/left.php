<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>

        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Tabelas', 'options' => ['class' => 'header']],
                    ['label' => ucfirst('accounts'), 'icon' => 'list', 'url' => ['/accounts']],
                    ['label' => ucfirst('adverts'), 'icon' => 'list', 'url' => ['/adverts']],
                    ['label' => ucfirst('affiliates'), 'icon' => 'list', 'url' => ['/affiliates']],
                    ['label' => ucfirst('answers'), 'icon' => 'list', 'url' => ['/answers']],
                    ['label' => ucfirst('board'), 'icon' => 'list', 'url' => ['/board']],
                    ['label' => ucfirst('boleto'), 'icon' => 'list', 'url' => ['/boleto']],
                    ['label' => ucfirst('bonus'), 'icon' => 'list', 'url' => ['/bonus']],
                    ['label' => ucfirst('called'), 'icon' => 'list', 'url' => ['/called']],
                    ['label' => ucfirst('cards'), 'icon' => 'list', 'url' => ['/cards']],
                    ['label' => ucfirst('cashout'), 'icon' => 'list', 'url' => ['/cashout']],
                    ['label' => ucfirst('catchthigh'), 'icon' => 'list', 'url' => ['/catchthigh']],
                    ['label' => ucfirst('history'), 'icon' => 'list', 'url' => ['/history']],
                    ['label' => ucfirst('hits'), 'icon' => 'list', 'url' => ['/hits']],
                    ['label' => ucfirst('indicated'), 'icon' => 'list', 'url' => ['/indicated']],
                    ['label' => ucfirst('invested'), 'icon' => 'list', 'url' => ['/invested']],
                    ['label' => ucfirst('levels'), 'icon' => 'list', 'url' => ['/levels']],
                    ['label' => ucfirst('moves'), 'icon' => 'list', 'url' => ['/moves']],
                    ['label' => ucfirst('mp'), 'icon' => 'list', 'url' => ['/mp']],
                    ['label' => ucfirst('pages'), 'icon' => 'list', 'url' => ['/pages']],
                    ['label' => ucfirst('paypal'), 'icon' => 'list', 'url' => ['/paypal']],
                    ['label' => ucfirst('rating'), 'icon' => 'list', 'url' => ['/rating']],
                    ['label' => ucfirst('security'), 'icon' => 'list', 'url' => ['/security']],
                    ['label' => ucfirst('timeline'), 'icon' => 'list', 'url' => ['/timeline']],
                ],
            ]
        ) ?>

    </section>

</aside>
