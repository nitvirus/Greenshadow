<?php
/**
 * @file
 * Theme implementation to display a node.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky): ?>
<?php print ' sticky'; ?>
 <?php endif; ?>
<?php if (!$status):?>
 <?php print ' node-unpublished'; ?>
 <?php endif; ?>

<?php print $picture ?>

<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="meta">
  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>
  </div>

  <div class="content">
    <?php print $content ?>
  </div>

  <?php print $links; ?>
</div>
