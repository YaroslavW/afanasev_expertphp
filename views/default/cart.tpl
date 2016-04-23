{* Шаблон корзины *}

<h1>Корзина</h1>

{if ! $rsProducts}
    В корзине пусто
{else}
    <table class="table">
    <thead>
      <tr>
        <th>Номер</th>
        <th>Наименование</th>
        <th>Количество</th>
        <th>Цена за единицу</th>
        <th>Цена</th>
        <th>Действие</th>
      </tr>
    </thead>
    <tbody>
      {foreach key=key item=item from=$rsProducts}  
      <tr>
        <td>{$key+1}</td>
        <td><a href="/product/{$item['id']}/">{$item['name']}</td>
        <td>
            <input type="text" 
                   value="1" 
                   name="itemCant_{$item['id']}" 
                   id="itemCnt_{$item['id']}" 
                   onchange="conversionPrice({$item['id']})">
        </td>
        <td>
            <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                {$item['price']}
            </span>
        </td>
        <td>
            <span id="itemRealPrice_{$item['id']}" >
                {$item['price']}
            </span>
        </td>
        <td>
            <a id="removeCart_{$item['id']}" 
               href="#" 
               onclick="removeFromCart({$item['id']}); return false;" 
               title='Удалить'>
               Удалить
            </a>
            <a id="addCart_{$item['id']}" 
               href="#" 
               class="hideme"
               onclick="addToCart({$item['id']}); return false;" 
               title='Восстановить'>
               Восстановить
            </a>
        </td>
      </tr>
      {/foreach}
    </tbody>
  </table>  
  
{/if}