<?php
/**
 * @file
 * Template for rendering opening hours week.
 */

if (!empty($preface)) {
  print $preface;
}
?>
<div class="opening-hours-week placeholder pane-menu-menu-quick-links" data-nid="<?php print $node->nid; ?>">
  <div class="opening_hours_header">
    <a class="prev" href="#prev">&lsaquo;</a>
     <!-- <?php print t('Week'); ?>
     <span class="week_num"></span> -->
    <span class="from_date"></span> –
    <span class="to_date"></span>
    <a class="next" href="#next">&rsaquo;</a>
  </div>
  <div class="days"></div>
    <?php if ($node->nid == '1304') {?>
        <div class="hours-link"><a href="locations">Hours for other libraries</a></div>
    <?php } ?>
</div>

