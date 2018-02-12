<script type="text/javascript">
    var iWin;
    var iDoc;

    function editor(iHTML, id) {
        document.write("<input type='button' value='B' onclick='setBold(\""+id+"\")' />");
        document.write("<input type='button' value='I' onclick='setItal(\""+id+"\")' />");
        document.write("<br>");
        document.write("<iframe scrolling='no' src='#' id='"+id+"' name='"+id+"'></iframe>"); // Добавляем iframe

        /* В зависимости от браузера получаем доступ к созданному фрейму */
        var isGecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
        var iframe = (isGecko) ? document.getElementById(id) : frames[id];
        iWin = (isGecko) ? iframe.contentWindow : iframe.window;
        iDoc = (isGecko) ? iframe.contentDocument : iframe.document;

        iDoc.open(); // Открываем фрейм
        iDoc.write(iHTML); // Добавляем написанный код в фрейм
        iDoc.close(); // Закрываем фрейм
        iDoc.designMode = "on"; // Включаем режим редактирования фрейма
    }
    /* Функции для задания внешнего вида выделенного текста
    Полный набор возможных команд: http://javascript.itsoft.ru/execcom/execCommands.html */
    function setBold(id) {
        var isGecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
        var iframe = (isGecko) ? document.getElementById(id) : frames[id];
        iWin = (isGecko) ? iframe.contentWindow : iframe.window;
        iDoc = (isGecko) ? iframe.contentDocument : iframe.document;
        iWin.focus();
        iWin.document.execCommand("bold", null, "");
    }

    function setItal(id) {
        var isGecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
        var iframe = (isGecko) ? document.getElementById(id) : frames[id];
        iWin = (isGecko) ? iframe.contentWindow : iframe.window;
        iDoc = (isGecko) ? iframe.contentDocument : iframe.document;
        iWin.focus();
        iWin.document.execCommand("italic", null, "");
    }

    function save(id) {
        /* В зависимости от браузера получаем доступ к созданному фрейму */
        var isGecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
        var iframe = (isGecko) ? document.getElementById(id) : frames[id];
        iWin = (isGecko) ? iframe.contentWindow : iframe.window;
        iDoc = (isGecko) ? iframe.contentDocument : iframe.document;

        /* Сохранение HTML-кода в поле hidden, чтобы потом можно было передать полученный HTML-код в скрипт-обработчик */
        document.getElementById("content"+id).value = iDoc.body.innerHTML.replace(/<div[^<]*?>/g, '<br>').replace(/<\/div[^<]*?>/g, '');
        return true;
    }
</script>

<form method = 'post' action = '/change-header' enctype="multipart/form-data" onsubmit="return save('frameHeaderDesc');">
    {{ csrf_field() }}
    <table>
        <tr>
            <td>
                <label> Описание: </label> <br>
                <p> <input type="hidden" id="contentframeHeaderDesc" name="main-desc" value="" /> </p>

                <script type="text/javascript">
                    /* Создаём код пустой HTML-страницы */
                    iHTML = '<html><head></head><body style="border: 1px solid black; border-radius: 10px;padding: 5px;">' +
                        '{!! $info->description !!} </body></html>';
                    editor(iHTML, 'frameHeaderDesc');
                </script>
            </td>
            <td>
                <p> В данном разделе вы можете изменить описание, которое находится на шапке сайта. <br>
                    У вас есть возможность сделать текст жирным или курсивным, используя соответствующие кнопки.</p>
            </td>
        </tr>

        <tr>
            <td>
                <br> <label>  Добавить изображение: </label><br><br>
                <input name = "main-image" type="file" accept="image/*,image/jpeg"><br>
            </td>
            <td>
                <p> Добавьте изображения, которые вы хотели бы использовать, как фон шапки.
                    Это избавит вас от необходимости загружать их каждый раз с компьютера.
                    Добавленные изображения вы увидите ниже после того, как нажмете "Сохранить".
                    Все они должны быть хорошего качества.</p>
            </td>
        </tr>

        <tr>
            <td>
                <label>  Изменить изображение: </label>
                @foreach ($main_photos as $main_photo)
                    <div class="radio">
                        <input type="radio" id="radio" name="radio-photo" value="{{ $main_photo->photo }}">
                        <img width="300" height="200" src="{{asset('/images/header/'.$main_photo->photo)}}" alt="">
                        <button onclick="del(this.parentElement.getElementsByTagName('input')[0])"
                                class="glyphicon glyphicon-remove"> </button>
                    </div>
                @endforeach

                <script>
                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }})

                    function del(el) {
                        var val = el.value;
                        $.post('/del_photo', {id:val})}
                </script>

                <input class="save_button" type = "submit" value="Сохранить">
            </td>
            <td>
                <p> В данном разделе вы видете все изображения, загруженные вами раннее. Вы можете сделать любое изображение фоновым для шапки,
                    а также удалить его из этого списка, нажав на крестик.</p>
                <p> Выполнив все необходимые изменения, нужно нажать кнопку "Сохранить",
                    только после этого действия данные обновлятся.</p>
            </td>
        </tr>

    </table>
</form>