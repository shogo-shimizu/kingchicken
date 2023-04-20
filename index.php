<?php
require_once('./wordpress/wp-load.php');
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish'
);

$the_query = new WP_Query($args);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="description" content="王様鶏排公式サイト。台湾から揚げ専門店！本場台湾の味を是非おためしください！">
    <title>(公式) 王様鶏排 -王様ジーパイ-</title>
    <script>
        (function(d) {
            var config = {
                    kitId: 'cit6ski',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <link rel="icon" type="image/png" href="./assets/images/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="css/opening.css">
    <link rel="stylesheet" href="css/toppage.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loading.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/inview.js"></script>
    <script src="./assets/plugins/imagesloaded.min.js"></script>
    <script src="js/toppage.js"></script>
    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/opening.js"></script>
    <script src="js/loading.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q448HTPHJB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Q448HTPHJB');
    </script>
</head>

<body>
    <div id="info">
        <h1>台湾からあげ</h1>
        <h1>群馬 伊勢崎 藤岡 軽井沢</h1>
        <h1>巨大からあげ</h1>
        <h1>ジーパイ</h1>
        <h1>鶏排</h1>
        <h1>王様鶏排</h1>
        <h1>王様ジーパイ</h1>
    </div>

    <div class="allWrap"></div>
    <!-- <div id="opening">
        <?php include('pages/opening.php'); ?>
    </div> -->
    <?php include('pages/loading.php'); ?>
    <header>
        <?php include('pages/header.php'); ?>
    </header>
    <div class="gradationCover"></div>
    <main>
        <div id="kodawari" class="contentTitle apearInview">
            <!-- <div> -->
            <h3>王様鶏排の</h3>
            <!-- </div> -->
            <!-- <div> -->
            <h3>こだわり</h3>
            <!-- </div> -->
        </div>
        <div class="contents">
            <div class="kodawari-img  apearInview">
                <picture>
                    <source srcset="./assets/images/webp/point.webp" type="image/webp">
                    <img src="./assets/images/point.jpg" alt="">
                </picture>
            </div>
            <div class="kodawari">
                <h2 class="apearInview"><span>本</span>場直伝</h2>
                <p class="apearInview">台湾からあげは国産鶏を職人が一枚ずつ丁寧に手切りをし、厳選された19種類のスパイスを使用した秘伝の調味料で36時間以上漬け込んでいるため、香ばしくクセになる味わいに仕上げています。<br>
                    さらに素材の風味を活かすため希少価値の高い岩塩を使用しています。
                </p>
            </div>
            <div class="kodawari">
                <h2 class="apearInview"><span>油</span>ぽくない</h2>
                <p class="apearInview">その理由は高級綿実油と白絞油をブレンドしているからです。<br>
                    また、健康面と美容面のどちらにおいても嬉しい効果があります。
                </p>
            </div>
            <div class="kodawari">
                <h2 class="apearInview">こだわりの<span>衣</span></h2>
                <p class="apearInview">
                    こだわりの衣は3種類のオリジナル粉を使用し、ほどよいサクサク感で肉の旨味を引き出しています。
                </p>
            </div>
        </div>
        <div id="osinagaki" class="contentTitle apearInview">
            <!-- <div> -->
            <h3>お品書き</h3>
            <!-- </div> -->
        </div>
        <div class="contents">
            <div class="menu">
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/handchicken_hand.webp" type="image/webp">
                            <img src="assets/images/handchicken_hand.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>王様鶏排</h4>
                        <p>¥550</p>
                        <h6>19種類のスパイスを36時間以上漬け込んだ巨大な台湾からあげ。</h6>
                        <p>ハーフサイズ ¥300</p>
                        <p>ひとくちサイズ ¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview karasa">
                    <div class="menu__image menu__image-karasa">
                        <picture>
                            <source srcset="assets/images/webp/karasa2.webp" type="image/webp">
                            <img src="assets/images/karasa2.JPG" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">

                    </div>
                </div>
                <div id="FlexWrap"></div>
                <!-- <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/spicy.webp" type="image/webp">
                            <img src="assets/images/spicy.JPG" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>辛辣鶏排</h4>
                        <p>¥600</p>
                        <h6>キャロライナリーパーを使用した上質な辛さ。でもしっかりとした旨味のある一品。</h6>
                        <p>ハーフサイズ ¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/spicy.webp" type="image/webp">
                            <img src="assets/images/spicy.JPG" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>超激辛辛辣鶏排</h4>
                        <p>¥650</p>
                        <h6>キャロライナリーパーを使用した上質な辛さ。でもしっかりとした旨味のある一品。</h6>
                        <p>ハーフサイズ ¥350</p>
                    </div>
                </div> -->
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_karaage.webp" type="image/webp">
                            <img src="assets/images/menu_karaage.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaage.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>熟成からあげ</h4>
                        <p>4個入り¥330</p>
                        <p>6個入り¥450</p>
                        <p>8個入り¥570</p>
                        <h6>香り高さが特徴のオリジナルからあげです。</h6>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_naget.webp" type="image/webp">
                            <img src="assets/images/menu_naget.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/nagets.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>台湾チキンナゲット</h4>
                        <p>¥280</p>
                        <h6>肉厚でジューシーに仕上がった、オリジナルチキンナゲットです。</h6>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_fpotato.webp" type="image/webp">
                            <img src="assets/images/menu_fpotato.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/potato.jpg" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>フライドポテト</h4>
                        <p>¥300</p>
                        <h6>ほんのり甘みを感じられる希少価値の高い岩塩を使用しております。</h6>
                        <!-- <h5>ハーフサイズ</h5> -->
                        <p>ハーフサイズ ¥180</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_hpotato.webp" type="image/webp">
                            <img src="assets/images/menu_hpotato.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/tebasaki.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>ハッシュドポテト</h4>
                        <p>¥120</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_cpotato.webp" type="image/webp">
                            <img src="assets/images/menu_cpotato.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/tebasaki.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>チーズポテト</h4>
                        <p>¥270</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_tebasaki.webp" type="image/webp">
                            <img src="assets/images/menu_tebasaki.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/tebasaki.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>香る手羽先</h4>
                        <p>¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_tebamoto.webp" type="image/webp">
                            <img src="assets/images/menu_tebamoto.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/tebamoto.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>香る手羽元</h4>
                        <p>¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_sakimoto.webp" type="image/webp">
                            <img src="assets/images/menu_sakimoto.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/sakimoto.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>香る手羽2種揚げ</h4>
                        <p>¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_torohoru.webp" type="image/webp">
                            <img src="assets/images/menu_torohoru.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>とろほるから揚げ</h4>
                        <p>¥420</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_torikawa.webp" type="image/webp">
                            <img src="assets/images/menu_torikawa.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>鶏皮</h4>
                        <p>¥150</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/menu_nankotu.webp" type="image/webp">
                            <img src="assets/images/menu_nankotu.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>ナンコツ</h4>
                        <p>¥300</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/sunagimo.webp" type="image/webp">
                            <img src="assets/images/sunagimo.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>砂肝</h4>
                        <p>¥300</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="obento" class="contentTitle apearInview">
            <!-- <div> -->
            <h3>お弁当</h3>
            <!-- </div> -->
        </div>
        <div class="contents">
            <div class="menu">
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/toriben.webp" type="image/webp">
                            <img src="assets/images/toriben.png" alt="">
                        </picture>
                    </div>
                    <div class="menu__price">
                        <h4>とりめし</h4>
                        <p>¥550</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/ziben.webp" type="image/webp">
                            <img src="assets/images/ziben.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/chickenbento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>鶏排弁当</h4>
                        <p>¥600</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/karaageben.webp" type="image/webp">
                            <img src="assets/images/karaageben.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>からあげ弁当</h4>
                        <p>¥600</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/ruro.webp" type="image/webp">
                            <img src="assets/images/ruro.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>ルーローハン</h4>
                        <p>¥600</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/tiro.webp" type="image/webp">
                            <img src="assets/images/tiro.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>チーローハン</h4>
                        <p>¥500</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/carry.webp" type="image/webp">
                            <img src="assets/images/carry.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>ジーパイカリー</h4>
                        <p>¥650</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/nishu.webp" type="image/webp">
                            <img src="assets/images/nishu.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>２種のからあげげ弁当</h4>
                        <p>¥620</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/nanban.webp" type="image/webp">
                            <img src="assets/images/nanban.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>鶏排南蛮弁当</h4>
                        <p>¥650</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/nyuro.webp" type="image/webp">
                            <img src="assets/images/nyuro.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>牛肉飯</h4>
                        <p>¥700</p>
                    </div>
                </div>
                <div class="menu__wrap apearInview">
                    <div class="menu__image">
                        <picture>
                            <source srcset="assets/images/webp/takana.webp" type="image/webp">
                            <img src="assets/images/takana.png" alt="">
                        </picture>
                        <!-- <img src="assets/images/karaagebento.JPG" alt=""> -->
                    </div>
                    <div class="menu__price">
                        <h4>高菜明太弁当</h4>
                        <p>¥600</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="osirase" class="contentTitle apearInview">
            <!-- <div> -->
            <h3>お知らせ</h3>
            <!-- </div> -->
        </div>
        <div class="contents">
            <?php
            if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) :
                    $the_query->the_post(); ?>
                    <div class="contents__item">
                        <div class="item__date apearInview">
                            <div>
                                <p><?php the_time('Y年'); ?></p>
                                <p><?php the_time('n月j日'); ?></p>
                            </div>
                        </div>
                        <div class="item__content apearInview">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div id="tenpo" class="contentTitle apearInview">
            <!-- <div> -->
            <h3>店舗情報</h3>
            <!-- </div> -->
        </div>
        <div class="contents">
            <div class="tenpo-wrap">

                <div class="tenpo apearInview">
                    <picture>
                        <source srcset="assets/images/webp/shop-huzioka.webp" type="image/webp">
                        <img src="assets/images/shop-huzioka.jpg" alt="">
                    </picture>
                    <!-- <img src="./assets/images/shop-isesaki.JPG" alt=""> -->
                    <h2>藤岡店(本店)</h2>
                    <p>11:00 〜 19:30</p>
                    <p>年中無休</p>
                    <p>群馬県藤岡市中栗須390-1</p>
                    <p>スーパーセンターフィール藤岡内</p>
                    <p><a href="tel:0274504567">TEL:0274-50-4567</a></p>
                </div>
                <div class="tenpo apearInview">
                    <picture>
                        <source srcset="assets/images/webp/shop-karuizawa.webp" type="image/webp">
                        <img src="assets/images/shop-karuizawa.jpg" alt="">
                    </picture>
                    <!-- <img src="./assets/images/shop-karuizawa.JPG" alt=""> -->
                    <h2>軽井沢店</h2>
                    <p>(平日)11:00 〜 17:00</p>
                    <p>(土日祝)10:00 〜 18:00</p>
                    <p>不定休</p>
                    <p>長野県北佐久郡軽井沢町軽井沢12-22</p>
                    <p><a href="tel:0267315294">TEL:0267-31-5294</a></p>
                </div>
                <div class="tenpo apearInview">
                    <picture>
                        <source srcset="assets/images/webp/shop-isesaki.webp" type="image/webp">
                        <img src="assets/images/shop-isesaki.JPG" alt="">
                    </picture>
                    <!-- <img src="./assets/images/shop-isesaki.JPG" alt=""> -->
                    <h2>伊勢崎店</h2>
                    <p>11:00 〜 19:00</p>
                    <p>火曜定休</p>
                    <p>群馬県伊勢崎市宮子町3412-2</p>
                    <p><a href="tel:08040083365">TEL:080-4008-3365</a></p>
                </div>
                <div class="tenpo apearInview">
                    <picture>
                        <!-- <source srcset="assets/images/webp/shop-isesaki.webp" type="image/webp"> -->
                        <img src="assets/images/kamisato.JPG" alt="">
                    </picture>
                    <!-- <img src="./assets/images/shop-isesaki.JPG" alt=""> -->
                    <h2>イオンタウン上里店</h2>
                    <p>10:00 〜 19:00</p>
                    <p>年中無休</p>
                    <p>埼玉県児玉郡上里町金久保359-1</p>
                    <p><a href="tel:05088852946">TEL:050-8885-2946</a></p>
                </div>
                <div class="fcInfo">
                    <h3>店舗数拡大中</h3>
                    <h2>オーナー様を募集しております</h2>
                    <a href="./pages/fcpage.php">
                        <div class="fcInfo__button" type="button">
                            <p>詳しくはこちら</p>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </main>
    <footer>
        <?php include('pages/footer.php'); ?>
    </footer>
    <!-- ↓webP対応かどうかチェックしてhtmlタグのクラス付与 -->
    <script src="./assets/plugins/modernizr-custom.js"></script>
</body>

</html>