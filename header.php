<hmtl>
<head>
    <title>Meu tema</title>

    <?php wp_head(); ?>
</head>
<body>

<div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-8">
            <a class="blog-header-logo text-dark" href="#">LOGO</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Cadastrar-se</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="<?php echo home_url("/blog/"); ?>">Blog</a>
            <a class="p-2 text-muted" href="<?php echo home_url(); ?>">Página Inicial</a>
        </nav>
      </div>
</div>

      




       
        