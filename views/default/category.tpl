{* страница категории *}


<div class="row">
    <h1>Товары категории {$rsCategory['name']}</h1>
    
    {if $rsProducts|@count == 0}  
        <h2>Нет товаров</h2>
    
    {else}
        
        {foreach $rsProducts as $item }
            <div class="col-md-3 item-product">
                <a href="/product/{$item['id']}/">
                    <img src="/images/products/{$item['image']}" width="100">
                </a><br>
                <a href="/product/{$item['id']}/">{$item['name']}</a>
            </div>
        {/foreach}
    
    {/if}
    
    {foreach $rsChildCats as $item }
        <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
    {/foreach}
</div>