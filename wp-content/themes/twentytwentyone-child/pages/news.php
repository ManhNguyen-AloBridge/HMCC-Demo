<?php /* Template Name: News page */ ?>

<?php
get_header();

$data = get_fields();

?>

<div class="news">
    <div class="news__header">
        <h2 class="news__title"><?= $data['title'] ?></h2>
        <h3 class="news__sub-title text-lg"><?= $data['sub_title'] ?></h3>
    </div>

    <div class="news__main">
        <?php
        $dataNews = query_posts(array(
            'post_type' => 'post'
        ));

        foreach ($dataNews as $item) { ?>
            <div class="item">
                <div class="item__content">
                    <a href="#" class="item__tag-a">
                        <span class="block">
                            <p class="item__title text-xs"><?= $item->post_date ?></p>
                            <p class="text-xl item__describe"><?= $item->post_title ?></p>
                        </span>
                        <i class="fa-solid fa-chevron-right item__arrow-icon"></i>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>


    <?php
    get_footer();
    ?>

