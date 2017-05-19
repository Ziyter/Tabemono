{if $row|@count>0}
<h5>По запросу "{$QUERY}" найдены следующие товары:</h5>
{else}
<h5>По запросу "{$QUERY}" ничего не найдено.</h5>
{/if}
{include file='list_items.tpl'}