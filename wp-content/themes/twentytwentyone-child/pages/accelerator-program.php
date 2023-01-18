<?php
/* Template Name: Accelerator Program*/

get_header();

$data = get_fields()['accelerator_program'];
?>

<div class="accelerator-program">
    <div class="accelerator-program__eo-hokkaido" style="background-image: url(<?= $data['eo_hokkaido_incubation_program']['background_image']  ?>)">
        <h2 class="eo-hokkaido__title"><?= $data['eo_hokkaido_incubation_program']['title'] ?></h2>
    </div>

    <div class="accelerator-program__about">
        <div class="mw-1200 d-flex">
            <div class="about__title-content">
                <h2 class="about__title text-title"><?= $data['about']['title'] ?></h2>
                <h3 class="about__sub-title"><?= $data['about']['sub_title'] ?></h3>
            </div>
            <div class="about__main-content"><?= $data['about']['content'] ?></div>
        </div>
    </div>

    <div class="accelerator-program__sub-content">

        <?php
        foreach ($data['sub_content'] as $item) {
        ?>
            <div class="sub-content__item">
                <img src="<?= $item['image'] ?>" alt="" class="sub-content__image">
                <h3 class="sub-content__title text-2xl"><?= $item['title'] ?></h3>
                <p class="sub-content__description"><?= $item['description'] ?></p>
            </div>
        <?php
        }
        ?>
    </div>


    <div class="accelerator-program__program">
        <div class="program__title-content">
            <h2 class="program__title text-title"><?= $data['program']['title']?></h2>
            <h3 class="program__sub-title fw-bold text-lg"><?= $data['program']['sub_title']?></h3>
        </div>

        <div class="program__main-content mw-1200">
            <?php
            foreach ($data['program']['content'] as $item) {
            ?>
                <div class="program__item">
                    <div class="item__content-program">
                        <p class="item__title text-xl"><?= $item['title'] ?></p>
                        <p class="item__describe"><?= $item['describe'] ?></p>
                    </div>
                    <img src="<?= $item['image']?>" alt="" class="program__image">
                </div>
            <?php
            }
            ?>

        </div>
    </div>

    <div class="accelerator-program__director">
        <div class="director__title-content">
            <h2 class="director__title"><?= $data['director']['title']?></h2>
            <h3 class="director__sub-title"><?= $data['director']['sub_title']?></h3>
        </div>
        <div class="director__main-content">
            <img src="<?= $data['director']['content']['image']?>" alt="" class="director__image">
            <div class="director__content">
                <p class="director__position"><?= $data['director']['content']['position']?></p>
                <p class="director__name"><?= $data['director']['content']['name']?></p>
                <p class="director__describe"><?= $data['director']['content']['description']?></p>
            </div>
        </div>
    </div>


    <?= var_dump($data['director']); ?>
</div>


<?php

get_footer();

?>