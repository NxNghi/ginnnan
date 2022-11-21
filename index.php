<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Home page',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<section class="banner">
    <div class="container">
        <h3>自然の恵み <br>ジビエの郷土料理</h3>
        <p>Nature’s Bounty. Local Cuisine of Ghibier.</p>
        <p>
            都会の喧騒を離れ、豊かな自然と静けさに囲まれた岐阜県揖斐郡大野町。
            地産地消にこだわり、季節ごとに採れた素材の強みを活かした郷土料理の数々。
            そして、腕利き猟師と共に授かった自然の恵みを清流ジビエ独自の製法によって処理、調理されたワンランク上質なジビエ肉の数々。
            そこには日本のすばらしい伝統食材を使った、ひとつ一つのストーリーがある。
            おいしいという味わいだけでなく、「食」に対する価値観が変わる。
            ジビエの郷土料理「銀杏」にぜひお越しください。
        </p>
        <p>
            Away from the hustle and bustle of the city, surrounded by rich nature and tranquility Ono-cho, Ibi-gun, Gifu Prefecture.
            We are committed to local production for local consumption, and we offer a variety of local cuisine that makes the most of the strengths of the ingredients available in each season. The town’s local cuisine makes the best use of the best ingredients available in each season. We also work together with skilled hunters to bring nature’s bounty to the table. The natural bounty given to us by skilled hunters is processed and cooked according to our own unique method. The meat is processed and cooked according to Kiyoryu Jibier’s unique method.
            There is a story behind each and every one of the wonderful traditional Japanese ingredients. Each one has its own story.
            The taste is not only delicious, but it will change the way you look at food. It will change your sense of value about “food”.
            Please come to 「GINNAN」 for local gibier cuisine.
        </p>
    </div>
</section>
<section class="course">
    <div class="container">
        <div class="course__heading heading">
            <h3>季節のお料理</h3>
            <p>Course</p>
        </div>
        <div class="course__wrap">
            <div class="course__top">
                <div>
                    <h6>
                    お昼のおもてなし
                    <span>Lunch</span>
                    </h6>
                    <p><strong>4,500</strong>yen (tax included)</p>
                    <h6>夜のおもてなし
                        <span>Dinner</span>
                    </h6>
                    <p><strong>16,000</strong>yen (tax included)</p>
                    <p><strong>30,000</strong>yen (tax included)</p>
                </div>
                <div>
                    <img src="<?php assets('./images/card.svg')?>" alt="img-course">
                </div>
            </div>
            <div class="course__wrap--second">
                <div>
                    <h6>   
                        自慢のジビエ肉は、その処理方法や調理方法にこだわり抜き、素材の味を存分に味わえます。
                        そのジビエ肉を中心に地元で採れた山菜や野菜、夏には鮎といった季節ごとに旬の食材を使用するため、毎回お決まりのコース内容ではありませんのでご了承ください。
                        その時々で採れた旬の食材をふんだんに使用したジビエの郷土料理です。
                    </h6>
                    <p>
                        We are proud of our gibier meat, which is processed and cooked with the utmost care, allowing you to enjoy the full flavor of the ingredients.We use seasonal ingredients such as local wild vegetables and ayu (sweetfish) in the summer, so please note that there is no set course menu every time you dine here.This is a local gibier dish that makes abundant use of seasonal ingredients available at that time.
                    </p>
                </div>
                <div>
                    <img src="<?php echo assets('./images/card-1.svg')?>" alt="img-course">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offered">
    <div class="container">
        <div class="offered__heading heading">
            <h3>食材</h3>
            <p>Foods offered</p>
        </div>
        <div class="offered__wrap">
            <img src="<?php echo assets('./images/card-2.svg')?>" alt="img-offered">
            <div>
                <img src="<?php echo assets('./images/card-3.svg')?>" alt="img-offered">
                <img src="<?php echo assets('./images/card-4.svg')?>" alt="img-offered">
            </div>
        </div>
        <div class="offered__card">
            <h4>ジビエ<span>Wild game food</span></h4>
            <h6>鹿、猪、熊、穴熊など</h6>
            <p>Deer, boars, bears, cave bears, etc.</p>
            <h4>季節の食材<span>Seasonal Ingredients</span></h4>
            <h6>鴨、鮎、スッポンや、地元で採れた山菜や野菜など</h6>
            <p>Duck, ayu fish, suppon, and locally grown wild vegetables and greens.</p>
        </div>
    </div>
</section>
<section class="restaurant">
    <div class="container">
        <div class="restaurant__heading heading">
            <h3>お店のご紹介</h3>
            <p>Our Restaurant</p>
        </div>
        <div class="restaurant__wrap">
            <div class="restaurant__warp--left">
                <div>
                    <img src="<?php echo assets('./images/card-5.svg')?>" alt="img-restaurant">
                </div>
                <div>
                    <img src="<?php echo assets('./images/card-6.svg')?>" alt="img-item-restaurant">
                    <img src="<?php echo assets('./images/card-7.svg')?>" alt="img-item-restaurant">
                    <img src="<?php echo assets('./images/card-8.svg')?>" alt="img-item-restaurant">
                </div>
            </div>
        </div>
        <div class="restaurant__description">
            <h6>
            そして特別な時間を、ご自身のプライベートな時間、空間としてゆっくり過ごしていただけるよう、基本的に予約制でのお食事となっております。
            団体貸切り10名様からご予約も承ります。
            また、お食事後は離れの別室、お風呂もご用意しておりますので、心ゆくまでゆっくりとお過ごしください。
            </h6>
            <p>
                Fill your stomach as well as your heart with happiness.And to ensure that you can spend your special time as your own private time and space.Basically, we accept reservations only. Reservations are accepted from a group of 10 people.We also have a separate room and bath available for you to relax to your heart’s content after your meal.
            </p>
        </div>
    </div>
</section>
<section class="gifu">
    <div class="container">
        <div class="gifu__heading heading">
            <h3>岐阜 大野町</h3>
            <p>Ono-cho, Gifu</p>
        </div>
        <div class="gifu__wrap">
            <div>
                <img src="<?php echo assets('./images/card-9.svg')?>" alt="img-gifu">
            </div>
            <div>
                <h6>
                    「柿と薔薇の町」大野町。岐阜市から北西部に位置する人口約２万人、のどかな田舎町。近年は東海環状自動車道「大野神戸IC」の開通と「道の駅 パレットピアおおの」などで、賑わいをみせています。
                    大野町の北部にある「銀杏」の近くには、素晴らしい原生林や山々が広がり、春には桜、秋には彼岸花が咲く三水川や、どこか懐かしい田園風景、1500年以上も前に作られた国の史跡に指定されている古墳群があったりと、日本のノスタルジックな一面も垣間見れます。
                </h6>
                <p>
                    Ono-cho, the “town of persimmons and roses.”
                    Located northwest of Gifu City, Ono is a peaceful rural town with a population of approximately 20,000.
                    In recent years, with the opening of the “Ono-Kobe IC” on the Tokai Loop Expressway and the “Roadside Station Palette Pia Ono,” the town has been bustling with activity.
                    Near ｢GINNAN｣ in the northern part of Ono, there are wonderful virgin forests and mountains, the Sanzui River with cherry blossoms in spring and higanbana in fall, nostalgic rural scenery, and a group of ancient tombs designated as a national historic site that were built over 1,500 years ago, giving a glimpse of a nostalgic aspect of Japan.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="access">
    <div class="container">
        <div class="access__heading heading">
            <h3>アクセス</h3>
            <p>Access</p>
        </div>
        <div class="access__map">
            <img src="<?php echo assets('./images/card-10.svg')?>" alt="img-map">
        </div>
    </div>
</section>
<?php
template_part('footer');
