<div id="item_div">
    {if $row|@count==1}
        <h3>Товар не найден</h3>
    {else}
        <h4>{$row.name}</h4>
        <div class="row">
            <div class=" col-12  col-md-8 ">
                <img src="/img/goods/{$row.img}" width=100%>
            </div>
            <div id="info_item" class="col-12 col-md-4 ">
                <h5>Описание</h5>
                {if $row.description===''}
                    Описание отсутствует
                {else}
                    {$row.description}
                {/if}
                <h5>Состав</h5>
                {if $row.composition===''}
                    Информация о составе отсутствует
                {else}
                    {$row.composition}
                {/if}<br>
                <span id="price">{$row.price} <f class="rubl">о</f> </span>
                <div id_item="{$row.id_item}" act='1' class="icons plus addkorz">Добавить</div>
            </div>
        </div>
    {/if}
</div>