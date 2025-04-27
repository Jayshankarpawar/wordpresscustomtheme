<?php get_header(); ?>





<section class="section">
    <div class="container">
        <div class="row">
<?php
             if(have_posts()){
             	while(have_posts()){

             		the_post();
             	?>

                <!-- Start Blog item #1-->
                <div class="col-md-8">
                    <div class="blog-post">
                        <div class="post-media">
                            
                                <?php the_post_thumbnail('single-img'); ?>
                            
                        </div>

                       <div class="post-meta">
                       	<ul class="list-inline">
                       		<li><?php the_date();?></li>/
                       		<li><?php echo get_comments_number();?></li>



                       	</ul>




                       </div>

                        <div class="post-desc">
                            <h4><?php the_title(); ?></h4>
                            
                            <p><?php the_content(); ?></p>
                           
                        </div>
                    </div>
                </div>


                <?php } }?>


                <?php get_sidebar();?>

          

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>




<?php get_footer();?>