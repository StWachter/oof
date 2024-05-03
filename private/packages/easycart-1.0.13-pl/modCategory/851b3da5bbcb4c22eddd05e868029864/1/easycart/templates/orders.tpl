<div id="easycart-panel-home">
    <div class="easycart-container" style="height: calc(100vh - 55px); overflow-y: auto;">

        <div class="header">
            <div class="container">
                <h1>Bestellungen</h1>
            </div>
        </div>

        <div class="pt1">
            <div class="container">
                <div class="box">
                    <div class="box__header">
                        <div>
                            <h2>Übersicht</h2>
                        </div>
                        <div class="box__headerAction">
                            <label class="form__inputGroup">
                                <input type="text" name="search" placeholder="suchen..." autocomplete="off">
                                <button class="form__inputGroupButton"><svg class="form__inputGroupIcon"><use xlink:href="img/sprite.svg#search"></use></svg></button>
                            </label>
                        </div>
                    </div>
                    <div class="box__body">
                        <h3>Aktuelle Bestellungen</h3>
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
                            </tbody>
                        </table>
                        <div>
                            <ul class="pagination">
                                <li class="pagination__item"><a href="#" class="pagination__button"><svg class="pagination__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#angle-left"></use></svg></a></li>
                                <li class="pagination__item active"><a href="#" class="pagination__button">1</a></li>
                                <li class="pagination__item"><a href="#" class="pagination__button">2</a></li>
                                <li class="pagination__item"><a href="#" class="pagination__button">3</a></li>
                                <li class="pagination__item"><a href="#" class="pagination__button">4</a></li>
                                <li class="pagination__item"><a href="#" class="pagination__button">5</a></li>
                                <li class="pagination__item"><a href="#" class="pagination__button"><svg class="pagination__icon"><use xlink:href="{$assetsUrl}img/sprite.svg#angle-right"></use></svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
