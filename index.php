<?php get_header();?>
<main class="app__main main">
    <div class="container">
        <div class="products-row">
        <?php while ( have_posts() ) : the_post();?>
                <div class="product-cell">
                    <div class="product">
                        <img src="<?=$pruduct['foto'];?>" alt="<?=$pruduct['name'];?>" class="product__logo">
                        <h2 class="product__title"><?=$pruduct['name'];?></h2>
                        <div class="product__price"><?=$pruduct['money'];?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</main>   
                    
<?php get_footer();?>     