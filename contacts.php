<?php include('parts/header-contacts.php'); ?>

<div class="wrapper-contacts">
    <div class="contacts">
        <div class="contacts-h1">Контакты</div>
        <div class="contacts-text">
            <p class="contacts-text-p">Мы - команда тех, кто любит историю и любит Москву.</p>
            <p class="contacts-text-p">Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и  бесконечно красивые памятники природы, заказники, парки, заповедники. <br>
                Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда- нибудь в «дебри», навстречу приключениям. К счастью, не <br>
                все Подмосковье еще «облагорожено»  асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места,  настолько глухие и далекие, что,<br>
                очутившись там, кажется, что ты – первый человек, ступивший на эту землю. </p>
            <p class="contacts-text-p">Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все <br>
                красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
        </div>
    </div>
    <div class="staff">
        <div class="staff-box">
            <div class="staff-box-photo" style="background-image: url(/images/photos/man.jpg);"></div>
            <div class="staff-box-block">
                <div class="staff-box-block-h1">Александр Рыбаков</div>
                <div class="staff-box-block-h4">директор</div>
                <div class="staff-box-block-p">По всем вопросам пешите на почту:</div>
                <div class="staff-box-block-a">rybakov@mymoscow.ru</div>
            </div>
        </div>
        <div class="staff-box">
        <div class="staff-box-photo" style="background-image: url(/images/photos/woman.jpg);" ></div>
            <div class="staff-box-block">
                <div class="staff-box-block-h1">Елена Белкина</div>
                <div class="staff-box-block-h4">руководитель корпаротивного отдела</div>
                <div class="staff-box-block-p">По вопросам корпоративных экскурсий:</div>
                <div class="staff-box-block-a">belkina@mymoscow.ru</div>
            </div>
        </div>       
    </div>
    <div class="inform">
        <div class="inform-add">
            <div class="inform-add-block">
                <div class="inform-add-block-photo" style="background-image: url(/images/icons/placeholder.png);"></div>
                <p class="inform-add-block-p">Москва, <br> Большая Спасская 12</p>
            </div>
            <div class="inform-add-block">
                <div class="inform-add-block-photo" style="background-image: url(/images/icons/mail.png);"></div>
                <p class="inform-add-block-p">E-mail: <br> info@mymoscow.ru</p>
            </div>
            <div class="inform-add-block">
                <div class="inform-add-block-photo" style="background-image: url(/images/icons/telephone.png);"></div>
                <p class="inform-add-block-p">Телефон: <br> 8 (495) 626-46-00</p>
            </div>
        </div>
        <div class="inform-form">
            <form class="inform-form-inner" action="form.php" method="POST">
            <div class="inform-form-inner-column">
                <input type="text" name="fio" placeholder="ФИО" class="inform-form-inner-column-fio">
                <input type="email" name="email" placeholder="Email" class="inform-form-inner-column-email">
                <textarea name="message" placeholder="Ваше сообщение" class="inform-form-inner-column-message"></textarea>
                <button  class="inform-form-inner-column-submit">Отправить</button>                  
            </div>
            </form>
        </div>
            
    </div> 
    <div class="map">
    <script  type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af812ab246a3b5845264112e94e007f345297655a62239565ce40d6e10ca1ca94&amp;width=100%&amp;height=486&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
    
</div>

<?php include('parts/footer.php'); ?>