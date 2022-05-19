@extends('layouts.frame')

@section('content')
    <div class="banner"><img class="mySlides" src="/img/P-1.png" /></div>
    <div class="banner"><img class="mySlides" src="/img/P-2.png" /></div>
    <div class="banner"><img class="mySlides" src="/img/P-3.png" /></div>
    <script src="{{ asset('js/banner.js')}}"></script>
    <div class="box0">
      <div class="box1">
        <div class="box2">
            <h2 class="etitle">フィリピン基本情報</h2> <br />
            <ul>
                <li>人口：約1億人強（世界12位、日本は10位）</li>
                <li>平均年齢：24歳（日本は46歳）</li>
                <li>面積：日本の約80% 首都：マニラ</li>
                <li>通貨：ペソ（１フィリピンペソ＝約2.2円)</li>
                <li>公用語：タガログ語、英語（全員話せますが、母語は80種類以上</li>
                <li>宗教：ASEAN唯一のキリスト教</li>
                <li>国民的スポーツ：バスケットボール、ボクシングなど</li>
                <li>島の数：7,000以上の島から成る</li>
                <li>経済成長率:毎年約６%</li>
                <li>気候: 2-5月乾季（3-5月真夏）6-11月雨季</li>    一年を通して30-35度で日本の夏に比べて湿気が少ない

            </ul>

        </div>
        
        <div class="box3">
          <h2 class="etitle">魅力</h2> <br>
          フィリピンは東南アジアに位置していて日本からはおよそ4時間のフライトで到着します。
          綺麗な海に囲まれ、自然が豊かな国です。フィリピン人は皆フレンドリーでツーリスト
          が大好きです。彼らは私たちにエンターテインメントを施すのが大好きで、私たちの笑顔
          が彼らのパフォーマンスへのお返しになるようです。マニラの都市マカティや、セブ島
          都市のセブ市には大きなショッピグモール、遊園地、水族館、動物園と娯楽も発達していて
          シティ好きな人にはとても過ごしやすい環境があります。しかし、ボホール島や
          マラパスクア島など、田舎の地方に行くと、そばには海、山、川、滝が当たり前のように
          あります。まだまだテクノロジーは発達していないけれど、今しか見れない原始的な、自然に
          囲まれながらありのまま生活する人々の姿をじっくり見学、そして体験ができます。
          一週間の短期滞在でも、数ヶ月、数年の長期滞在でも物価や生活費が安い（1ヶ月あたり約
          15万円）なのでコスパも最高です！フィリピンに来ても怖がらないで！！フィリピンでは
          日本人社会が成熟しているのでとてもコミュニケーションも取りやすいです。
        </div>
      </div>
    </div>

    <main>
      <img src="img/pmap.png" alt="" />
      <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="pin-1" /></a>
      <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="pin-2" /></a>
      <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="pin-3" /></a>
      <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="pin-4" /></a>
      <a href="#THTH"><img src="img/drawing-pin-1.png" alt="" class="pin-5" /></a>
    </main>
    <div class="grandbig">
    <div class="etitlemom">
        <h2 class="etitle">イベント情報</h2>
    </div>

    @foreach ($philippines as $event)
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
