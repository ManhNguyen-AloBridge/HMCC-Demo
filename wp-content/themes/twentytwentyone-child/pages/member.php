<?php /* Template Name: Member page */ ?>

<?php
get_header();

$data = get_fields();

$dataMembers = query_posts(array(
    'post_type' => 'news'
));

?>

<div class="member">
    <div class="member__header">
        <h2 class="member__title"><?= $data['title'] ?></h2>
        <h3 class="member__sub-title text-lg"><?= $data['sub_title'] ?></h3>
    </div>

    <div class="member__main">
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
</div>


<?php
get_footer();
?>