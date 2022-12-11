<?php 
  echo get_header();
?>

    <div id="popup" class="popup-quiz">
      <div class="popup__content">
        <div class="question-container">
          <div class="question-1">
            <h1>Вопрос 1:</h1>
            <h4>Укажите вашу должность</h4>
            <form class="popup-question" action="" method="post">
              <div class="form__group form-section__input-container">
                <input
                  type="text"
                  class="form__input form-section__input"
                  placeholder="Должность"
                  id="user-position-block"
                  required
                />
                <label for="company-middle-block" class="form__label">Должность</label>
              </div>

              <div class="control-panel">
                <div class="form__group centered">
                  <button id="nextQuestionBtn" class="btn btn--green nextQuestionBtn">Далее &rarr;</button>
                </div>
                <h4 class="discount">Скидка 0%</h4>
                <div class="form__group centered">
                  <button id="quizCancelBtn" class="btn btn--green quizCancelBtn">Отмена</button>
                </div>
              </div>
      
            </form>
          </div>

          <div class="question-2">
            <h1>Вопрос 2:</h1>
            <h4>Сколько человек в вашей компании</h4>
            <form class="popup-question" action="" method="post">
              <div class="form__group form-section__input-container">
                <input
                  type="text"
                  class="form__input form-section__input"
                  placeholder="Человек в компании"
                  id="company-employees-block"
                  required
                />
                <label for="company-middle-block" class="form__label">Человек в компании</label>
              </div>

              <div class="control-panel">
                <div class="form__group centered">
                  <button id="nextQuestionBtn" class="btn btn--green nextQuestionBtn">Далее &rarr;</button>
                </div>
                <h4 class="discount">Скидка 5%</h4>
                <div class="form__group centered">
                  <button id="quizCancelBtn" class="btn btn--green quizCancelBtn">Отмена</button>
                </div>
              </div>
      
            </form>
          </div>

          <div class="question-3">
            <h1>Спасибо!</h1>
            <h4>Наш менеджер свяжется с вами в ближайшее рабочее время.</h4>
            <img src="<?= get_theme_file_uri('assets/done.png'); ?>" alt="Готово! Мы скоро с Вами свяжемся" srcset="  " class="done_img">
            <div class="control-panel">
              <div class="form__group centered">
                <button id="nextQuestionBtn" class="btn btn--green nextQuestionBtn">Далее &rarr;</button>
              </div>
              <h4 class="discount">Скидка 10%</h4>
              <div class="form__group centered">
                <button id="quizCancelBtn" class="btn btn--green quizCancelBtn">Отмена</button>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="discount-progress-bar"></div>
      </div>
    </div>

    <div id="order_popup" class="popup-quiz">
      <div class="popup__content">
        <div class="order_in_progress">
          <h1>Пожалуйста заполните анкету</h1>
          <h4>Чтобы наш менеджер смог с Вами связаться</h4>
          <form class="popup-question" action="" method="post">
            <div class="form__group form-section__input-container">
              <input
                type="text"
                class="form__input form-section__input"
                placeholder="Наименование компании"
                id="order__company-name"
                required
              />
              <label for="company-middle-block" class="form__label">Наименование компании</label>

              <input
                type="text"
                class="form__input form-section__input"
                placeholder="Номер телефона"
                id="order__phone-number"
                required
              />
              <label for="company-middle-block" class="form__label">Номер телефона</label>

              <div class="control-panel btns-distance" >
                <div class="form__group centered">
                  <button id="orderConfirmBtn" type="submit" class="btn btn--green orderConfirmBtn">Заказать</button>
                </div>
                <div class="form__group centered">
                  <button id="orderCancelBtn" class="btn btn--green orderCancelBtn">Отмена</button>
                </div>
              </div>
            </div>

          </form>
        </div>
        <div class="order_confirmed order-hidden">
          <h1>Спасибо!</h1>
          <h4>Наш менеджер свяжется с вами в ближайшее рабочее время.</h4>
          <form class="popup-question" action="" method="post">
            <img src="<?= get_theme_file_uri('assets/done.png'); ?>" alt="Готово! Мы скоро с Вами свяжемся" srcset="  " class="done_img">
            <div class="control-panel btns-centered" >
              <div class="form__group centered">
                <button id="orderConfirmedClose" type="submit" class="btn btn--green orderConfirmBtn">Закрыть</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="menu-section">
      <div class="container-xxl ">
        <div class="row grid-row">
          <div class="col col-lg-4 col-md-6 col-sm-3">
            <a href="" class="menu-bar__logo"><img src="<?= get_theme_file_uri('assets/logo-barbaris.png'); ?>" alt="Логотип" class="menu-bar__logo-image" srcset=""></a>
          </div>
          <div class="col col-md-4 navigation-column">
            <ul class="menu-bar__navigation">
              <li>
                <a  href="#advantages" 
                  ><span class="Centerer"></span
                  ><span class="Centered">О нас</span></a
                >
              </li>
              <li>
                <a href="#workflow" "
                  ><span class="Centerer"></span
                  ><span class="Centered">Условия</span></a
                >
              </li>
              <li>
                <a href="#testimonials"
                  ><span class="Centerer"></span
                  ><span class="Centered">Отзывы</span></a
                >
              </li>
              <li>
                <a href="#footer" 
                  ><span class="Centerer"></span
                  ><span class="Centered">Контакты</span></a
                >
              </li>
            </ul>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-9 menu-row__contacts">
            <div class="menu-bar__contacts">
              <a href="tel:+77012770566" class="menu-bar__tel">+7 (701) 277-05-66</a>
              <span class="menu-bar__social-network call_icon"><a target="_blank" href="tel:+77012770566"><img src="<?= get_theme_file_uri('assets/telephone-call.png'); ?>" alt="Позвонить" class="menu-bar__social-media" srcset=""></a></span>
              <span class="menu-bar__social-network"><a target="_blank" href="https://api.whatsapp.com/send?phone=77012770566&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D0%A5%D0%BE%D1%87%D1%83%20%D1%83%D0%B7%D0%BD%D0%B0%D1%82%D1%8C%20%D0%BF%D1%80%D0%BE%20%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%81%D0%BD%D1%8B%D0%B5%20%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B%20%D0%B2%20%D0%BE%D1%84%D0%B8%D1%81"><img src="<?= get_theme_file_uri('assets/wp.png'); ?>" alt="Ссылка на What's app" class="menu-bar__social-media" srcset=""></a></span>
              <span class="menu-bar__social-network"><a target="_blank" href="https://www.instagram.com/barbaris_masterfood/"><img src="<?= get_theme_file_uri('assets/inst.png'); ?>" alt="Ссылка на Instagram" class="menu-bar__social-media" srcset=""></a></span>
                
              <div class="navigation-hamburger">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
              </div>
            </div>
          </div>
          <!-- <div class="col col-md-1 hamburger_column">
            <div class="navigation-hamburger">
              <span class="hamburger__line"></span>
              <span class="hamburger__line"></span>
              <span class="hamburger__line"></span>
            </div>
              
          </div> -->
        </div>
      </div>
    </div>

    <nav class="main-section__nav nav-menu">
          <ul class="nav-menu__list">
          <li>
                <a  href="#advantages" 
                  ><span class="Centerer"></span
                  ><span class="Centered">О нас</span></a
                >
              </li>
              <li>
                <a href="#workflow" "
                  ><span class="Centerer"></span
                  ><span class="Centered">Условия</span></a
                >
              </li>
              <li>
                <a href="#testimonials"
                  ><span class="Centerer"></span
                  ><span class="Centered">Отзывы</span></a
                >
              </li>
              <li>
                <a href="#footer" 
                  ><span class="Centerer"></span
                  ><span class="Centered">Контакты</span></a
                >
              </li>
          </ul>
    </nav>

    <div class="main_block-section">
      
      <div class="bg-video">
      </div>

      <div class="main_block__content">
        <div class="main-block__content__card">
          <h1>Доставляем комплексные обеды <br><span>в офисы Астаны</span></h1>
          <p>
            Пройдите опрос и получите пробный день со скидкой в 10%.
          </p>
          <form class="form">
            <div class="form__group" style="margin-bottom: .8rem;">
              <input
                type="tel"
                class="form__input phone-input"
                placeholder="Наименование компании"
                id="company-first-block"
                required
              />
              <label id="company-first-block-label" for="company-first-block" class="form__label">Наименование компании</label>
            </div>
            <div class="form__group" style="margin-bottom: .8rem;">
              <input
                type="tel"
                class="form__input phone-input"
                placeholder="Номер телефона"
                id="phone-first-block"
                required
              />
              <label id="phone-first-block-label" for="phone-first-block" class="form__label">Номер телефона</label>
            </div>
            <button id="mainBlock" class="btn quiz-btn">Получить скидку</button>
          </form>
        </div>
      </div>
    </div>

    <div class="our-advantages-section">
      
      <div id="advantages" style="position: absolute; top: -9.5rem; width: 1px; height: 1px; background-color: transparent; content: '';"></div>
      <h1 class="our-advantages__header">Выбирайте Барбарис</h1>
      <div class="our-advantages__card">

        <div class="our-advantages__container-left">
          <div class="our-advantages__points">
            <div class="our-advantages__point">
              <div><img src="<?= get_theme_file_uri('assets/carrot.png'); ?>" alt="Свежая морковь" srcset="" /></div>
              <p>
                Повар лично отбирает свежие продукты каждое утро
              </p>
            </div>

            <div class="our-advantages__point">
              <div><img src="<?= get_theme_file_uri('assets/clock-icon.png'); ?>" alt="Время 5:00" srcset="" /></div>
              <p>
                Не делаем заготовок! Готовим день в день
              </p>
            </div>

            <div class="our-advantages__point mobile_only">
              <div><img src="<?= get_theme_file_uri('assets/shipped.png'); ?>" alt="Грузовик доставки" srcset="" /></div>
              <p>
              Наша доставка привозит в удобное вам время
              </p>
            </div>

            <div class="our-advantages__point mobile_only">
              <div><img src="<?= get_theme_file_uri('assets/menu.png'); ?>" alt="Меню ресторана" srcset="" /></div>
              <p>
                Новое полноценное меню на каждый день
              </p>
            </div>
          </div>
        </div>

        <div class="our-advantages__container-right">
          <div class="our-advantages__points flex-end">
              <div class="our-advantages__point">
                <p>
                  Наша доставка привозит в удобное вам время
                </p>
                <div><img src="<?= get_theme_file_uri('assets/shipped.png'); ?>" alt="Грузовик доставки" srcset="" /></div>
              </div>

              <div class="our-advantages__point">
                <p>
                  Новое полноценное меню на каждый день
                </p>
                <div><img src="<?= get_theme_file_uri('assets/menu.png'); ?>" style="height: 50px; width: 50px; margin-left: 5px; margin-right: 5px;" alt="Меню ресторана" srcset="" /></div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-photo-section">
      <div class="bg-photo__content">
        <form class="bg-photo-section__form" action="" method="post">
          <div class="form__group form-section__input-container">
            <input
              type="text"
              class="form__input form-section__input phone-input"
              placeholder="Наименование компании"
              id="company-middle-block"
              required
            />
            <label for="company-middle-block" class="form__label">Наименование компании</label>
          </div>
  
          <div class="form__group form-section__input-container">
            <input
              type="tel"
              class="form__input form-section__input phone-input"
              placeholder="Номер телефона"
              id="phone-middle-block"
              required
            />
            <label id="phone-middle-block-label" for="phone-middle-block" class="form__label">Номер телефона</label>
          </div>
  
          <div class="form__group centered">
            <button id="middleBlock" class="btn btn--green btn-big quiz-btn">Заказать</button>
          </div>
        </form>
      </div>
    </div>

    <div class="workflow-section">
      <div id="workflow" style="position: absolute; top: -4rem; width: 1px; height: 1px; background-color: transparent; content: '';"></div>
      <h1 class="workflow__header">Этапы работ</h1>

      <div class="workflow__container">
        <img src="<?= get_theme_file_uri( 'assets/road.png' ) ?>" class="road-img" alt="" srcset="" />

        <div class="stage-1 stage-container">
          <div class="stage-details details-1"></div>
          <img
            src="<?= get_theme_file_uri( 'assets/road-stage.png' ) ?>"
            class="stage-img stage-img-1"
            alt="Этап 1"
            srcset=""
          />
          <span class="stage-note note-1">Опрос</span>
        </div>

        <div class="stage-2 stage-container">
          <div class="arrow-feature">
            <span>Узнать больше</span>
            <img src="<?= get_theme_file_uri( 'assets/arrow-xfat.png' ) ?>" alt="Узнать больше" srcset="">
          </div>
          <div class="stage-details details-2"></div>
          <img
            src="<?= get_theme_file_uri( 'assets/road-stage.png' ) ?>"
            class="stage-img stage-img-2"
            alt="Этап 2"
            srcset=""
          />
          <span class="stage-note note-2">Заказ</span>
        </div>

        <div class="stage-3 stage-container">
          <div class="stage-details details-3"></div>
          <img
            src="<?= get_theme_file_uri( 'assets/road-stage.png' ) ?>"
            class="stage-img stage-img-3"
            alt="Этап 3"
            srcset=""
          />
          <span class="stage-note note-3">Пробный день</span>
        </div>

        <div class="stage-4 stage-container">
          <div class="stage-details details-4"></div>
          <img
            src="<?= get_theme_file_uri( 'assets/road-stage.png' ) ?>"
            class="stage-img stage-img-4"
            alt="Этап 4"
            srcset=""
          />
          <span class="stage-note note-4">Договор</span>
        </div>
      </div>
    </div>

    <div class="section-tarifs-container">
      <h1 class="tarifs__header">То, что подходит именно Вам!</h1>
      <div class="tarifs-section">

        <div class="tarif-card">
          <div class="tarif-image"></div>
          <div class="tarif-card__info">

            <div class="tarif-card__info-content">
              <h3 class="tarif__card-header">Минимальный</h3>
              <p class="tarif__card-text">Состав:</p>
              <dl>
                <dt>Второе</dt><dd>400гр.*</dd>
                <dt>Салат</dt><dd>100-150гр.*</dd>
              </dl>
              <p class="tarif__card-text-left_side">
                В комплекте идут столовые риборы и салфетки<br>
              </p>
            </div>
            
            <div class="tarif-card__info-price">
              <h3 class="tarif__card-price">1550₸</h3>
              <button id="orderBtnMinimal" class="btn tarif__btn order-btn">Заказать</button>
            </div>
            
          </div>
        </div>

        <div class="tarif-card">
          <div class="tarif-image"></div>
          <div class="tarif-card__info">

            <div class="tarif-card__info-content">
              <h3 class="tarif__card-header">Стандарт</h3>
              <p class="tarif__card-text">Состав:</p>
              <dl>
                <dt>Первое</dt><dd>300-350гр.*</dd>
                <dt>Второе</dt><dd>400гр.*</dd>
                <dt>Салат</dt><dd>100-150гр.*</dd>
              </dl>
              <p class="tarif__card-text-left_side">
                Хлеб, напиток<br>
                В комплекте идут столовые риборы и салфетки<br>
              </p>
            </div>
            
            <div class="tarif-card__info-price">
              <h3 class="tarif__card-price">1750₸</h3>
              <button id="orderBtnStandard" class="btn tarif__btn order-btn">Заказать</button>
            </div>
            
          </div>
        </div>

        <div class="tarif-card">
          <div class="tarif-image"></div>
          <div class="tarif-card__info">

            <div class="tarif-card__info-content">
              <h3 class="tarif__card-header">Максимальный</h3>
              <p class="tarif__card-text">Состав:</p>
              <dl>
                <dt>Первое</dt><dd>300-350гр.*</dd>
                <dt>Второе</dt><dd>400гр.*</dd>
                <dt>Салат</dt><dd>100-150гр.*</dd>
              </dl>
              <p class="tarif__card-text-left_side">
                Хлеб, напиток<br>
                Специи (соль, перец, сахар).<br>
                В комплекте идут столовые риборы и салфетки<br>
              </p>
            </div>
            
            <div class="tarif-card__info-price">
              <h3 class="tarif__card-price">2000₸</h3>
              <button  id="orderBtnMaximal" class="btn tarif__btn order-btn">Заказать</button>
            </div>
            
          </div>
        </div>

      </div>
      <p class="tarif__card-text additional-info">*Вес блюд зависит от наполнения.</p>
    </div>

    <div class="last-section">
      <div id="testimonials" style="position: absolute; top: -5rem; width: 1px; height: 1px; background-color: transparent; content: '';"></div>
      <h1 class="last-section__header">Нам доверяют</h1>
      <h3 class="last-section__subheader">
        Вкусно кормим наших клиентов с 2018 года
      </h3>

      <div class="testimonials">
        <!-- <h2 class="title">Some words from our costumers</h2>
            <p class="description">We've been helping businesses to do their best since 2003.</p> -->

        <a href="#!" class=" control-slider-outside btn-left">
          <i class="fas fa-chevron-left"></i>
        </a>
        <div class="slider-container">
          <div class="slider">
            <div class="slide-box">
              <!-- Testi One -->
              <p class="comment">
                Добрый день!Ну очень вкусно)) Хотелось бы отдельно отметить размер порций, а также упаковку обеда. 
                Нравится и то, что есть возможность выбора сетов (главное, что есть их визуализация и она соответствует 
                действительности). И конечно же, работу курьера: его пунктуальность, вежливость)))
                Спасибо огромное, будем Вашими клиентами и с нетерпением ждем чем же Вы полакомите нас завтра.
              </p>
            </div>
            <div class="slide-box">
              <!-- Testi Two -->
              <p class="comment">
                Спасибо, всем все понравилось. Будем рекомендовать вас. Были приятно удивлены тем, что вложено 
                все необходимое. И очень порадовало время доставки.
              </p>
            </div>
            <div class="slide-box">
              <!-- Testi Three -->
              <p class="comment">
                Добрый вечер. Мы заказывали 10 обедов. Привезли в точно назначенное время. Все очень хорошо упаковано. 
                Приятно удивило содержимое пакета: хлеб, пакетик чая, зубочистка, разовые пакетики соли и перца, салфеточки, 
                одноразовый сахар. Обед был ооочень вкусный. Спасибо большое за вашу работу. Удачи вам и успехов!
              </p>
            </div>

            <div class="slide-box">
              <p class="comment">
                Добрый день еще раз) в последнее время еда очень вкусная. до этого тоже было вкусно, но сейчас еще
                 вкуснее стало, желаю вам процветания. Спасибо)
              </p>
            </div>

            <div class="slide-box">
              <p class="comment">
                Хочу выразить благодарность команде Barbaris Masterfood. Служба приемки заказов работает оперативно и слаженно.
                 Быстро реагируют на запросы, сервис на высоком уровне. Обеды вкусные и сытные, не жирные, порции большие. 
                 Приборы, соль/перец, чай все упакуют в крафтовый пакет (который, кстати можно использовать потом) 
                 Спасибо все команде за добросовестный труд!!
              </p>
            </div>

            <div class="slide-box">
              <p class="comment">
                Сегодня был замечательный обед! Спасибо большое за полученное удовольствие.
              </p>
            </div>

            <div class="slide-box">
              <p class="comment">
                Спасибо за такой вкусный обед! Ваши пигоди - мои самые любимые. Будем заказывать на банкеты.
              </p>
            </div>
          </div>

          <!-- <a href="#!" class="control-slider btn-left">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a href="#!" class="control-slider btn-right">
            <i class="fas fa-chevron-right"></i>
          </a> -->
        </div>
          <a href="#!" class="control-slider-outside btn-right">
            <i class="fas fa-chevron-right"></i>
          </a>
      </div>

      <!-- <h1
        class="last-section__header"
        style="margin-top: 5rem; margin-bottom: 4rem"
      >
        С нами работают:
      </h1> -->
      <div class="our-clients">
        <div class="company-icon partner-1"><img src="<?= get_theme_file_uri( 'assets/jusan.webp' ) ?>" alt="" srcset=""></div>
        <div class="company-icon partner-2"><img src="<?= get_theme_file_uri( 'assets/telecom.svg' ) ?>" alt="" srcset=""></div>
        <div class="company-icon partner-3"><img src="<?= get_theme_file_uri( 'assets/orda-invest.png' ) ?>" alt="" srcset=""></div>
        <div class="company-icon partner-4"><img src="<?= get_theme_file_uri( 'assets/fortebank.png' ) ?>" alt="" srcset=""></div>
        <div class="company-icon partner-5"><img src="<?= get_theme_file_uri( 'assets/ALSI.png' ) ?>" alt="" srcset=""></div>
      </div>
    </div>

    <div class="form-section">

      <h1 class="form-section__header">Пройдите опрос и получите пробный день со скидкой в 10%</h1>
      <!-- <h2 class="form-section__subheader">Наш специалист свяжется с вами, чтобы уточнить все детали</h2> -->

      <form class="form-section__form" action="" method="post">
        <div class="form__group form-section__input-container">
          <input
            type="text"
            class="form__input form-section__input"
            placeholder="Наименование компании"
            id="company-last-block"
            required
          />
          <label for="company-middle-block" class="form__label">Наименование компании</label>
        </div>

        <div class="form__group form-section__input-container">
          <input
            type="tel"
            class="form__input form-section__input"
            placeholder="Номер телефона"
            id="phone-last-block"
            required
          />
          <label id="phone-last-block-label" for="phone-last-block" class="form__label">Номер телефона</label>
        </div>

        <div class="form__group centered">
          <button id="lastBlock" class="btn btn--green quiz-btn">Получить скидку</button>
        </div>
      </form>
    </div>

    <?php get_footer(); ?>
