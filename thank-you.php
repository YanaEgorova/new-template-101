<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
    
    
       <header class="header">
         <div class="header__top">
           <div class="header__btn-block">
             <button class="header__btn js_menu-btn">
               <span></span>
             </button>
           </div>

             <nav class="nav js_menu">
               <a href="./index.html" class="header__logo logo js_website-name"></a>
             
               <ul class="nav__list">
                 <li class="nav__item">
                   <a href="./contacts.html" class="nav__item">Contact Us</a>
                 </li>
                 <li class="nav__item">
                   <a href="./return.html" class="nav__item">Return Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./purchase.html" class="nav__item">Terms of Purchase</a>
                 </li>
                 <li class="nav__item">
                   <a href="./privacy.html" class="nav__item">Privacy Notice</a>
                 </li>
                 <li class="nav__item">
                   <a href="./shipping.html" class="nav__item">Shipping Policy</a>
                 </li>
                 <li class="nav__item">
                   <a href="./use.html" class="nav__item">Terms of Use</a>
                 </li>
               </ul>
             </nav>

             <a href="./shop.html" class="cart__span-box">
                  
               <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="884.000000pt" height="980.000000pt" viewBox="0 0 884.000000 980.000000" preserveAspectRatio="xMidYMid meet">
              
              <g transform="translate(0.000000,980.000000) scale(0.100000,-0.100000)" stroke="none">
              <path d="M4190 9785 c-397 -49 -766 -214 -1078 -479 -198 -169 -378 -403 -492
              -640 -142 -295 -175 -460 -186 -931 -2 -126 -7 -254 -10 -282 l-5 -53 -784 0
              c-431 0 -786 -4 -789 -8 -7 -11 -57 -438 -256 -2182 -403 -3524 -580 -5101
              -580 -5162 l0 -48 4410 0 4410 0 0 46 c0 53 -25 278 -250 2264 -404 3559 -578
              5068 -586 5082 -3 4 -358 8 -789 8 l-784 0 -5 53 c-3 28 -8 164 -11 301 -8
              366 -25 491 -96 700 -298 870 -1211 1443 -2119 1331z m555 -419 c203 -46 435
              -147 597 -262 109 -78 297 -267 375 -377 70 -100 168 -287 207 -395 71 -198
              96 -386 96 -709 l0 -223 -1600 0 -1600 0 0 219 c0 228 11 374 36 501 39 191
              146 435 267 607 77 109 266 299 372 375 197 139 461 247 680 278 97 14 489 4
              570 -14z m-2315 -2595 l0 -219 -54 -40 c-105 -80 -151 -185 -144 -331 6 -113
              44 -197 122 -269 90 -81 132 -97 261 -97 98 0 116 3 167 27 76 35 153 109 192
              183 30 57 31 65 31 175 0 106 -2 119 -28 170 -16 30 -57 84 -93 120 l-64 66 0
              217 0 217 1600 0 1600 0 0 -217 0 -217 -64 -66 c-36 -36 -77 -90 -93 -120 -26
              -51 -28 -64 -28 -170 0 -110 1 -118 31 -175 39 -74 116 -148 192 -183 51 -24
              69 -27 167 -27 129 0 171 16 261 97 78 72 116 156 122 269 7 145 -38 248 -144
              332 l-54 42 0 217 0 218 615 0 c338 0 615 -3 615 -7 0 -5 5 -37 10 -73 18
              -125 261 -2247 520 -4540 197 -1744 221 -1961 215 -1971 -8 -12 -7922 -12
              -7929 0 -7 10 30 344 224 2061 291 2568 505 4432 516 4498 l6 32 614 0 614 0
              0 -219z"></path>
              </g>
              </svg>
                 <span class="cart__span js_cart__span">79</span>
             </a>
         
         </div>
       </header>
    
     </div>
   </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
 
      <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(104, 72, 104, 1)" offset="0%"></stop><stop stop-color="rgba(238, 104, 72, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,160L26.7,165.3C53.3,171,107,181,160,176C213.3,171,267,149,320,144C373.3,139,427,149,480,170.7C533.3,192,587,224,640,213.3C693.3,203,747,149,800,117.3C853.3,85,907,75,960,96C1013.3,117,1067,171,1120,197.3C1173.3,224,1227,224,1280,192C1333.3,160,1387,96,1440,80C1493.3,64,1547,96,1600,122.7C1653.3,149,1707,171,1760,176C1813.3,181,1867,171,1920,181.3C1973.3,192,2027,224,2080,197.3C2133.3,171,2187,85,2240,69.3C2293.3,53,2347,107,2400,117.3C2453.3,128,2507,96,2560,90.7C2613.3,85,2667,107,2720,144C2773.3,181,2827,235,2880,245.3C2933.3,256,2987,224,3040,218.7C3093.3,213,3147,235,3200,208C3253.3,181,3307,107,3360,96C3413.3,85,3467,139,3520,144C3573.3,149,3627,107,3680,101.3C3733.3,96,3787,128,3813,144L3840,160L3840,320L3813.3,320C3786.7,320,3733,320,3680,320C3626.7,320,3573,320,3520,320C3466.7,320,3413,320,3360,320C3306.7,320,3253,320,3200,320C3146.7,320,3093,320,3040,320C2986.7,320,2933,320,2880,320C2826.7,320,2773,320,2720,320C2666.7,320,2613,320,2560,320C2506.7,320,2453,320,2400,320C2346.7,320,2293,320,2240,320C2186.7,320,2133,320,2080,320C2026.7,320,1973,320,1920,320C1866.7,320,1813,320,1760,320C1706.7,320,1653,320,1600,320C1546.7,320,1493,320,1440,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
      <svg id="wave-2" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 170" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(104, 72, 104, .5)" offset="0%"></stop><stop stop-color="rgba(238, 104, 72, .5)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,85L20,87.8C40,91,80,96,120,93.5C160,91,200,79,240,76.5C280,74,320,79,360,90.7C400,102,440,119,480,113.3C520,108,560,79,600,62.3C640,45,680,40,720,51C760,62,800,91,840,104.8C880,119,920,119,960,102C1000,85,1040,51,1080,42.5C1120,34,1160,51,1200,65.2C1240,79,1280,91,1320,93.5C1360,96,1400,91,1440,96.3C1480,102,1520,119,1560,104.8C1600,91,1640,45,1680,36.8C1720,28,1760,57,1800,62.3C1840,68,1880,51,1920,48.2C1960,45,2000,57,2040,76.5C2080,96,2120,125,2160,130.3C2200,136,2240,119,2280,116.2C2320,113,2360,125,2400,110.5C2440,96,2480,57,2520,51C2560,45,2600,74,2640,76.5C2680,79,2720,57,2760,53.8C2800,51,2840,68,2860,76.5L2880,85L2880,170L2860,170C2840,170,2800,170,2760,170C2720,170,2680,170,2640,170C2600,170,2560,170,2520,170C2480,170,2440,170,2400,170C2360,170,2320,170,2280,170C2240,170,2200,170,2160,170C2120,170,2080,170,2040,170C2000,170,1960,170,1920,170C1880,170,1840,170,1800,170C1760,170,1720,170,1680,170C1640,170,1600,170,1560,170C1520,170,1480,170,1440,170C1400,170,1360,170,1320,170C1280,170,1240,170,1200,170C1160,170,1120,170,1080,170C1040,170,1000,170,960,170C920,170,880,170,840,170C800,170,760,170,720,170C680,170,640,170,600,170C560,170,520,170,480,170C440,170,400,170,360,170C320,170,280,170,240,170C200,170,160,170,120,170C80,170,40,170,20,170L0,170Z"></path></svg>
      <svg id="wave-3" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 180" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(104, 72, 104, 1)" offset="0%"></stop><stop stop-color="rgba(238, 104, 72, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,90L17.1,93C34.3,96,69,102,103,99C137.1,96,171,84,206,81C240,78,274,84,309,96C342.9,108,377,126,411,120C445.7,114,480,84,514,66C548.6,48,583,42,617,54C651.4,66,686,96,720,111C754.3,126,789,126,823,108C857.1,90,891,54,926,45C960,36,994,54,1029,69C1062.9,84,1097,96,1131,99C1165.7,102,1200,96,1234,102C1268.6,108,1303,126,1337,111C1371.4,96,1406,48,1440,39C1474.3,30,1509,60,1543,66C1577.1,72,1611,54,1646,51C1680,48,1714,60,1749,81C1782.9,102,1817,132,1851,138C1885.7,144,1920,126,1954,123C1988.6,120,2023,132,2057,117C2091.4,102,2126,60,2160,54C2194.3,48,2229,78,2263,81C2297.1,84,2331,60,2366,57C2400,54,2434,72,2451,81L2468.6,90L2468.6,180L2451.4,180C2434.3,180,2400,180,2366,180C2331.4,180,2297,180,2263,180C2228.6,180,2194,180,2160,180C2125.7,180,2091,180,2057,180C2022.9,180,1989,180,1954,180C1920,180,1886,180,1851,180C1817.1,180,1783,180,1749,180C1714.3,180,1680,180,1646,180C1611.4,180,1577,180,1543,180C1508.6,180,1474,180,1440,180C1405.7,180,1371,180,1337,180C1302.9,180,1269,180,1234,180C1200,180,1166,180,1131,180C1097.1,180,1063,180,1029,180C994.3,180,960,180,926,180C891.4,180,857,180,823,180C788.6,180,754,180,720,180C685.7,180,651,180,617,180C582.9,180,549,180,514,180C480,180,446,180,411,180C377.1,180,343,180,309,180C274.3,180,240,180,206,180C171.4,180,137,180,103,180C68.6,180,34,180,17,180L0,180Z"></path></svg>
      <div class="container">
        <footer class="footer">
    
          <div class="footer__top">
            <div class="footer__top-block">
              <div class="footer__block">
                <p class="footer__title">Our Contacts</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <span class="text text--mb js_website-address"></span>
                   </li>
                   <li class="footer__item">
                    <a href="" class="footer__link js_website-email"></a>
                    </li>
                    <li class="footer__item">
                      <a href="" class="footer__link js_website-phone"></a>
                    </li>
                </ul>
              </div>
        
              <div class="footer__block">
                <p class="footer__title">Policies</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./return.html" class="footer__link">Return Policy</a>
                   </li>
                   <li class="footer__item">
                     <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Info</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./contacts.html" class="footer__link">Contact Us</a>
                   </li>
                   <li class="footer__item">
                     <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                    </li>
                
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Terms</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                   </li>
                   <li class="footer__item">
                     <a href="./use.html" class="footer__link">Terms of Use</a>
                    </li>
                </ul>
              </div>
           
            </div>
          
          </div>
    
          <div class="footer__bottom">
            <div class="footer__block--bottom">
             <div>
              <a href="./index.html" class="footer__logo logo js_website-name"></a>
              <p class="text text--mb js_website-corp"></p>
             </div>
              <span class="footer__span">© All rights reserved</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script> 
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>