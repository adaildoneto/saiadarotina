<div class="col s12 m4 l4 grid-item grid-width">
      <div class="card painel-noticias">

        <?php
        $imgID = get_option ('odin_general');
        $imgMENU = wp_get_attachment_image_src( $imgID['imagemmenu'], 'slider-noticias');
                   ?>
          <div class="background">
            <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php echo $imgMENU[0]?>');">

            </div>
          </div>


        <div class="nocentro">
          <div id="weather2" style="width: 360px;"></div>
        </div>




      </div>
</div>
