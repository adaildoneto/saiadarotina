<?php get_header(teste);?>

<div class="container">



      <?php while (have_posts()) : the_post();?>

        <?php
global $short_url;
// Checar se ja existe um URL encurtado armazenado no banco de dados
if(get_post_meta($post->ID, "short_url", true) != ""){
  //Short URL already exists, pull from post meta
  $short_url = get_post_meta($post->ID, "short_url", true);
}
else {
  // Caso não tenha, vamos criar uma
  $full_url = get_permalink();
  $short_url = make_bitly_url($full_url);
  // Salvar no port_meta
  add_post_meta($post->ID, 'short_url', $short_url, true);
}
?>

    <div class="row no-padding">

		<div class="header-post"></div>
        <div class="especiais-img">
          <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/04/banner-nogabinete-2017.png" class="responsive-img">
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col m1 l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        <div class="col s12 m10 l10 no-padding">
            <div id="post" class="card" style="margin-top:-20px;">



	     <div class="card-content flow-text">

		          <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
                </div>
                <div class="card-action info-post">
                    <span class="autor-post">
                      <?php

                          $alias = get_post_meta($post->ID,'author_alias',true);
                      if(empty($alias)){
                        echo  $author = get_the_author_link();
                      }else{
                        echo $author = $alias;
                      }
                      ?>

                    </span></br>
                    <span class="data-post"> <?php the_time('d.m.Y');?> </span>
                    <span class="hora-post"> <?php the_time('G:i');?></span>

                    	 <div class="clearfix"></div>
                </div>
                <div class="card-content">

                    <p><?php the_content(__('Leia mais'));?></p>




  <?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

                </div>
            </div>
        </div>
    </div>

  <?php endwhile;?>
</div>





</div>

<script>
$('div.wp-caption aligncenter').addClass('card');
</script>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->

<div class="container">
  <h3>Mais No Gabinete</h3>
	<?php include(TEMPLATEPATH.'/mod-nogabinete.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->

<?php get_footer(single);?>
