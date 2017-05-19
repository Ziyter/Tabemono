<div id="orders_list">
    <div class="buttons">
        <form id="cabinet" action="PHPfuncs/destroySes.php" method="post">
            <button type="submit" class="btn btn-orange">Выйти</button>
        </form>
    </div>
    {if $ORDER_INFO}
        <h3>Товары в заказе № {$ID_ORDER}</h3>
        {if $MOBILE}
            {foreach from=$ITEMS_LIST item=items}
                <div class="orders_div">
                    {$items.name}<br>
                    {$items.price} <f class="rubl">о</f>&nbsp;
                    {$items.quantity} шт.<br>
                </div>
            {/foreach} 
        {else}
            <table id="items_listd">
                {foreach from=$ITEMS_LIST item=items}
                    <tr>
                        <td>
                            {$items.name}
                        </td>
                        <td>
                    {$items.price}  <f class="rubl">о</f> 
                    </td>
                    <td>
                        {$items.quantity} шт.
                    </td>
                    </tr>  
                {/foreach} 
            </table>
        {/if}
    {else}
        <h3>Список заказов</h3>
        {if $MOBILE}
            {foreach from=$ORDERS_LIST item=items}
                <div class="orders_div">
                    <b>Заказ №</b> {$items.id_order}<br>
                    <b>Сумма заказа:</b> {$items.summa} <f class="rubl">о</f><br> 
                    <b>Время заказа:</b> {$items.date_order}<br>
                    <b>Статус:</b> {$items.name_status}<br>
                    <a href="/user/order/{$items.id_order}/">Товары в заказе</a>
                    {if $items.id_status == 1}
                        <div id_order='{$items.id_order}' class='icons del_order del_basket_orange'></div>
                    {/if}
                </div>
            {/foreach} 
        {else}
            <div id="order_div_table">
                <table id="orders_table">
                    <tr>
                        <td>
                            <b>Номер заказа</b>
                        </td>
                        <td>
                            <b>Сумма заказа</b>
                        </td>
                        <td>
                            <b>Дата заказа</b>
                        </td>
                        <td>
                            <b>Статус</b>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>  
                    {foreach from=$ORDERS_LIST item=items}
                        <tr>
                            <td>
                                № {$items.id_order}
                            </td>
                            <td>
                        {$items.summa} <f class="rubl">о</f> 
                        </td>
                        <td>
                            {$items.date_order}
                        </td>
                        <td>
                            {$items.name_status}
                        </td>
                        <td>
                            <a href="/user/order/{$items.id_order}/">Товары в заказе</a>
                        </td>
                        <td>
                            {if $items.id_status == 1}
                                <div id_order='{$items.id_order}' class='icons del_order del_basket_orange'></div>
                            {/if}
                        </td>
                        </tr>  
                    {/foreach}
                </table>
            </div>
        {/if}
    {/if}
</div>