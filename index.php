<? require_once 'incl/config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="media/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title><?=$config['title']?> | Main</title>
</head>
<body>
    <div class="container">
        <form action="core/FORM_SendData.php" method="post" enctype='multipart/form-data' >
            <h1>Вариант №3</h1><br>
            <label for="name_and_surname">Фамилия и Имя</label>
            <input type="text" name="name_and_surname" require><br>

            <h3>Один или более тегов открывают блок с "Выпадающим списком"</h3>
            <p class="form__small-tip">Выберите те которые считаете правильными</p>

            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="checkbox" name="first_question[]" value="&lt;input&gt;"/>
                    <label for="first_question[]">&lt;input&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="first_question[]" value="&lt;select&gt;"/>
                    <label for="first_question[]">&lt;select&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="first_question[]" value="&lt;ol&gt;"/>
                    <label for="first_question[]">&lt;ol&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="first_question[]" value="&lt;li&gt;"/>
                    <label for="first_question[]">&lt;li&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="first_question[]" value="&lt;option&gt;"/>
                    <label for="first_question[]">&lt;option&gt;</label>
                </div>
            </div>

            <h3>Какой тег создаёт ячейку заголовка таблицы</h3>

            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="radio" name="second_question" value="&lt;ol>&lt;/ol&gt;"/>
                    <label for="second_question">&lt;ol&gt;&lt;/ol&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="second_question" value="&lt;th>&lt;/th&gt;"/>
                    <label for="second_question">&lt;th&gt;&lt;/th&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="second_question" value="&lt;h1>&lt;/h1&gt;"/>
                    <label for="second_question">&lt;h1&gt;&lt;/h1&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="second_question" value="&lt;hr&gt;"/>
                    <label for="second_question">&lt;hr&gt;</label>
                </div>
            </div>

            <h3>Какой тег отвечает за ряд таблицы?</h3>

            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="radio" name="third_question" value="&lt;td>&lt;/td&gt;"/>
                    <label for="third_question">&lt;td&gt;&lt;/td&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="third_question" value="&lt;tr>&lt;/tr&gt;"/>
                    <label for="third_question">&lt;tr&gt;&lt;/tr&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="third_question" value="&lt;th>&lt;/th&gt;"/>
                    <label for="third_question">&lt;th&gt;&lt;/th&gt;</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="third_question" value="&lt;tbody>&lt;/tbody&gt;"/>
                    <label for="third_question">&lt;tbody&gt;&lt;/tbody&gt;</label>
                </div>
            </div>

            <h3>Какая из программ позволит генерировать код для 2FA авторизации в соц. сетях</h3>

            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="checkbox" name="fourth_question[]" value="steam guard"/>
                    <label for="fourth_question[]">Steam Guard</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="fourth_question[]" value="yandex key"/>
                    <label for="fourth_question[]">Яндекс Ключ</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="fourth_question[]" value="free otp"/>
                    <label for="fourth_question[]">FreeOTP</label>
                </div>
                <div class="answers-container__answer">
                    <input type="checkbox" name="fourth_question[]" value="last pass"/>
                    <label for="fourth_question[]">LastPass</label>
                </div>
            </div>

            <h3>В социальной сети попадается пост с распродажей того что вам хочется, что вы сделаете?</h3>

            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="radio" name="fifth_question" value="Сделаю заказ так как идёт таймер отсчёта и осталось 4 часа"/>
                    <label for="fifth_question">Сделаю заказ так как идёт таймер отсчёта и осталось 4 часа</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="fifth_question" value="Сравню цены на других ресурсах"/>
                    <label for="fifth_question">Сравню цены на других ресурсах</label>
                </div>
                <div class="answers-container__answer">
                    <input type="radio" name="fifth_question" value="Почитаю отзывы на других ресурсах, и сравню цены"/>
                    <label for="fifth_question">Почитаю отзывы на других ресурсах, и сравню цены</label>
                </div>
            </div>

            <h3>Ваш файл</h3>
            <div class="form__answers-container">
                <div class="answers-container__answer">
                    <input type="file" name="file_answer" id="file_answer" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</body>
</html>