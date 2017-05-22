<div id="items"  class="row">
    {foreach from=$row item=str}
        <div class="col-6 col-md-4 col-lg-3 heig">
            <table id="items_list">
                <tr><td>
                        <a href='/item/id/{$str.id_item}/'>
                            <img  width="130" height="130" src="/img/goods/crop/{$str.img}">
                        </a>
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
</div><br>
{if $PAGES!=0}
    <div id="rod_pagebar">
        <div class='pagebar'>
            <a href="/category/cat/{$CAT_NAME}/page/1/"><<</a>
            {if $PAGE!=1}
                <a href="/category/cat/{$CAT_NAME}/page/{$PAGE-1}/"><</a>
            {/if}
            {for $foo=$ALPHA to $OMEGA}
                {if $foo!=$PAGE}
                    <a href="/category/cat/{$CAT_NAME}/page/{$foo}/">{$foo}</a>
                {else}
                    <a id="current_page" href="/category/cat/{$CAT_NAME}/page/{$foo}/">{$foo}</a>
                {/if}
            {/for}
            {if $PAGE!=$PAGES}
                <a href="/category/cat/{$CAT_NAME}/page/{$PAGE+1}/">></a>
            {/if}
            <a href="/category/cat/{$CAT_NAME}/page/{$PAGES}/">>></a>
        </div>
    </div>
{/if}