<? require_once 'incl/config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$config['title']?> | Main</title>
</head>
<body>
    <form action="core/FORM_SendData.php">
        <h2>Вариант №3</h2><br>
        <label for="name_and_surname">Фамилия и Имя</label>
        <input type="text" name="name_and_surname"><br>

        <h3 for="">Один или более тегов открывают блок с "Выпадающим списком"</h3>
        <p class="form__small-tip">Выберите те которые считаете правильными</p>

        <div class="form__answers-container">
            <div class="answers-container__answer">
                <input type="checkbox" id="input_answ" name="input_answer"/>
                <label for="input_answer">&lt;input&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="checkbox" id="select_answer" name="select_answer"/>
                <label for="select_answer">&lt;select&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="checkbox" id="ol_answer" name="ol_answer"/>
                <label for="ol_answer">&lt;ol&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="checkbox" id="li_answer" name="li_answer"/>
                <label for="li_answer">&lt;li&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="checkbox" id="option_answ" name="option_answ"/>
                <label for="option_answ">&lt;option&gt;</label>
            </div>
        </div>

        <h3 for="">Какой тег создаёт ячейку заголовка таблицы</h3>

        <div class="form__answers-container">
            <div class="answers-container__answer">
                <input type="radio" name="second_question"/>
                <label for="second_question">&lt;ol&gt;&lt;/ol&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="second_question"/>
                <label for="second_question">&lt;th&gt;&lt;/th&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="second_question"/>
                <label for="second_question">&lt;h1&gt;&lt;/h1&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="second_question"/>
                <label for="second_question">&lt;hr&gt;</label>
            </div>
        </div>

        <h3 for="">Какой тег отвечает за ряд таблицы?</h3>

        <div class="form__answers-container">
            <div class="answers-container__answer">
                <input type="radio" name="third_question"/>
                <label for="third_question">&lt;td&gt;&lt;/td&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="third_question"/>
                <label for="third_question">&lt;tr&gt;&lt;/tr&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="third_question"/>
                <label for="third_question">&lt;th&gt;&lt;/th&gt;</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="third_question"/>
                <label for="third_question">&lt;tbody&gt;&lt;/tbody&gt;</label>
            </div>
        </div>

        <h3 for="">Какая из программ позволит генерировать код для 2FA авторизации в соц. сетях</h3><br>

        

        <h3 for="">В социальной сети попадается пост с распродажей того что вам хочется, что вы сделает?</h3><br>

        <div class="form__answers-container">
            <div class="answers-container__answer">
                <input type="radio" name="fourth_question"/>
                <label for="fourth_question">Сделаю заказа так как идёт таймер отсчёта и осталось 4 часа</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="fourth_question"/>
                <label for="fourth_question">Сравню цены на других ресурсах</label>
            </div>
            <div class="answers-container__answer">
                <input type="radio" name="fourth_question"/>
                <label for="fourth_question">Почитаю отзывы на других ресурсах, и сравню цены</label>
            </div>
        </div>
    </form>
</body>
</html>