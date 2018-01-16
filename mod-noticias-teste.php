<div class="row testesidebar">
  <div id="grid-post" class="container">

<!-- Noticias 1 // Inicio do Loop -->



<?php $args = array(
    'showposts' => 12,

);
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

    $query->the_post();

   if  ( has_tag( 'destaque1' ) ) {  // Destaque Retangular


      get_template_part( 'destaque', 'grande' );

  }


  else if (  has_tag( 'destaque2' ) ) {  // Destaque GRande


       get_template_part( 'destaque', 'quadrado' );

     }

  else if (  has_tag( 'destaque4' ) ) {  // destaque foto

           get_template_part( 'destaque', 'colorido' );


 } else {

    get_template_part( 'normal', '' );
  }

  if ( is_dynamic_sidebar('publicidadelateral') ) {
    if ( $query->current_post == 6 ) {  // first post

        dynamic_sidebar('publicidadelateral');
                }
    }

  wp_reset_postdata();

}
?>



<!-- BoTão de mais notícias -->


</div>
<div class="col s12">
<a href="http://www.agencia.ac.gov.br/categoria/noticias/" class="btn orange btn-mais">Mais notícias</a>
</div>

</div>
