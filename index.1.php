<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yoyogi's Bakery</title>
        <link rel="stylesheet" href="yoyogi.css">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          
    </head>
   <body>
   <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
  <!-- ヘッダー部分 ================ -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Yoyogi's Bakery</a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_target">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  <!-- 中央のナビゲーション部分 ================ -->
    <div class="collapse navbar-collapse" id="nav_target">
      <ul class="nav navbar-nav">
        <!-- リンクのみ -->
          <li><a href="#Con">Concept</a></li>
          <li><a href="#Yoyogi">Yoyogi Park</a></li>
        <!-- Nav3 ドロップダウン -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li class="divider"></li>
              <li><a href="#">link3</a></li>
            </ul>
      </ul>
  <!-- 右寄せになる部分 ================ -->
      <ul class="nav navbar-nav navbar-right">
        <!-- リンクのみ -->
          <li><a href="#information">Information</a></li>
        <!-- Nav6 ドロップダウン -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">other<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Q&A</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div class="top">
  <div class="row">
   <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 ">
     
<div id="carousel-example" class="carousel slide" data-ride="carousel">
 <!-- インジケーターの設置。下部の○●ボタン。 -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
    <li data-target="#carousel-example" data-slide-to="3"></li>
  </ol>
 
  <!-- スライドの内容 -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="top.jpg" alt="トップ">
       <div class="carousel-caption">
        <h2>Yoyogi's Bakery</h2>
        <p>代々木の森のパン屋さん</p>
      </div>
    </div>
    <div class="item">
      <img src="365.jpg" alt="365">
    </div>
    <div class="item">
      <img src="haritts.jpg" alt="haritts">
    </div>
    <div class="item">
      <img src="katane.jpg" alt="katane">
    </div>
  </div>
 
  <!-- 左右の移動ボタン -->
  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
</div>

</div>
</div>
</div>

   <!--内容-->

<div class="container">
   <div class="row">
  <div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
  <div id="Con" class="Concept">
    <h1>Concept</h1>
  <div class="text">
    <br>
    <p>明治神宮と共に緑深い森を作る代々木公園。渋谷という都会の中にあるこの公園の周りには、ブーランジェリーの名店などがいくつもあることを皆さんはご存知ですか？</p>
    <p>当ホームページはそんな隠れたお店たちをご紹介するために作られました。各店こだわりのパンやドーナッツ、スイーツたちをご覧ください。</p>
  </div>
  </div>
  <div id="Yoyogi" class="park">
    <h1>Yoyogi Park</h1>
  <div class="text">
    <br>
    <p>代々木公園は、23区内の都立公園の中で五番目に広く、道路を挟んで森林公園としてのＡ地区と、それとは対象的な陸上競技場、野外ステージなどを備えたＢ地区とに分かれています。</p>
    <p>かつて陸軍代々木練兵場だったこの場所も、戦後は米軍の宿舎敷地・ワシントンハイツとなり、東京オリンピックの選手村を経て公園となりました。開園当時はまだ若かった木々も、今ではすっかり成長し、隣接する明治神宮の木々と共に緑濃い森を作っています。</p>
  </div>
   <br>
   <br>
   <br>
   <br>
    <img src="yoyogipark.JPG" class="img-rounded img-responsive center-block">　
  </div>


<div class="shop">
  <h1 class="shops">Shops</h1>
  <div class="row">
    <div class="col-sm-5">
      <!-- 1.画像の配置 -->
      <a class="" href="#">
        <img class="media-object img-responsive img-circle" src="365shop.jpg">
      </a>
    </div>
    <div class="col-sm-7">
      <!-- 2.画像の説明 -->
      <h3 class="media-heading">365日</h3>
      <p>八幡にある「食のセレクトショップ」</p>
    </div>
</div>
<hr />

<div class="media">
    <!-- 2.画像の説明 -->
    <div class="row">
    <div class="col-sm-7">
        <h3 class="media-heading">Harrits</h3>
        <p>上原の坂のふわふわドーナッツ</p>
    </div>
    </div>
    <!-- 1.画像の配置 -->
    <div class="col-sm-offset-5 col-sm-5">
    <a class="" href="#">
        <img class="media-object img-circle img-responsive" src="harritsshop.jpg">
    </a>
</div>
</div>

<hr />

<div class="media">
    <div class="row">
    
    <div class="col-sm-offset-5 col-sm-7">
      <!-- 2.画像の説明 -->
      <h3 class="media-heading">tecona bagel works</h3>
      <p>ふわもちぎゅっのベーグル</p>
    </div>
    <div class="col-sm-5">
      <!-- 1.画像の配置 -->
      <a class="" href="#">
        <img class="media-object img-responsive img-circle" src="teconashop.jpg">
      </a>
    </div>
</div>
</div>


<hr />

<div class="media">
    <!-- 2.画像の説明 -->
    <div class="row">
    <div class="col-sm-7">
        <h3 class="media-heading">tacona</h3>
        <p>エチオピアの老舗コーヒー日本第一号店</p>
    </div>
    </div>
    <!-- 1.画像の配置 -->
    <div class="col-sm-offset-5 col-sm-5">
    <a class="" href="#">
        <img class="media-object img-circle img-responsive" src="tomocashop.jpg">
    </a>
</div>
</div>
</div>
</div>
</div>
</div>


<section id="information">
<h2 class="section-title　">Information</h2>
<hr/>
<dl class="info-list">
<dt class="info-date">2018.6.25 mon</dt>
<dd class="info-txt">Shopsにtomoca coffeeの情報を追加しました。</dd><br>
<dt class="info-date">2018.6.18 tue</dt>
<dd class="info-txt">Shopsにtecona bagel worksの情報を追加しました。</dd><br>
<dt class="info-date">2018.6.8 fri</dt>
<dd class="info-txt">365日が「朝はパンマガジン PANPAPAN 2018年5月号」に掲載されました！</dd><br>
<dt class="info-date">2018.5.29 sat</dt>
<dd class="info-txt">ブログ公開開始。これから情報を少しずつ更新していきます!</dd><br>
</dl>


</section>

   </body>
</html>