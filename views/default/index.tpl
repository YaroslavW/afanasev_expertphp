{* шаблон главной страницы *}


<div class="row">
    {foreach $rsProducts as $item }
        <div class="col-md-3 item-product">
            <a href="/product/{$item['id']}/">
                <img src="/images/products/{$item['image']}" width="100">
            </a><br>
            <a href="/product/{$item['id']}/">{$item['name']}</a>
        </div>
    {/foreach}
</div>
    

