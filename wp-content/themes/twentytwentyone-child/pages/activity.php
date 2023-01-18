<?php /* Template Name: Activity */ ?>

<?php
get_header();

$data = get_fields()['activity'];
?>

<div class="activity-page">
    <div class="activity-page__header">
        <h2 class="activity-page__title"><?= $data['title'] ?></h2>
        <h3 class="activity-page__sub-title text-lg"><?= $data['sub_title'] ?></h3>
    </div>

    <div class="activity-page__main">
        <p class="activity-page__describle text-xl"><?= $data['describle'] ?></p>
        <div class="activity-page__content">
            <?php

            foreach ($data['content'] as $item) {
            ?>
                <div class="activity-page__item">
                    <img class="item__image" src="<?= $item['image'] ?>" alt="image">
                    <div class="item__content">
                        <h3 class="item__title text-xl"><span><?= $item['title'] ?></span></h3>
                        <p class="item__describle"><?= $item['describle'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>

<?php
get_footer();
?>