<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php assets('css/styles.css')?>">
    <title><?php echo isset($page_title)?$page_title:'New Document'?></title>
</head>
<body>
<header class="header header--home sticky">
    <div class="container">
        <div class="header__nav">
            <div class="menu">
                <nav>
                    <ul>
                        <?php 
                            $links = [
                                [
                                    'title' => 'ご予約',
                                    'description' => 'Reservation'
                                ],
                                [
                                    'title' => '季節のお料理',
                                    'description' => 'Seasonal Cuisine'
                                ],
                                [
                                    'title' => '食材',
                                    'description' => 'Foods offered'
                                ],
                                [
                                    'title' => 'お店のご紹介',
                                    'description' => 'Our Restaurant'
                                ],
                                [
                                    'title' => '岐阜 大野町',
                                    'description' => 'Ono-cho, Gifu'
                                ],
                                [
                                    'title' => 'アクセス',
                                    'description' => 'Access'
                                ],

                            ];
                            foreach($links as $item):
                        ?>
                        <li>
                            <a href="#">
                            <?php echo isset($item) ? $item['title'] : ''?>
                            <span><?php echo isset($item) ? $item['description'] : ''?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <a href="#" class="humburger"></a>
            </div>
            <div class="header__more">
                <a href="#"><img src="<?php echo assets("./images/icon-instagram.svg")?>" alt="icon-img"></a>
                <a href="#"><img src="<?php echo assets("./images/icon-line.svg")?>" alt="icon-img"></a>
                <a href="#"><img src="<?php echo assets("./images/icon-twitter.svg")?>" alt="icon-img"></a>
            </div>
        </div>
        <div class="header__button">
            <div class="header__button--left">
                <ul>
                    <li>予約日時</li>
                    <li><span>2022.</span><strong>00/00</strong></li>
                    <li>ご利用人数</li>
                    <li><strong>00</strong>名</li>
                    <li>
                        <li>
                            <div></div>
                            お食事
                        </li>
                        <li>
                            <div></div>
                            ご宿泊
                        </li>
                    </li>
                </ul>
            </div>
            <div class="header__button--right">
                <a href="#">予約検索</a>
            </div>
        </div>
    </div>
</header>
