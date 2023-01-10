<?php /* Template Name: Home page */ ?>

<?php
get_header();


?>

<div class="home-page">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');

    $data = get_fields();
    ?>

    <div class="about-eo" style="
    background-image:url(<?= $data['about_eo']['background_image'] ?>);
    background-repeat: no-repeat;
    background-position-x: right;
    ">
        <div class="about-eo__content-title">
            <h2 class="about-eo__title text-title"><?= $data['about_eo']['title'] ?></h2>
            <h3 class="about-eo__sub-title text-lg"><?= $data['about_eo']['sub_title'] ?></h3>
            <a href="#" class="about-eo__tag-a w-button button-l">
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


    <div class="message">
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


    <div class="our-visions">
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


    <?= var_dump($data['activity']); ?>
    <div class="activity">
        <div class="activity__content-main row p-0">
            <?php foreach($data['activity']['content'] as $item ) {?>
                <div class="item col-6 p-0" style="background-image: url(<?= $item['background_image'] ?>);">
                    <p class="item__title"><?= $item['title'] ?></p>
                    <p class="item__content"><?= $item['content'] ?></p>
                </div>
            <?php }?>
        </div>
        <div class="activity__content-title">
            <h2 class="activity__title text-title"><?= $data['activity']['title'] ?></h2>
            <h3 class="activity__sub-title text-lg"><?= $data['activity']['sub_title'] ?></h3>
            <a href="#" class="activity__tag-a w-button button-l">
                <button class="activity__btn">
                    <?= $data['activity']['text_button'] ?>
                </button>
            </a>
        </div>

        <a href="#" class="activity__tag-a w-button button-s">
            <button class="activity__btn">
                <?= $data['activity']['text_button'] ?>
            </button>
        </a>
    </div>
</div>





<?php
get_footer();
?>