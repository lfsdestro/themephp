<?php get_header() ?>

<main role="main" class="container pt-5">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Blog
            </h3>

            <?php if(have_posts()) { ?>
            <?php while(have_posts()) { ?>
            <?php the_post(); ?>

            <?php get_template_part("shared/content"); ?>

            <?php } ?>
            <?php } else { ?>
            <h2>Ops, nenhum post encontrado</h2>
            <?php } ?>

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Mais antigos</a>
                <a class="btn btn-outline-secondary disabled" href="#">Mais novos</a>
            </nav>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

    </div><!-- /.row -->
</main><!-- /.container -->

<? get_footer() ?>