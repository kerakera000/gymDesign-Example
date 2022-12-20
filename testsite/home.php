<?php get_header(); ?>

<section class="top">
    <div class="top__title-content">
        <h1 class="top__title-content--title">LOGO</h1>
        <p class="top__title-content--text">
            ここにジムのキャッチフレーズ<br>
            などを記載します。文字数制限<br> 
            あり。30文字程度
        </p>
    </div>
    <div class="top__title-img-content">
        <img class="top__title-img-content--img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-image.png" alt="何もない">
    </div>
    <div class="top__scroll-content">
        <div class="top__scroll-content--relative">
            <p class="top__scroll-content--relative--text">SCROLL</p>
            <span class="top__scroll-content--relative--span-one"></span>
            <span class="top__scroll-content--relative--span-two"></span>
        </div>
    </div>
</section>

<section class="news">
    <div class="news__title-box">
        <p class="news__title-box--text">NEWS</p>
    </div>
    <div class="news__inner">
        <?php
            /*選択したタクソノミー の項目取得*/
            $args = array(
                'post_type' => 'news', //カスタム投稿タイプ名の指定
                'posts_per_page' => 1, //投稿の取得数の指定 jsはまだ書かないから今だけ１投稿
                'order' => 'DESC',      //投稿の表示順の指定
                'post_status' => 'publish', //投稿の状態の指定3
                'tax_query' => array(
                array(
                    'taxonomy' => 'news-cat',  //カスタムタクソノミー
                    'terms' => array('news1'), //カスタムタクソノミーのカテゴリー（タクソノミーターム）
                    'field' => 'slug'
                ),
                ),
            );
            $the_query = new WP_Query( $args );

            if ($the_query->have_posts()) {     //
                while ($the_query->have_posts()) {
                    $the_query->the_post();

                    $title = the_title(NULL, NULL, false);
        ?>

            <div class="news__inner--content">
                <p class="news__inner--content--news-time">
                    <?php the_time('Y.m.d'); ?>
                </p>
                <div class="news__inner--content--block">|</div>
                <p class="news__inner--content--news-title">
                    <?php echo $title ?>
                </p>
            </div>

        <?php  }
            } else { ?>
            <p class="news-not-found">News記事がありません。</p>
        <?php  } ?>
        <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>
    </div>
    <button class="news__button">
        <p class="news__button--text">VIEW ALL</p>
        <img class="news__button--image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-view-all.png" alt="">
    </button>
</section>

<section class="about">
    <div class="about__content">
        <p class="about__content--subtitle subtitle">ABOUT</p>
        <h2 class="about__content--title">ジムについて</h2>
        <div class="about__content--block"></div>
        <p class="about__content--text">
            ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。<br>
            ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。<br>
            ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。</p>
        <button class="about__content--button">
            <a class="about__content--button--text">MORE</a>
        </button>
    </div>
</section>

<section class="service">
    <div class="service__content">
        <div class="service__content--text-content">
            <p class="subtitle">SUBTITLE</p>
            <h2 class="service__content--text-content--title">リード文です。ジムの強みとかを わかりやすく記載</h2>
            <div class="service__content--text-content--block"></div>
            <p class="service__content--text-content--text">ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。</p>
        </div>
        <img class="service__content--img-content\" src="<?php echo get_stylesheet_directory_uri(); ?>/images/service1.png" alt="">
    </div>
    <div class="service__content contentsub">
            <img class="service__content--img-content\" src="<?php echo get_stylesheet_directory_uri(); ?>/images/service2.png" alt="">
        <div class="service__content--text-content text-contentsub">
            <p class="subtitle">SUBTITLE</p>
            <h2 class="service__content--text-content--title">リード文です。ジムの強みとかを わかりやすく記載</h2>
            <div class="service__content--text-content--block"></div>
            <p class="service__content--text-content--text">ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。ジムの強み詳細記事を記入します。ジムのコンセプトなどを書く想定です。</p>
        </div>
    </div>
</section>

<section class="blog">
    
</section>

<?php get_footer(); ?>