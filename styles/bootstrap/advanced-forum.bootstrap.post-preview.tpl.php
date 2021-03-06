<?php

/**
 * @file
 * Theme implementation: Template the preview version of a post.
 *
 * All variables available in node.tpl.php and comment.tpl.php for your theme
 * are available here. In addition, Advanced Forum makes available the following
 * variables:
 *
 * - $top_post: TRUE if we are formatting the main post (ie, not a comment)
 * - $reply_link: Text link / button to reply to topic.
 * - $total_posts: Number of posts in topic (not counting first post).
 * - $new_posts: Number of new posts in topic, and link to first new.
 * - $links_array: Unformatted array of links.
 * - $account: User object of the post author.
 * - $name: User name of post author.
 * - $author_pane: Entire contents of advanced_forum-author-pane.tpl.php.
 */
?>

<?php if ($top_post): ?>
  <a id="forum-topic-top"></a>
<?php else: ?>
  <a id="forum-reply-preview"></a>
<?php endif; ?>

<div id="<?php print $post_id; ?>" class="<?php print $classes; ?> panel panel-default" <?php print $attributes; ?>>
  <div class="panel-heading">
    <span class="text-muted"><?php print $date ?></span>
      <?php if (!$top_post): ?>
        <?php if (!empty($first_new)): ?>
          <?php print $first_new; ?>
        <?php endif; ?>
        <?php if  (!empty($new_output)): ?>
          <?php print $new_output; ?>
        <?php endif; ?>
      <?php endif; ?>

    <?php if (!$top_post && !empty($comment_link) && !empty($page_link)): ?>
      <span class="forum-post-number"><?php print $comment_link . ' ' . $page_link; ?></span>
    <?php endif; ?>
  </div>

  <div class="panel-body">

    <div class="col-md-2">
      <?php print $author_pane; ?>
    </div>

    <div class="col-md-10">
      <?php
        // @codingStandardsIgnoreStart
        // We hide the comments and links now so that we can render them later.
        hide($content['taxonomy_forums']);
        hide($content['comments']);
        if (!$top_post)
          hide($content['body']);
        hide($content['links']);
        print render($content);
        // @codingStandardsIgnoreEnd
      ?>
      <?php if (!empty($signature)): ?>
        <div class="author-signature">
          <?php print $signature ?>
        </div>
      <?php endif; ?>
    </div>
    
  </div>
</div>
