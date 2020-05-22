<section class="second">
    <div class="second__section container">
        <?php the_sub_field("texto_seccion")?>
        <div class="second__section__repeater">
            <?php if( have_rows('opciones')){while (have_rows('opciones')){the_row(); ?> 
                <div class="second__section__repeater__content">
                <?php 
                    $image = get_sub_field('image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <p><?php the_sub_field("texto")?></p>
                </div>
            <?php }} ?>
        </div>
    </div>
</section>
