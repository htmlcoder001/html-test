<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="webtitov.ru">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
  <link rel="shortcut icon" href="" type="image/x-icon"/>
  <title>Тестовое задание</title>

  <link rel="stylesheet" href="css/common.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/fonts.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
</head>
<body>
<main>
  <!-- Intro -->
  <section class="intro">
    <div class="theme-wrapper intro-wrapper">
      <h1 class="intro-wrapper__heading">Lorem Ipsum</h1>
      <h2 class="intro-wrapper__subheading">Lorem Ipsum</h2>
      <p class="intro-wrapper__text">Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLo</p>
    </div>
  </section>
  <!-- Features -->
  <section>
    <div class="theme-wrapper features-wrapper">
      <h2 class="features-wrapper__heading">Наши преимущества </h2>
      <div class="features-wrapper__box">
        <div class="features-box__item">
          <img src="img/features/feature-1.jpg" alt="Feature 1" class="features-item__img">
          <p class="features-item__title">Lorem Ipsum</p>
        </div>
        <div class="features-box__item">
          <img src="img/features/feature-2.jpg" alt="Feature 1" class="features-item__img">
          <p class="features-item__title">Lorem Ipsum</p>
        </div>
        <div class="features-box__item">
          <img src="img/features/feature-3.jpg" alt="Feature 1" class="features-item__img">
          <p class="features-item__title">Lorem Ipsum</p>
        </div>
        <div class="features-box__item">
          <img src="img/features/feature-4.jpg" alt="Feature 1" class="features-item__img">
          <p class="features-item__title">Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Posts -->
  <section class="posts">
    <div class="theme-wrapper posts-wrapper">
      <!-- Posts item -->
      <div class="posts-wrapper__item">
        <div class="posts-item__head">
          <h2 class="posts-head__title">Lorem Ipsum</h2>
          <p class="posts-head__date"><?php echo date('d.m.Y'); ?></p>
        </div>
        <p class="posts-item__text --text-bold">Do play they miss give so up. Words to up style of since world. We leaf to snug on no need. Way own uncommonly travelling now acceptance bed compliment solicitude. Dissimilar admiration so terminated no in contrasted it. Advantages entreaties mr he apartments do. Limits far yet turned highly repair parish talked six. Draw fond rank form nor the day eat.</p>
        <p class="posts-item__text --text-bold">Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. Coming either suffer living her gay theirs. Furnished do otherwise daughters contented conveying attempted no. Was yet general visitor present hundred too brother fat arrival. Friend are day own either lively new.</p>
        <p class="posts-item__text --text-bold">Certainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it.</p>
      </div>
      <!-- Posts item -->
      <div class="posts-wrapper__item">
        <div class="posts-item__head">
          <h2 class="posts-head__title">Lorem Ipsum</h2>
          <p class="posts-head__date"><?php echo date("d.m.Y", strtotime("-1 months")); ?></p>
        </div>
        <p class="posts-item__text">Procuring education on consulted assurance in do. Is sympathize he expression mr no travelling. Preference he he at travelling in resolution. So striking at of to welcomed resolved. Northward by described up household therefore attention. Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.</p>
        <p class="posts-item__text">And produce say the ten moments parties. Simple innate summer fat appear basket his desire joy. Outward clothes promise at gravity do excited. Sufficient particular impossible by reasonable oh expression is. Yet preference connection unpleasant yet melancholy but end appearance. And excellence partiality estimating terminated day everything.</p>
        <p class="posts-item__text">Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor expression unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence. Steepest speaking up attended it as. Made neat an on be gave show snug tore.</p>
        <p class="posts-item__text">Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>
      </div>
    </div>
  </section>
  <!-- Form & Calc -->
  <section class="form">
    <div class="theme-wrapper form-wrapper">
      <button type="button" class="form-wrapper__calc calc-toggle" data-modal-toggle="calc">Калькулятор</button>
      <form action="" method="post" class="form-wrapper__box">
        <label for="form_name" class="form-box__label">
          <span class="form-label__text">Например, Ольга</span>
          <input required type="text" class="form-box__input" name="form_name" id="form_name" placeholder="Введите имя"/>
        </label>
        <label for="form_phone" class="form-box__label">
          <span class="form-label__text">Например, +79536573417</span>
          <input required type="tel" class="form-box__input" name="form_phone" id="form_phone" placeholder="Введите номер телефона"/>
        </label>
        <button type="button" class="form-box__submit" data-modal-toggle="callback">Заказать со скидкой</button>
      </form>
    </div>
  </section>
</main>
<!-- Modals -->
<div class="theme-overlay" data-modal-close></div>
<div class="theme-modal callback-modal" data-modal="callback">
  <span class="callback-modal__title">Спасибо за обращение!</span>
  <form class="callback-modal__confirm">
    <span class="callback-confirm__text">Проверьте еще раз ваши данные:</span>
    <label class="callback-confirm__row" for="callback_name">
      <span class="callback-row__title">Имя:</span>
      <input readonly type="text" name="form_name" id="callback_name" class="callback-row__input"/>
      <button type="button" class="callback-row__update"></button>
    </label>
    <label class="callback-confirm__row" for="callback_phone">
      <span class="callback-row__title">Телефон:</span>
      <input readonly type="tel" name="form_phone" id="callback_phone" class="callback-row__input"/>
      <button type="button" class="callback-row__update"></button>
    </label>
  </form>
  <p class="callback-modal__text">Наш специалист свяжется с вами</p>
</div>
<div class="theme-modal calc-modal" data-modal="calc">
  <div class="calc-modal__row --result-row">
    <input type="text" name="result" id="result" class="calc-modal__result" placeholder="0000" readonly />
  </div>
  <div class="calc-modal__row">
    <input class="calc-modal__button --button-ltgray" type="button" value="AC" onclick="result.value=''" id="clear-button" />
    <input class="calc-modal__button --button-ltgray" type="button" value="+/-" onclick="" />
    <input class="calc-modal__button --button-ltgray" type="button" value="%" onclick="" />
    <input class="calc-modal__button --button-blue" type="button" value="/" onclick="liveScreen('/')" />
  </div>
  <div class="calc-modal__row">
    <input class="calc-modal__button" type="button" value="7" onclick="liveScreen(7)" />
    <input class="calc-modal__button" type="button" value="8" onclick="liveScreen(8)" />
    <input class="calc-modal__button" type="button" value="9" onclick=" liveScreen(9)" />
    <input class="calc-modal__button --button-blue" type="button" value="x" onclick="liveScreen('*')" />
  </div>
  <div class="calc-modal__row">
    <input class="calc-modal__button" type="button" value="4" onclick=" liveScreen(4)" />
    <input class="calc-modal__button" type="button" value="5" onclick=" liveScreen(5)" />
    <input class="calc-modal__button" type="button" value="6" onclick=" liveScreen(6)" />
    <input class="calc-modal__button --button-blue" type="button" value="-" onclick="liveScreen('-')" />
  </div>
  <div class="calc-modal__row">
    <input class="calc-modal__button" type="button" value="1" onclick="liveScreen(1)" />
    <input class="calc-modal__button" type="button" value="2" onclick="liveScreen(2)" />
    <input class="calc-modal__button" type="button" value="3" onclick="liveScreen(3)" />
    <input class="calc-modal__button --button-blue" type="button" value="+" onclick="liveScreen('+')" />
  </div>
  <div class="calc-modal__row">
    <input class="calc-modal__button --button-zero" type="button" value="0" onclick="liveScreen(0)" />
    <input class="calc-modal__button" type="button" value="." onclick="liveScreen(',')" />
    <input class="calc-modal__button --button-blue" type="button" value="=" onclick="calculate(result.value)" />
  </div>
</div>

<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.mask.min.js'></script>
<script type='text/javascript' src='js/calc.js'></script>
<script type='text/javascript' src='js/main.js'></script>
</body>
</html>