var main = function() {
    $("#togMy").click(function() {
        $(".register").toggle();
    });
};

$(document).ready(main);


// Регистация нового пользователя
function registerNewUser()
{
    var postData = $('form').serializeArray();

    $.ajax({
            type: 'POST',
            async: false,
            url: "/user/register/",
            data: postData,
            dataType: 'json',
            success: function(data)
            {
                if(data['success'])
                {
                    alert('Регистрация прошла успешно!');
                }else
                {
                    alert(data['message']);
                }
            }

        }
    )
}

// Авторизация пользователя
function login()
{
    var postData = $('form').serializeArray();

    $.ajax({
            type: 'POST',
            async: false,
            url: "/user/login/",
            data: postData,
            dataType: 'json',
            success: function(data)
            {
                if(data['success'])
                {
                    $('#rghid').hide();
                    alert('Авторизация прошла успешно');

                }else
                {
                    alert(data['Аторизироваться не получилось']);
                }
            }

        }
    )
}