    <form method = 'post' action = '/change-author' enctype="multipart/form-data" onsubmit="save('frameAuthName'); return save('frameAuthText');">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>
                    <br> <label>  Изменить изображение: </label><br><br>
                    <input name = "auth-image" type="file" accept="image/*,image/jpeg"><br>
                </td>
                <td>
                    <p> Вы можете изменить свое фото, которое находится в блоке "О нас" </p>
                </td>
            </tr>
            <tr>
                <td>
                    <label> Имя: </label> <br>
                    <p> <input type="hidden" id="contentframeAuthName" name="auth-name" value="" /> </p>

                    <script type="text/javascript">
                        /* Создаём код пустой HTML-страницы */
                        HTML = '<html><head></head><body style="border: 1px solid black; border-radius: 10px;padding: 5px;">' +
                            '{!! $auth->name !!} </body></html>';
                        editor(HTML, 'frameAuthName');
                    </script>
                </td>
                <td>
                    <p> В данном разделе вы можете изменить свое имя </p>
                </td>
            </tr>
            <tr>
                <td>
                    <label> Описание: </label> <br>
                    <p> <input type="hidden" id="contentframeAuthText" name="auth-text" value="" /> </p>

                    <script type="text/javascript">
                        /* Создаём код пустой HTML-страницы */
                        iHTML = '<html><head></head><body style="border: 1px solid black; border-radius: 10px;padding: 5px;">' +
                            '{!! $auth->text !!} </body></html>';
                        editor(iHTML, 'frameAuthText');
                    </script>

                    <input class="save_button" type = "submit" value="Сохранить">

                </td>
                <td>
                    <p> В данном разделе вы можете изменить описание, которое находится справа от вашей
                        фотографии. </p>
                    <p> Обратите внимание, что на мобильной версии будут показаны только 3 первых тезиса.</p>
                </td>
            </tr>

        </table>
    </form>
