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

<section class="karioki"></section>

<?php get_footer(); ?>