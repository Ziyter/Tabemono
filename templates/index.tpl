<div class="owl-carousel owl-theme">
    {foreach from=$ROW_SETS item=str}
    <div class="item"><a href="/item/id/{$str.id_item}/"><img src="/img/goods/{$str.img}"></a></div>
    {/foreach}
</div>
<h4> Новинки:</h4><br>
{include file='list_items.tpl'}



