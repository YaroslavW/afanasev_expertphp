/**
 * Функция добавления товара в корзину
 * 
 * @param integer itemId ID продукта
 * @returns в случае успеха обновляются данные корзины на странице
 */
function addToCart(itemId){
    $.ajax({ 
        type: "POST",
        async: false,
	url: "/cart/addtocart/" + itemId + "/",
	dataType: 'json', 
	success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
	}
    });
}


/**
 * Функция удаления товара из корзины
 * 
 * @param integer itemId ID продукта
 * @returns в случае успеха обновляются данные корзины на странице
 */
function removeFromCart(itemId){
    $.ajax({ 
        type: "POST",
        async: false,
	url: "/cart/removefromcart/" + itemId + "/",
	dataType: 'json', 
	success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_' + itemId).removeClass('hideme');
                $('#removeCart_' + itemId).addClass('hideme');
            }
	}
    }); 
}


/**
 * Подсчет стоимиости купленного товара
 * 
 * @param integer itemId ID продукта
 */
function conversionPrice(itemId){
    var newCnt = $('#itemCnt_' + itemId).val(),
        itemPrice = $('#itemPrice_' + itemId).attr('value'),
        itemRealPrice = newCnt * itemPrice;

    console.log(itemRealPrice);

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}
/**
 * Получение данных с формы
 * 
 */
function getData(obj_form){
    var hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if(this.name && this.name!=''){
            hData[this.name] = this.value;
            console.log('hData[' + this.name +'] = ' + hData[this.name]);
        }
    });
    
    
    
    return hData;
}


/**
 * Регистрация нового пользователя
 *
 */
function registerNewUser(){

    var postData = getData('#registerBox');
    
    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function(data){
            
            console.log(data);
            
            if(data['success']){
                
                alert('Регистрация прошла успешно');
                //> блок в левом столбце
                $('#registerBox').addClass('hideme');
                $('#loginBox').addClass('hideme');
                
                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']); 
                $('#userBox').removeClass('hideme');
                
                //<
                
                //> страница заказа
                /*
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                */
                //<
                
            }
            else{
                alert(data['message']);
            }
        }
    });
}

/**
 * Авторизация пользователя
 */
function login(){
    var email = $('#loginEmail').val();
    var pwd = $('#loginPwd').val();
    
    var postData = "email=" + email + "&pwd=" + pwd;
    
    
    
    $.ajax({
        type: 'POST',
        async: false,
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function(data){
            
            
            console.log(data);
            
            if(data['success']){
                
                $('#registerBox').addClass('hideme');
                $('#loginBox').addClass('hideme');
                
                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']); 
                $('#userBox').removeClass('hideme');
                        
            }
            else{
                alert(data['message']);
            }
        }
    });
}