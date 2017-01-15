<!DOCTYPE HTML>
<html>
<head>
    <title>PhpAjaxChat</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" media="screen" href="css/mystyle.css" />

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/ajaxWork.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $("#pac_form").submit(Send); // вешаем на форму с именем и сообщением событие которое срабатывает когда нажата кнопка "Отправить" или "Enter"
            $("#pac_text").focus(); // по поле ввода сообщения ставим фокус
            //setInterval("Load();", 2000); // создаём таймер который будет вызывать загрузку сообщений каждые 2 секунды (2000 миллисекунд)
        });

        // Функция для отправки сообщения
        
    </script>

<body>


<div style="padding: 100px;">
    <h1>Php Ajax Chat</h1>
    <!-- Вот в этих 2-х div-ах будут идти наши сообщения из чата -->
    <div class="chat r4">
        <div id="mess_area"><!-- Сюда мы будем добавлять новые сообщения --></div>
    </div>
    <form id="pac_form" action=""><!-- Наша форма с именем, сообщением и кнопкой для отправки -->
        <table style="width: 100%;">
            <tr>
                <td>Имя*</td>
                <td>E-mail*</td>
                <td>Комментарий</td>
                <td></td>
            </tr>
            <tr>
                <!-- Поле ввода имени -->
                <td><input type="text" id="pac_name" class="r4" value="Гость"></td>
                <td><input type="text" id="pac_mail" class="r4" value=""></td>
                <!-- Поле ввода сообщения -->
                <td style="width: 80%;"><input type="text" id="pac_text" class="r4" value=""></td>

                <!-- Кнопка "Отправить" -->
                <td><input type="submit" value="Отправить"></td>
            </tr>
        </table>
    </form>

</div>
</body>
</html>