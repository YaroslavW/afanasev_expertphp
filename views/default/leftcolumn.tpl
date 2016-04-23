
        
            <div id="leftColumn">
                <div id="leftMenu">
                    <div class="menuCaption">
                        <h3>Меню:</h3>
                        <ul>
                            {foreach $rsCategories as $item}
                                <li class="parent">
                                    <a href="/category/{$item['id']}/">{$item['name']}</a>
                                    {if isset($item['children'])}
                                        <ul>
                                        {foreach $item['children'] as $children}
                                            <li><a href="/category/{$children['id']}/">{$children['name']}</a></li>
                                        {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                </div>

                {if isset($arUser)}
                <div id="userBox" >
                    <a href="/user/" id="userLink">{$arUser['displayName']}</a><br/>
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>                
                {else}
                <div id="userBox" class="hideme">
                    <a href="#" id="userLink"></a><br/>
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>
                       
                <div id="loginBox" class="registerBox">
                     <div class="menuCaption">Авторизация</div>

                          <div class="form-group">
                            <label for="loginEmail">Email:</label>
                            <input type="email" class="form-control" name="loginEmail" id="loginEmail">
                          </div>
                          <div class="form-group">
                            <label for="loginPwd">Пароль:</label>
                            <input type="password" name="loginPwd" class="form-control" id="loginPwd">
                          </div>
                          <button type="button" onclick="login();return false;" class="btn btn-default">Войти</button>
                </div>
                        
                <div id="registerBox" class="registerBox">
                    <div class="menuCaption showHidden" onclick="showRegisterBox()">Регистрация</div>
                    
                    <div id="registerBoxHidden">
                        
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                          </div>
                          <div class="form-group">
                            <label for="pwd1">Пароль:</label>
                            <input type="password" name="pwd1" class="form-control" id="pwd1">
                          </div>
                          <div class="form-group">
                            <label for="pwd2">Повторить пароль:</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2">
                          </div>
                          <button type="button" onclick="registerNewUser();return false;" class="btn btn-default">Регистрация</button>
                      
                    </div>
                </div>
                {/if}        
                        
                <div class="cartCaption">
                    <h3>Корзина</h3>
                    <a href="/cart/" title="перейти вкорзину">В корзине</a>
                    <span id="cartCntItems">
                        {if $cartCntItems > 0}{$cartCntItems}{else}пусто{/if}
                    </span>
                </div>
            </div>

