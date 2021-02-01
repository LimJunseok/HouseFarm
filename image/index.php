<!DOCTYPE html>
<html>

<head>
<title>House Farm. 하우스팜</title>
<meta charset="utf-8">
<link href="<?=G5_THEME_URL?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?=G5_THEME_URL?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?=G5_THEME_URL?>/css/nav.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=G5_THEME_URL?>/css/flexslider.css" type="text/css" media="screen" />

<script src="<?=G5_THEME_URL?>/./js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=G5_THEME_URL?>/http://code.jquery.com/jquery-migrate-3.0.0.js"></script> 
<script src="<?=G5_THEME_URL?>/http://code.jquery.com/jquery-migrate-1.4.1.js"></script>
<script src="<?=G5_THEME_URL?>/js/jquery.quicksand.js"></script>
<script src="<?=G5_THEME_URL?>/js/script.js"></script> 
<script defer src="<?=G5_THEME_URL?>/js/jquery.flexslider.js"></script>
<script src="<?=G5_THEME_URL?>/js/house.js" type="text/javascript" charset="utf-8"></script>

<!-- FlexSlider -->


</head>
<body>
 
<header id="header">
 <div class="inner">
  <h1>
   <a href="#"><img src="<?=G5_THEME_URL?>/image/main_logo.png" alt="집에서 농장까지 확인이 가능한 하우스팜"></a>
  </h1>
   <ul class="rig_to">
    <!--<li><a href="#">로그인</a></li>
    <li><a href="#">회원가입</a></li>-->
    <?php echo outlogin('hollys_outlogin'); ?>  
    <li><a href="#">주문조회</a></li>
    <li><a href="#">날짜확인</a></li>
  </ul>
 </div> 
</header>

<nav id="nav4">
  <!-- <div class="nav_box2"></div>  -->
  <div class="color"></div>
  <div class="inner">
    <ul class="depth1" >
      <li><a href="#">인기제품</a>
        <div class="nav_box">
          <ul class="depth2">
            <li><a href="#">이맘때 인기</a></li>
            <li><a href="#">꾸준한 인기</a></li>
            <li><a href="#">계절마다의 인기</a></li>
          </ul>
        </div>
          <li><a href="#">타임세일</a>
            <div class="nav_box">          
              <ul class="depth2">
                <li><a href="#">현재 타임세일</a></li>
                <li><a href="#">역대 타임세일</a></li>
              </ul>
            </div>
           </li>
           <li><a href="#">제철상품</a>
             <div class="nav_box">
               <ul class="depth2">
                  <li><a href="#">봄</a></li>
                  <li><a href="#">여름</a></li>
                  <li><a href="#">가을</a></li>
                  <li><a href="#">겨울</a></li>
                  <li><a href="#">양념류</a></li>
                  <li><a href="#">주류</a></li>
                  <li><a href="#">미리보는 선물세트</a></li>
                </ul>
             </div>
           </li>
           <li><a href="http://dhfhfk.dothome.co.kr/bbs/board.php?bo_table=notice" class="cororor">리뷰와 레시피</a>
             <div class="nav_box">
               <ul class="depth2">
                  <li><a href="#">베스트 리뷰</a></li>
                  <li><a href="#">최신 리뷰</a></li>
                  <li><a href="#">계절별 레시피</a></li>
                  <li><a href="#">현장 레시피</a></li>
                  <li><a href="#">내가 쓰는 레시피</a></li>
                </ul>
             </div>
           </li>
           <li><a href="#">새벽경매</a>
             <div class="nav_box">
               <ul class="depth2">
                   <li><a href="#">입장하기</a></li>
                   <li><a href="#">물건 조회하기</a></li>
                   <li><a href="#">신고하기</a></li>
                </ul>
              </div>
           </li>
           <div class="sec"><a href="#"><img src="<?=G5_THEME_URL?>/image/sec_wiort.png" alt="제철음식은 하우스팜"></a></div>
           <div class="jan"><a href="#"><img src="<?=G5_THEME_URL?>/image/jangbaguni_whirt.png" alt="제철음식 예약후 설렘은"></a></div>
       </ul>
     </div>        
   </nav4>


<section class="slider">
<div id="slider" class="flexslider">
      <ul class="slides">
        <li>
          <img src="<?=G5_THEME_URL?>/image/main_je.png" />
              </li>
              <li>
              <img src="<?=G5_THEME_URL?>/images/kitchen_adventurer_lemon.jpg" />
              </li>
              <li>
              <img src="<?=G5_THEME_URL?>/image/main_bk.png" />
              </li>
              <li>
                <img src="<?=G5_THEME_URL?>/images/kitchen_adventurer_cheesecake_brownie.jpg" />
              </li>
      </ul>
    </div>
    <div id="carousel" class="flexslider">
      <ul class="slides">
        <li>
          겨울 귤
          </li>
          <li>
          봄 딸기
          </li>
          <li>
          여름 수박
          </li>
          <li>
          가을 배추
          </li>
      </ul>
    </div>
  </section>
  
<section id="bast">
  <div class="inner">
    <h2 class="bast_icon bast_tit">인기 품목</h2>
    <div class="ba_top_af">
      <p class="bast_tet">변함없는 인기제품</p>
      <p class="bast_ri"><a href="#">조회순</a> / <a href="#">리뷰순</a>
    </div>
    <div class="hot_maum">
      <div class="hot_li">
        <img src="<?=G5_THEME_URL?>/image/hot_meau1.png" alt="국산 새송이버섯을 미리 주문하자!">
        <li class="hot_tit">새송이 버섯</li>
        <li class="hot_tit1">9,700원/600g</li>
      </div>
        <div class="hot_li">
          <img src="<?=G5_THEME_URL?>/image/bast_1.png" alt="겨울을 대비한 하우스팜!">
          <li class="hot_tit">감귤</li>
          <li class="hot_tit1">18,000원/2kg</li>
        </div>
          <div class="hot_li">
            <img src="<?=G5_THEME_URL?>/image/bast_2.png" alt="국산 새송이버섯을 미리 주문하자!">
            <li class="hot_tit">사과</li>
            <li class="hot_tit1">12,000원/12개</li>
          </div>
    </div>
 </div>
</section>

<section id="new">
  <div class="inner">
    <h2 class="new_icon bast_tit">새롭게 들어온 상품</h2>
    <div class="ba_top_af">
      <p class="bast_tet">이번에 새롭게 입고된 상품</p>
      <p class="bast_ri"><a href="#">조회순</a> / <a href="#">리뷰순</a>
    </div>
    <div class="hot_maum">
      <div class="hot_li">
        <img src="<?=G5_THEME_URL?>/image/new_1.png" alt="다이어트,눈피로해소,간기능향상등 좋은효과가 많은 구기자가 추가되었습니다.">
        <li class="hot_tit">구기자</li>
        <li class="hot_tit1">7,600원/500g</li>
      </div>
        <div class="hot_li">
          <img src="<?=G5_THEME_URL?>/image/new_3.png" alt="대추는 하우스팜">
          <li class="hot_tit">대추</li>
          <li class="hot_tit1">9,700원/600g</li>
        </div>
          <div class="hot_li">
            <img src="<?=G5_THEME_URL?>/image/new_2.png" alt="넥슨은 도토리를 뿌려라">
            <li class="hot_tit">도토리</li>
            <li class="hot_tit1">9,700원/400g</li>
          </div>
    </div>
 </div>
</section>

<section id="season">
 <div class="inner"> 
  <h2 class="season_tit season_icon">계절에 맞는 제철상품</h2>
  <p class="season_tet">다가오는 계절 미리 맞이해보는 식탁</p>
  <div class="season_side" id="slide">
    <div class="container">
     <a href="#" class="sea sea2"><img src="image/season_widnte_t.png"></a>
     <a href="#" class="sea sea3"><img src="image/season_autumn.png"></a>
     <a href="#" class="sea sea4"><img src="image/season_summer.png"></a>
     <a href="#" class="sea sea1"><img src="image/season_autumn.png"></a>
    </div>
   </div>
</div>
</section>

<section id="recipe">
  <div class="inner">
    <h2 class="recipe_tit recipe_icon">요리 레시피</h2>
  <div class="recipe_box"> </div>
  <div class="recipe_tex">
   <li class="recipe_name">새송이 버섯 덮밥</li>
  <ul>
    <li class="reci_main">1.새송이버섯을 0.3cm 두께로 결대로 찢고 양파는 채썰고, 실파는 길게 썰어주세요.</li>
    <li class="reci_main">2.팬에 포도씨유를 두르고 양파가 갈색이 되도록 볶다가 새송이 버섯을 함께<br> 볶아주세요.</li>
    <li class="reci_main">3.물과 양념을 넣고 한소끔 끓인 후 풀어둔 달걀을 휘릭 둘러 익혀주세요. 계란이 반쯤 익으면
      불을 끄고 밥위에 얹으면 완성!</li>
    <li class="reci_main">4.맛있게 먹는다</li>
  </ul> 
  <ul class="recipe_pu">
    <li><a href="#">더 많은 레시피 확인하기</a></li>
  </ul>
 </div>
</div>
</section>

<section id="time_sale">
 <div class="inner">
  <h2 class="time_tit time_icon">타임세일</h2>
  <p class="time_tet">언제 다시 열릴지 모릅니다....!</p>
  <div class="time_box"> 
   <ul class="time_sec1">
    <li>20:00:00 까지</li>
    <li>감자(10kg)</li> 
   </ul>  
   <ul class="time_sec2">
     <li>53%</li>
     <li>23,200원</li>
     <li>18,830원</li>
   </ul>
  </div> 
  <div class="time_box2">
    <img src="<?=G5_THEME_URL?>/image/time.png" alt="하우스팜에서만 만날수 있는 특별한 기회">
    <li><a href="#">확인하기</a></li>
  </div>
 </div>
</section>

<section id="night">
 <div class="inner">
  <h2 class="night_tit night_icon">새벽경매</h2>
  <div class="night_box">
    <a href="#"><li>입장하기</li></a>
  </div>
 </div>
</section>

<section id="nex_reiv">
 <div class="inner">
  <div class="newx">
    <h3>공지사항 및 뉴스</h3>
     <ul class="newx_tit">
       <li><a href="#">[새로운 방문] 야채생각이 우리와 함께하게 되었습니다.<span>21.01.34</span></a></li>
       <li><a href="#">[뉴스] OO지역 홍수로 인해 피해가 심각!<span>21.01.34</span></a></li>
       <li><a href="#">[공지사항] 하우스팜 사이트 리뉴얼 안내<span>21.01.34</span></a></li>
       <li><a href="#">[공지사항] 이번달 방송 계획<span>21.01.34</span></a></li>
       <li><a href="#">[공지사항] 이번달 배송 계획<span>21.01.34</span></a></li>
     </ul>
  </div>
  <div class="reiv">
    <h3>리뷰 및 후기</h3>
     <ul class="reiv_tit">
       <li><a href="#">[베스트리뷰] 야채생각이 우리와 함께하게 되었습니다.<span>21.01.34</span></a></li>
       <li><a href="#">[베스트리뷰] OO지역 홍수로 인해 피해가 심각!<span>21.01.34</span></a></li>
       <li><a href="#">[리뷰] 하우스팜 사이트 리뉴얼 안내<span>21.01.34</span></a></li>
       <li><a href="#">[후기] 하우스팜 사이트 리뉴얼 안내<span>21.01.34</span></a></li>
       <li><a href="#">[후기] 하우스팜 사이트 리뉴얼 안내<span>21.01.34</span></a></li>
     </ul>
  </div>
 </div>
</section>
 
<section id="wied">
  <div class="inner">
    <h3 class="wied_head">기상 상황</h3>
    <nav id="filter"></nav>
    <div id="container">
        	<ul id="stage">
              	<li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration"/> <br>경상남도 남해군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/cl_Lightning.png" alt="Illustration"/><br>경상남도 함안군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration"/><br>경상남도 하동군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration"/><br>경상남도 통영군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/snow.png" alt="Illustration"/><br>경상남도 창원시</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/snow.png" alt="Illustration"/><br>경상북도 고령군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration"/><br>경상북도 경주시</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/cl_sun_snow.png" alt="Illustration" /><br>경상북도 의성군</li>
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/cl_sun.png" alt="Illustration" /><br>경상북도 청도군</li>  
                <li data-tags="경상도"><img src="<?=G5_THEME_URL?>/image/cl_sun_rain.png" alt="Illustration" /><br>경상북도 포항시</li>
                <li data-tags="경기도"><img src="<?=G5_THEME_URL?>/image/cl_Lightning_rain.png" alt="Illustration" /><br>경기도 남양주</li>
                <li data-tags="경기도"><img src="<?=G5_THEME_URL?>/image/cl_sun_rain.png" alt="Illustration" /><br>경기도 가평</li>
                <li data-tags="경기도"><img src="<?=G5_THEME_URL?>/image/cl_sun.png" alt="Illustration" /><br>경기도 가평</li>
                <li data-tags="경기도"><img src="<?=G5_THEME_URL?>/image/cloud.png" alt="Illustration" /><br>경기도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/cloud.png" alt="Illustration" /><br>전라남도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/cl_sun_rain.png" alt="Illustration" /><br>전라남도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/cl_sun_rain.png" alt="Illustration" /><br>전라남도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>전라북도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>전라북도 가평</li>
                <li data-tags="전라도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration" /><br>전라북도 가평</li>
                <li data-tags="강원도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>강원도 가평</li>
                <li data-tags="강원도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>강원도 가평</li>
                <li data-tags="강원도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>강원도 가평</li>
                <li data-tags="강원도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>강원도 가평</li>
                <li data-tags="충청도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration" /><br>충청남도 천안시</li>
                <li data-tags="충청도"><img src="<?=G5_THEME_URL?>/image/rain.png" alt="Illustration" /><br>충청남도 논산시</li>
                <li data-tags="충청도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>충청북도 천안시</li>
                <li data-tags="충청도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>충청북도 천안시</li>
                <li data-tags="독도"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration"/><br>울릉군 울릅읍<br>독도리 1-96</li>
                <li data-tags="동해"><img src="<?=G5_THEME_URL?>/image/wied_sun.png" alt="Illustration" /><br>동해</li>
                <li data-tags="서해"><img src="<?=G5_THEME_URL?>/image/cl_Lightning_rain.png" alt="Illustration" /><br>서해</li>
                <li data-tags="남해"><img src="<?=G5_THEME_URL?>/image/cl_Lightning.png" alt="Illustration" /><br>남해</li>
              
            </ul>
        </div>
    <!--    <ul class="wied_lest">
     
      <li><a href="#">경기도</a></li>
      <li><a href="#">충청도</a></li>
      <li><a href="#">전라도</a></li>
      <li><a href="#">경상도</a></li>
      <li><a href="#">강원도</a></li>
    </ul>
    <div class="wi_te1 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te2 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te3 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te4 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te5 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te6 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te7 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>
    <div class="wi_te8 wi_div">
      <img src="image/wied_sun.png">
      <p>경상남도 <br>남해군</p>
    </div>


-->


  </div>
</section>



<footer id="footer">
 <div class="foot_back">
  <span></span> 
  <div class="inner">
   <ul>
     <li><a href="#">이용약관</a></li>
     <li><a href="#">개인정보취급방침</a></li>
   </ul>
   <div class="foot_line">
     <img src="<?=G5_THEME_URL?>/image/wiete_logo.png" alt="농산물 예약/시청은 언제나 하우스팜">
   </div>  
     <ul class="foot_call">
       <li>고객센터</li>
       <li>1544 - 5618</li>
       <li>월 ~ 금: -9:00 ~ 18:30</li>
       <li>토: 10:30 ~ 16:50</li>
       <li>일, 공휴일: 08:00 ~ 12:30</li>
     </ul>
     <ul class="foot_new">
      <li>하우스팜(주) 대표이사 : 임준석 사업자등록번호:000-0000-00</li>
      <li>주소: 부산시 어딘가 위치한 우리집 통신판매업신고 종구 제1호 개인정보보호책임자:본인</li>
      <li>이메일:koorKim@game.com</li>
      <li>© CJ CHEILJEDANG CORP. ALL RIGHTS RESERVED</li>
    </ul>
  </div>
</div> 
</footer>
</body>
</html>

