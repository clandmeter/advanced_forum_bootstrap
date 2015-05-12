<?php
/**
 * @file
 * Theme implementation to display information about the post/profile author.
 *
 * See author-pane.tpl.php in Author Pane module for a full list of variables.
 */
?>

<?php
  // This bit of debugging info will show the full path to and name of this
  // template file to make it easier to figure out which template is
  // controlling which author pane.
  if (!empty($show_template_location)) {
    print __FILE__;
  }
?>

<div class="panel panel-default">
    <div class="panel-heading text-center">
        <?php print $account_name; ?>
    </div>
    <ul class="list-group small">
        <?php /* User picture / avatar (has div in variable) */ ?>
        <?php if (!empty($picture)): ?>
        <li class="list-group-item">
            <!-- need to add to user picture class class="center-block img-circle" -->
            <div class="text-center">
                <?php print $picture; ?>
            </div>
        </li>
        <?php endif; ?>
        <?php if (!empty($online_status)): ?>
        <li class="list-group-item">
            <?php print $online_status; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($last_active)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('Last seen'); ?>:</span> <?php print t('!time ago', array('!time' => $last_active)); ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($user_title)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('Title'); ?>:</span> <?php print $user_title; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($user_badges)): ?>
        <li class="list-group-item">
            <?php print $user_badges; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($joined)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('Joined'); ?>:</span> <?php print $joined; ?>
        </li>
        <?php endif; ?>
        <?php if (isset($user_stats_posts)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('Posts'); ?>:</span> <?php print $user_stats_posts; ?>
        </li>
        <?php endif; ?>
        <?php if (isset($userpoints_points)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('!Points', userpoints_translation()); ?></span>: <?php print $userpoints_points; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($contact)): ?>
        <li class="list-group-item">
            <?php print $contact; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($privatemsg)): ?>
        <li class="list-group-item">
            <?php print $privatemsg; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($user_relationships)): ?>
        <li class="list-group-item">
            <?php print $user_relationships; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($flag_friend)): ?>
        <li class="list-group-item">
            <?php print $flag_friend; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($user_stats_ip)): ?>
        <li class="list-group-item">
            <span class="author-pane-label"><?php print t('IP'); ?>:</span> <?php print $user_stats_ip; ?>
        </li>
        <?php endif; ?>
        <?php if (!empty($fasttoggle_block_author)): ?>
        <li class="list-group-item">
            <?php print $fasttoggle_block_author; ?>
        </li>
        <?php endif; ?>
    </ul>
</div>
