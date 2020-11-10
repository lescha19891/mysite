<?php
/**
     *
     * Template Name: Home
     *
     */
    

?>
<?php get_header();?>
<main class="app__main main">
    <div class="container">
        <div class="products-row">
        <?php 
        $query = new WP_Query( [ 'post_type' => 'product' ] );
        while ( $query->have_posts() ) : $query-> the_post();
            $price = get_post_meta(get_the_ID(), "product_money", true); 
            $foto = get_post_meta( get_the_ID(), 'product_foto', 1 );
            $name= get_the_title() ;
        ?>
                <div class="product-cell">
                    <div class="product">
                        <img src="<?=$foto;?>" alt="<?=$name;?>" class="product__logo">
                        <h2 class="product__title"><?=$name;?></h2>
                        <div class="product__price"><?=$price;?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</main>   
</main>   
                    
<?php get_footer();?>     