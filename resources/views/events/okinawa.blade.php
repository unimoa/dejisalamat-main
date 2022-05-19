@extends('layouts.frame')

@section('content')
<div class="banner"><img class="mySlides" src="/img/O-1.png" /></div>
<div class="banner"><img class="mySlides" src="/img/O-2.png" /></div>
<div class="banner"><img class="mySlides" src="/img/O-3.png" /></div>
<script src="{{ asset('js/banner.js')}}"></script>
<div class="box0">
  <div class="box1">
    
    <div class="box1oki">
      <h2 class="etitle">魅力</h2> <br>
      鹿児島県の薩南諸島を除く南西諸島の島々（沖縄諸島、先島諸島、大東諸島）から構成されており、
      東シナ海と太平洋に挟まれている。面積は2,281平方キロメートルで、日本の都道府県では小さい
      順に香川県、大阪府、東京都に次いで第4位であり、人の居住する日本最南端の地域を含む県でもある
      。また、八重山郡与那国町は日本の最西端にある地方自治体であり、与那国島の北北西端にある
      トゥイシが日本最西端の地点である。
      県民人口の約9割が沖縄本島に集中しており、さらに本島中南部に県人口の8割が集中している。那覇市
      中心部は三大都市圏に匹敵する人口密度がある。
      ほぼ全域が亜熱帯気候であり、一部は熱帯に属する。年間を通して温暖な気候であり、最低気温が氷点下
      以下になる事はほとんどない。
      海上輸送路（シーレーン）および軍事的要地（第一列島線）として重要な場所に位置し、多数の在日米
      軍基地が存在する。主な米軍施設として、嘉手納飛行場、普天間飛行場、キャンプ、バトラー等が存在する。
      歴史的経緯（後述）から、宗教、文化ならびに風習、人名や方言、料理や食文化および産業、人口構成
      ならびに所得格差に至るまで日本列島主要四島との差異が大きい。俗に沖縄「県外」のことを
      「内地（ナイチ）」、沖縄県外の日本人を「内地人（ナイチャー）」と呼び分ける場合がある。
      日本では数少ない南の島であるため、日本屈指のリゾート地となり、日本人の夏の観光先として定番化した。
      特に2001年のテレビドラマ「ちゅらさん」の放送以後は、県外でも沖縄文化がブームを超えて身近なもの
      として定着し、県外からの観光客や移住者も大幅に増加した。沖縄県としても文化体験、沖縄料理、
      レジャー、マリンスポーツや戦争遺跡などを強みに観光分野に特に力を入れている。沖縄全体で見た場合の
      世界的な知名度は未だ低いが、座間味島のみは、ミシュラン・グリーンガイド・ジャポン二つ星を獲得し、
      国定公園になったことで、海外でも日本の観光名所として大きく紹介されるようになり、一定の知名度を獲得
      している。
      沖縄県内の産業割合を見ると観光業を含む第三次産業が79.2%を占めている一方で第一次産業は5.4%、
      第二次産業は15.4%と低調である。沖縄は太平洋高気圧の南側に位置し、熱帯低気圧が発生する海域に近いため、
      台風発生シーズンの9月上旬から11月上旬までは沖縄の天候が荒れやすく、沖縄発着の旅客機が欠航しやすい。
      しかし、9月は気温が高いにも関わらずオフシーズンとなるため、夏と殆ど同じ条件で安価に旅行する事が可能
      となる。
    </div>
  </div>
</div>

<main>
  <img src="img/omap.png" alt="" />
  <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="opin-1" /></a>
  <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="opin-2" /></a>
  <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="opin-3" /></a>
</main>
<div class="grandbig">
<div class="etitlemom">
    <h2 class="etitle">イベント情報</h2>
</div>
@foreach ($okinawa as $event)
<div class="big">
  <div class="information">
    <div class="imgholder"><img src="img/{{$event->image}}" alt="" /></div>
    <div class="schedule">
      <p id="THTH"><a href="{{ route('events.show', $event->id) }}">{{$event->title}}</a></p>
      <ul>
        @foreach ($event->schedules as $schedule)
          <li>{{$schedule->time}}</li>
        @endforeach
      </ul>
      <div class="location">場所:{{$event->place}}</div>
    </div>  
</div>
</div>
@endforeach
</div>

@endsection