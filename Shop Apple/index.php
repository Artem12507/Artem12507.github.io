<?php
require('addto.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/main.js"></script>

   <title>Apple Shop</title>
</head>

<body>
   <header class="header">
      <div class="container">
         <div class="headering">
            <div class="header__logo">
              
            </div>
            <div class="header__menu">
               <div class="header__menu__img">
                  <img src="img/time.svg" alt="time">
               </div>
               <div class="header__menu__text">
                  <span>Ми працюємо</span>
                  <p>Пн-Пт з 10:00-16:30</p>
               </div>
               <div class="header__menu__img">
                  <img src="img/phone.svg" alt="phone">
               </div>
               <div class="header__menu__text">
                  <span>Для звязку</span>
                  <p> +380686445273</p>
               </div>
              
            </div>
         </div>
         <div class="navigation">
            <div class="bg-white flex">
               <div class="menu">
                  <ul>
                     <li><a href="#"></a>
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-1">
                           
                        </div>
                     </li>
                  
                     <li><a href="#">Відгуки</a></li>
                     
                     <li><a href="#">Категорії</a>
                        <img src="img/arrow_more.svg" alt="More">
                        <div class="sub-menu-2">
                           <ul>
                              <li><a href="">Макбуки</a></li>
                              <li><a href="">Смартфони</a>
                                 <img src="img/arrow_more.svg" alt="More">
                                 <div class="sub-menu-2__item">
                                    <ul>
                                       <li><a href="">Світлі</a></li>
                                       <li><a href="">Сині</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href=""></a></li>
                           </ul>
                        </div>
                     </li>
                     <li><a href="#">Про нас</a></li>
                  </ul>
               </div>
               <div class="nav">
                  <a href=""><img src="img/search.svg" alt="Search"></a>
                  <a href=""><img src="img/shopping_cart.svg" alt="ShopCart"></a>
               </div>
            </div>
         </div>
         <div class="title">
            <h1>7000 задоволених клієнтів</h1>
            
         </div>
      </div>
   </header>
   <section class="article">
      <div class="container">
         <div class="bg-article">
            <img src="img/bg_section1.png" class="back-photo">
            <div class="container-article">
               <div class="content-title">
                  <span>Хто ми?</span>
               </div>
               <h2>Інтернет-магазин "Apple Shop" — це брендовий магазин електрики з власним складом та логістичною системою. </h2>
               <p>Наш магазин електрики працює за прайсами, наданими постачальниками, і може запропонувати вигідні ціни, а також можливість купити електротовари оптом від виробника за мінімальною вартістю</p>
               <img src="img/macbook_air_ua.png" alt="мак">
            </div>
         </div>
      </div>
   </section>
   <section class="offers">
      <div class="container">
         <div class="content-title">
            <span>Пропозиції</span>
         </div>
         <h3></h3>
         <div class="offers__main">
            <div class="offers__main__item">
               <div class="offers__main__item__photo">
                  <img src="img/service_item1.svg" alt="offers1">
               </div>
               <div class="offers__main__item__content">
                  <span>Програма накопичування бонусів</span>
                  <p>Придбаючи наші товари ви можете накопичувати бонуси для знижки до наступного замовлення
                  </p>
               </div>
            </div>
            <div class="offers__main__item">
               <div class="offers__main__item__photo">
                  <img src="img/service_item2.svg" alt="offers2">
               </div>
               <div class="offers__main__item__content">
                  <span>Підтримка клієнтів</span>
                  <p>Після придбання товару ви завжди можете звернутися за допомогою професіоналів по експлуатації товару</p>
               </div>
            </div>
            
            </div>
         </div>
      </div>
   </section>
   <section class="video">
      <div class="video-bg">
         <div class="video-bg__item fade">
            <img class="carousel" src="img/198904.jpg" alt="">
            <div class="container">
               <div class="video-container">
                  
                  <div class="play-video">
                     <img src="img/play.png" alt="play">
                  </div>
               </div>
            </div>
         </div>
        
   <section class="feedback">
      <div class="container">
         <div class="feedback__inner">
            <div class="feedback__inner__form">
               <div class="bg-white">
                  <div class="feedback__inner__form__content">
                     <h6>Залишились питання або побажання</h6>
                     <div class="form-info">
                        <input type="text" placeholder="Name" required>
                        <input type="text" placeholder="Email" required>
                        <input type="number" placeholder="Phone" required>
                       
                     </div>
                     <textarea name="" id="comment" placeholder="Tell us about the car needing service(s)"></textarea>
                     <a class="btn" href="/" type="button">Ми вам зателефонуємо</a>
                  </div>
               </div>
            </div>
            <div class="feedback__inner__order">
               <span></span>
               <p class="number"></p>
               <p>Більше 7000 задоволених клієнтів</p>
            </div>
         </div>
      </div>
   
</body>

</html>