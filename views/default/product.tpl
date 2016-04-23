{* страница продукта *}
<div class="row">
    <h2>{$rsProduct['name']}</h2>
    <div class="col-md-6 detail-image">
        <img src="/images/products/{$rsProduct['image']}">
    </div>
        
   
    <div class="col-md-6">
        <p>Стоимость: {$rsProduct['price']}</p>

        
            <p>
                <a id="addCart_{$rsProduct['id']}" 
                   href="#" 
                   {if $itemInCart}class="hideme"{/if}  
                   onClick="addToCart({$rsProduct['id']}); return false;" 
                   alt="Добавить в корзину">
                   Добавить в корзину
                </a>
            </p>
            <p>
                <a id="removeCart_{$rsProduct['id']}" 
                   href="#" 
                   {if !$itemInCart}class="hideme"{/if} 
                   onClick="removeFromCart({$rsProduct['id']}); return false;" 
                   alt="Удалить из корзины">
                   Удалить из корзины
                </a>
            </p>

        
        <p>Описание <br />{$rsProduct['description']}</p>
    </div>
</div>