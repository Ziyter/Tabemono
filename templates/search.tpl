{if $row|@count>0}
<h5>По запросу "{$QUERY}" найдены следующие товары:</h5>
{else}
<h5>По запросу "{$QUERY}" ничего не найдено.</h5>
{/if}
<div id="items"  class="row">
    {foreach from=$row item=str}
        <div class="col-6 col-md-4 col-lg-3 heig">
            <table id="items_list">
                <tr><td>
                        <a data-toggle="modal"  data-target="#my1Modal">
                            <img  width="130" height="130" src="/img/goods/crop/{$str.img}"></a>
                    </td></tr>
                <tr><td>
                        <div id="des">{$str.name}<br>
                            <div class="addbasket">
                                <span id="price"> Цена:
                                    {$str.price} <f class="rubl">о</f> 
                                </span> 
                                <div id_item="{$str.id_item}" act='1' class="icons plus addkorz">Беру</div>
                            </div>
                        </div>
                    </td></tr>
            </table>
        </div>
    {/foreach}
</div>