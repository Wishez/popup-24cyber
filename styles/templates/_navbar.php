<?php

use yii\helpers\Url;

?>
<div class="forumPeopleSectionHead font-size_14 padding-top_base-force panel-heading background-color_pale forumSectionHeading parent parent_wrap parent_row  font-size_14 parent_h-centered-xs">
  <ul role="nav" aria-label="Навигация между списком участников и модераторов"
    class="parent parent_wrap parent_row  parent_h-centered-xs list-unstyled margin-bottom_zero">
      <li role="presentation" class="margin-right_base-quarter">
          <a href="<?= Url::to(['members/index']) ?>"
              class="peopleGroupNavigationButton parent parent_v-centered tapButton <?= $active == 'members' ? 'tapButton_green' : 'tapButton_white tapButton_greenHover ' ?>">
              <span class="margin-right_base"><?= Yii::t('podium/view', 'Участники') ?></span>

              <span class="fa fa-users font-size_18" aria-hidden="true"></span>
          </a>
      </li>

      <li role="presentation" class="margin-right_base">
          <a href="<?= Url::to(['members/mods']) ?>"
            class="peopleGroupNavigationButton parent parent_v-centered tapButton <?= $active == 'moderators' ? 'tapButton_green' : 'tapButton_white tapButton_greenHover' ?>">
              <span class="margin-right_base"><?= Yii::t('podium/view', 'Moderation Team') ?></span>

              <span class="glyphicon glyphicon-pencil font-size_18" aria-hidden="true"></span>
          </a>
      </li>
  </ul>

  <div class="quantityPeopleNotesSelect  margin-left_auto parent parent_row parent_v-centered margin-top_small-xxs">
    <div class="position_relative">
      <span id="quantityNotesPerPage"
        class=" padding-right_10 opacity_7 font-size_12">
        <?=Yii::t('forum', 'Количество результатов на странице')?>
      </span>

      <button id="quantityNotesPerPageButton" type="button" class="quantityPeopleNotesSelect__button border_bend font-size_12 font-weight_bold btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span id="currentQuantityNotes" class="opacity_7">5</span>&nbsp;
           <span class="caret"></span>
      </button>

      <ul class="dropdown-menu dropdown-menu-right cabinetDropdownMenu" aria-labelledby="quantityNotesPerPage">
        <li><button class="unstyledButton width_fill text-left" data-quantity-notes="5">5</button></li>
        <li><button class="unstyledButton width_fill text-left" data-quantity-notes="10">10</button></li>
        <li><button class="unstyledButton width_fill text-left" data-quantity-notes="20">20</button></li>
        <li><button class="unstyledButton width_fill text-left" data-quantity-notes="50">50</button></li>
      </ul>
    </div>
  </div>
</div>
