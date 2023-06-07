<?php
/**
 * Block Name: Left text, right image
 *
 * This is the template that displays the hero block.
 */

$heading_small = get_field('heading_small');
$heading_main = get_field('heading_main');
$text = get_field('text');

$id = 'left-text-right-image-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section class="left-text-right-image">
  <div class="container">
    <div class="row">
      <div class="col col--60">
        <div class="headings-text headings-text--mobile-center headings-text--desktop-left">
          <?php
            echo $heading_small ? '<h3 class="headings-text__heading-small headings-text__heading-small--mb-small">' . $heading_small . '</h3>' : NULL;
          ?>
          <?php
            echo $heading_main ? '<h2 class="headings-text__heading-main headings-text__heading-main--big">' . $heading_main . '</h2>' : NULL;
          ?>
          <?php
            echo $text ? '<p class="headings-text__paragraph">' . $text . '</p>' : NULL;
          ?>          
        </div>
        <div class="button button--big button--blue button--desktop-left button--mobile-center">
          <a href="" class="button__link">Porozmawiajmy!</a>
        </div>
      </div>
      <div class="col">

      </div>
    </div>
  </div>
</section>

<!-- <blockquote id="<?php echo $id; ?>" class="left-text-right-image <?php echo $align_class; ?>">
    <p><?php the_field('testimonial'); ?></p>
    <cite>
        <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
        <span><?php the_field('author'); ?></span>
    </cite>
</blockquote> -->
<!-- <style type="text/css">
    <?php echo $id; ?> {
        background: <?php the_field('background_color'); ?>;
        color: <?php the_field('text_color'); ?>;
    }
</style> -->