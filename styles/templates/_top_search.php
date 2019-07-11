<?php

use yii\helpers\Html;

?>

<?php if (!isset($this->params['no-search']) || $this->params['no-search'] !== true): ?>
  <?= Html::beginForm(['forum/search'], 'get'); ?>
    <div class="form-group forumTopSearch margin-left_auto">
      <div class="forumSearchController position_relative parent">
        <input type="search" name="query" value="" class="forumSearchController__input form-control border_bend block border_none height_fill width_fill index_normal" placeholder="Поиск по форуму"/>

        <button aria-label="Искать" type="submit" class=" index_positive border_bend btn submitButton submitButton_green parent parent_centered position_absolute forumSearchController__button">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div>
    </div>
  <?= Html::endForm(); ?>
<?php endif; ?>
