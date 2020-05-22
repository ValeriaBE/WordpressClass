<?php 
$image = get_sub_field('hero_image');
if( !empty( $image ) ): ?>
<?php endif; ?>
<section class="texto" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
    <div class="overlay" style="background-color:<?php the_sub_field('overlay')?>"></div> 
    <div class="texto__content container">
        <?php the_sub_field("texto")?>
        <a href="<?php the_sub_field("link_del_boton")?>"><?php the_sub_field("texto_del_boton")?></a>
    </div>
</section>
