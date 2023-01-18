<?php /* Template Name: Home page */ ?>

<?php
get_header();

$data = get_fields();
?>

<div class="home-page">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>

    <div class="about-eo" style="
    background-image:url(<?= $data['about_eo']['background_image'] ?>);
    background-repeat: no-repeat;
    background-position-x: right;
    ">
        <div class="mw-1200 d-flex">
            <div class="about-eo__content-title">
                <h2 class="about-eo__title text-title"><?= $data['about_eo']['title'] ?></h2>
                <h3 class="about-eo__sub-title text-lg"><?= $data['about_eo']['sub_title'] ?></h3>
                <a href="http://www.eojapan.org/" class="about-eo__tag-a w-button button-l">
                    <button class="about-eo__btn">
                        <?= $data['about_eo']['text_button'] ?>
                    </button>
                </a>
            </div>
            <div class="about-eo__content-main">
                <p>
                    <?php
                    $string = '';
                    $dataContent = $data['about_eo']['content'];
                    $last_key = end(array_keys($dataContent));
                    foreach ($dataContent as $key => $item) {
                        $string = $string . $item;
                        if ($key != $last_key) {
                            $string = $string . '<br/><br/>';
                        }
                    }

                    echo $string;
                    ?>
                </p>
            </div>

            <a href="#" class="about-eo__tag-a w-button button-s">
                <button class="about-eo__btn">
                    <?= $data['about_eo']['text_button'] ?>
                </button>
            </a>
        </div>
    </div>


    <div class="message">
        <div class="mw-1200 d-flex">
            <div class="message__content-main">
                <p class="message__title-content text-3xl">
                    <?= $data['message']['content']['title_content'] ?>
                </p>
                <div class="detail-info">
                    <div class="detail-info__image">
                        <img src="<?= $data['message']['content']['image'] ?>" alt="message">
                    </div>
                    <div class="detail-info__describe">
                        <p class="detail-info__position text-xl fw-bold"><?= $data['message']['content']['position'] ?></p>
                        <p class="detail-info__position text-3xl fw-bold"><?= $data['message']['content']['name'] ?></p>
                        <p class="detail-info__position mt-2 text-base"><?= $data['message']['content']['describe'] ?></p>
                    </div>
                </div>

            </div>
            <div class="message__content-title">
                <div class="content-title">
                    <h2 class="message__title text-title">
                        <?= $data['message']['title'] ?>
                    </h2>
                    <h3 class="message__sub-title"><?= $data['message']['sub_title'] ?></h3>
                </div>
            </div>
        </div>
    </div>


    <div class="our-visions">
        <div class="mw-1200 d-flex">
            <div class="our-visions__content-title">
                <h2 class="our-visions__title"><?= $data['our_visions']['title'] ?></h2>
                <h3 class="our-visions__sub-title"><?= $data['our_visions']['sub_title'] ?></h3>
            </div>
            <div class="our-visions__content-main">
                <div class="our-visions__block">
                    <?php
                    foreach ($data['our_visions']['content'] as $item) {
                    ?>
                        <div class="block">
                            <p class="block__index text-5xl text-4xl fst-italic">0 <span class="block__index-number"><?= $item['index'] ?></span></p>
                            <div class="block__content">
                                <h3 class="block__title fst-italic"><?= $item['title'] ?></h3>
                                <p class="text-xl"><?php
                                                    if (gettype($item['content']) != 'array') {
                                                        echo $item['content'];
                                                    } else {
                                                        $string = '';
                                                        foreach ($item['content'] as $key => $i) {
                                                            $string .= '<li>' . $item['content'][$key] . '</li>';
                                                        }

                                                        echo $string;
                                                    }
                                                    ?></p>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="activity">
        <div class="mw-1200 d-flex">
            <div class="activity__content-main m-0">
                <?php foreach ($data['activity']['content'] as $item) { ?>
                    <div class="item">
                        <div class="item__content" style="background-image: url(<?= $item['background_image'] ?>);">
                            <p class="item__title text-3xl"><?= $item['title'] ?></p>
                            <p class="item__describe"><?= $item['content'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="activity__content-title">
                <div class="content-title">
                    <h2 class="activity__title text-title"><?= $data['activity']['title'] ?></h2>
                    <h3 class="activity__sub-title text-lg"><?= $data['activity']['sub_title'] ?></h3>
                    <a href="<?= get_site_url()?>/?page_id=244" class="activity__tag-a w-button button-l">
                        <button class="activity__btn">
                            <?= $data['activity']['text_button'] ?>
                        </button>
                    </a>
                </div>
            </div>

            <a href="<?= get_site_url()?>/?page_id=244" class="activity__tag-a w-button button-s">
                <button class="activity__btn">
                    <?= $data['activity']['text_button'] ?>
                </button>
            </a>
        </div>
    </div>

    <div class="member mw-1200 d-flex">
        <div class="member__content-title">
            <h2 class="member__title text-title"><?= $data['member']['title'] ?></h2>
            <h3 class="member__sub-title text-lg"><?= $data['member']['sub_title'] ?></h3>
            <a href="<?= get_site_url()?>/?page_id=253" class="member__tag-a w-button button-l">
                <button class="member__btn">
                    <?= $data['member']['text_button'] ?>
                </button>
            </a>
        </div>
        <div class="member__content-main">

            <?php
            $dataMembers = query_posts(array(
                'post_type' => 'news'
            ));

            foreach ($dataMembers as $item) {
                $memberInfo = get_fields($item->ID);
            ?>
                <div class="member__item">
                    <div class="member__image">
                        <img src="<?= $memberInfo['logo'] ?>" alt="" class="member__logo">
                        <p class="member__position"><?= $memberInfo['position'] ?></p>
                    </div>
                    <p class="member__company text-sm"><?= $memberInfo['company'] ?></p>
                    <p class="member__name fw-bold"><?= $memberInfo['name'] ?></p>
                </div>

            <?php
            }
            ?>
        </div>
        <a href="<?= get_site_url()?>/?page_id=253" class="member__tag-a w-button button-s">
            <button class="member__btn">
                <?= $data['member']['text_button'] ?>
            </button>
        </a>
    </div>

    <div class="news">
        <div class="mw-1200 d-flex">
            <div class="news__content-main m-0">
                <?php
                $dataNews = query_posts(array(
                    'post_type' => 'post'
                ));

                foreach ($dataNews as $item) { ?>
                    <div class="item">
                        <div class="item__content">
                            <a href="<?= get_site_url()?>/?page_id=263" class="item__tag-a">
                                <span class="block">
                                    <span class="text-xl item__title text-3xl text-xs"><?= $item->post_date ?></span>
                                    <span class="item__describe"><?= $item->post_title ?></span>
                                </span>
                                <i class="fa-solid fa-chevron-right item__arrow-icon"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="news__content-title">
                <div class="content-title">
                    <h2 class="news__title text-title"><?= $data['news']['title'] ?></h2>
                    <h3 class="news__sub-title text-lg"><?= $data['news']['sub_title'] ?></h3>
                    <a href="#" class="news__tag-a w-button button-l">
                        <button class="news__btn">
                            <?= $data['news']['text_button'] ?>
                        </button>
                    </a>
                </div>
            </div>

            <a href="<?= get_site_url()?>/?page_id=263" class="news__tag-a w-button button-s">
                <button class="news__btn">
                    <?= $data['news']['text_button'] ?>
                </button>
            </a>
        </div>
    </div>



    <div class="join-us">
        <div class="mw-1200 text-center">
            <h2 class="join-us__title text-title"><?= $data['join_us']['title'] ?></h2>
            <h3 class="join-us__sub-title text-lg mt-2"><?= $data['join_us']['sub_title'] ?></h3>
            <div class="join-us__btns">
                <a href="<?= get_site_url()?>/?page_id=270" class="join-us__tag-a w-button">
                    <button class="join-us__btn mt-5"><?= $data['join_us']['text_button_1'] ?></button>
                </a>
                <a href="https://www.google.com.vn/" class="join-us__tag-a w-button">
                    <button class="join-us__btn mt-5 ms-3"><?= $data['join_us']['text_button_2'] ?></button>
                </a>
            </div>
        </div>
    </div>

    <div class="eo-hokkaido" style="background-image: url(<?= $data['eo_hokkaido']['background_image'] ?>);">
        <div class="mw-1200 d-flex">
            <div class="eo-hokkaido__content-title">
                <h2 class="eo-hokkaido__title text-title"><?= $data['eo_hokkaido']['title'] ?></h2>
                <h3 class="eo-hokkaido__sub-title text-lg"><?= $data['eo_hokkaido']['sub_title'] ?></h3>
                <a href="#" class="eo-hokkaido__tag-a w-button button-l">
                    <button class="eo-hokkaido__btn">
                        <?= $data['activity']['text_button'] ?>
                    </button>
                </a>
            </div>
            <div class="eo-hokkaido__content-main">
                <p><?= $data['eo_hokkaido']['content'] ?></p>
            </div>

            <a href="#" class="eo-hokkaido__tag-a w-button button-s">
                <button class="eo-hokkaido__btn">
                    <?= $data['activity']['text_button'] ?>
                </button>
            </a>
        </div>
    </div>



</div>

<?php
get_footer();
?>