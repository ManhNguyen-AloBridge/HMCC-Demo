<?php /* Template Name: Join Us page */ ?>

<?php
get_header();

$data = get_fields();


?>

<div class="join-us">
    <div class="join-us__header">
        <h2 class="join-us__title"><?= $data['title'] ?></h2>
        <h3 class="join-us__sub-title text-lg"><?= $data['sub_title'] ?></h3>
    </div>


    <div class="join-us__main">
        <div class="join-us__condition">
            <?php
            foreach ($data['condition'] as $item) {
            ?>
                <div class="join-us__condition-item">
                    <div class="bg-color">
                        <div class="border-index">
                            <h3 class="condition-item__index text-6xl"><span class="index"><?= $item['index'] ?></span></h3>
                        </div>
                        <div class="condition-item__content">
                            <p><?= $item['content'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="join-us__step">
            <h3 class="step__title text-2xl"><span><?= $data['step']['step_title'] ?></span></h3>
            <div class="step-main">
                <?php

                foreach ($data['step']['step_item'] as $item) {
                ?>

                    <div class="step-main__item">
                        <div class="step-main__index"><span><?= $item['index'] ?></span></div>
                        <div class="stc">
                            <p class="step-main__title text-xl"><?= $item['title'] ?></p>
                            <p class="step-main__content text-lg"><?= $item['content'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="enrollment-and-annual-fee">
            <h3 class="enrollment-and-annual-fee__title"><?= $data['enrollment_and_annual_fee']['title'] ?></h3>

            <div class="enrollment-and-annual-fee__main">
                <table class="mt-3">
                    <tr>
                        <th class="w-1h3" rowspan="2" colspan="2">入会金</th>
                        <th>Local</th>
                        <th>Global</th>
                        </th>
                    <tr>
                        <td><?= $data['enrollment_and_annual_fee']['data']['register']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['register']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <th rowspan="12">年会費</th>
                        <td class="text-month">7月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jul']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jul']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">8月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['aug']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['aug']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">9月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['sep']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['sep']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">10月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['oct']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['oct']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">11月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['nov']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['nov']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">12月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['dec']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['dec']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">1月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jan']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jan']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">2月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['feb']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['feb']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">3月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['mar']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['mar']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">4月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['apr']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['apr']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">5月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['may']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['may']['global_price'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-month">6月</td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jun']['local_price'] ?></td>
                        <td><?= $data['enrollment_and_annual_fee']['data']['jun']['global_price'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
<div class="guest-participation-application">
    <h2 class="guest-participation-application__title text-2xl"><?= $data['guest_participation_application']['title'] ?></h2>
    <h3 class="guest-participation-application__sub-title text-xl"><?= $data['guest_participation_application']['sub_title'] ?></h3>
    <p class="guest-participation-application__content"><?= $data['guest_participation_application']['content'] ?></p>

    <a href="#" class="guest-participation-application__tag-a w-button">
        <button class="guest-participation-application__btn text-xl">
            <?= $data['guest_participation_application']['text_button'] ?>
        </button>
    </a>
</div>


<?php
get_footer();
?>