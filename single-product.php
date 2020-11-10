<?php get_header();?>
<main class="app__main main">   
    <div class="container">
        <div class="productsucts-row">
            <div class="productsuct-cell">
                <div class="productsuct">
                    <?php 
                        while ( have_posts() ) :
                            the_post();
                            $price = get_post_meta(get_the_ID(), "product_money", true); 
    	                    $foto = get_post_meta( get_the_ID(), 'product_foto', 1 );
                            $name= get_the_title() ;
                            
                            ?>
                            <img src="<?=$foto;?>" alt="<?=$name;?>" class="productsuct__logo">
                            <h2 class="productsuct__title"><?=$name;?></h2>
                            <div class="productsuct__price"><?=$price;?></div>
                    <?php endwhile;  ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>  