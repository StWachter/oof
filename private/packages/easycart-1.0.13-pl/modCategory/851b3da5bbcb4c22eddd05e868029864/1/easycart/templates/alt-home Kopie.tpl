<div id="easycart-panel-home">
    <div class="easycart-container" style="height: calc(100vh - 55px); overflow-y: auto;">

        <div class="header">
            <div class="container">
                <h1>Dashboard</h1>
            </div>
        </div>


        <div class="pt1">
            <div class="container">
                <div class="box">
                    <div class="box__header box__header--small">
                        <div>
                            <h2>Aktuelle Bestellungen</h2>
                        </div>
                        <div class="box__headerAction">
                            <a href="?a=home&namespace=easycart&eca=orders">alle Bestellungen</a>
                        </div>
                    </div>
                    <div class="box__body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table__status">Status</th>
                                    <th>#</th>
                                    <th>Kunde</th>
                                    <th>Betrag</th>
                                </tr>
                            </thead>
                            <tbody>

                                {foreach $orders as $order}

                                    <tr>
                                        <td><div class="status status--{$order->status}"><span>{$_lang["easycart.order_status_{$order->status}"]}</span></div></td>
                                        <td><a href="?a=home&namespace=easycart&eca=order&orderid={$order->id}">{$order->id}</a></td>
                                        <td>{$order->billing_address->firstname} {$order->billing_address->lastname}, <span class="table__light">{$order->billing_address->country}-{$order->billing_address->zip} {$order->billing_address->city}</span></td>
                                        <td class="table__light">{$order->total_formatted}</td>
                                    </tr>

                                {/foreach}

                                <!--<tr>
                                    <td><div class="status status--progress"><span>verarbeitung</span></div></td>
                                    <td><a href="/bestellung.html">1002</a></td>
                                    <td>Max Mustermann Firma, <span class="table__light">76863 Herxheim</span></td>
                                    <td class="table__light">30,00 EUR</td>
                                </tr>
                                <tr>
                                    <td><div class="status status--shipped"><span>versendet</span></div></td>
                                    <td><a href="/bestellung.html">1002</a></td>
                                    <td>Max Mustermann Firma, <span class="table__light">76863 Herxheim</span></td>
                                    <td class="table__light">30,00 EUR</td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt3 pb4">
            <div class="container">
                <nav class="">
                    <ul class="quickButton__wrapper">
                        <li class="box"><a href="?a=home&namespace=easycart&eca=orders" class="quickButton"><svg class="quickButton__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#cart"></use></svg><div><span class="quickButton__title">Bestellungen</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, numquam.</div></a></li>
                        <li class="box"><a href="?a=home&namespace=easycart" class="quickButton"><svg class="quickButton__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#users"></use></svg><div><span class="quickButton__title">Kunden</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, numquam.</div></a></li>
                        <li class="box"><a href="?a=home&namespace=easycart" class="quickButton"><svg class="quickButton__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#percent"></use></svg><div><span class="quickButton__title">Gutscheine</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, numquam.</div></a></li>
                        <li class="box"><a href="?a=home&namespace=easycart" class="quickButton"><svg class="quickButton__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#cog"></use></svg><div><span class="quickButton__title">Einstellungen</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, numquam.</div></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
