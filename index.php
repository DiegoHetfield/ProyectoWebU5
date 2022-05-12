<?php include("./head_foot/header.php")?>
<script>
  const header = this.document.querySelector("header");
  header.classList.add("fijo");
</script>
  <section class="home">

    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/bg1.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Huella ambiental</h2>
            <p>Estamos deseando mostrarte algunos inventos ecológicos que te sorprenderán. Pero antes,
              no podemos olvidarnos de las razones por las que son tan significativos los productos y
              servicios responsabilizados con el medio ambiente: las actividades del ser humano generan
              una huella ambiental.</p>
            <a href="listado.php" class="read-btn">Leer más<i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="images/bg2.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Un compromiso conjunto </h2>
            <p>Gobiernos, instituciones, autoridades, organismos y la ciudadanía en general deben
              asumir un papel más activo en este sentido. Es necesario desplegar todos los recursos
              que estén a nuestro alcance para frenar desafíos como el cambio climático, la escasez
              de recursos naturales y la contaminación.</p>
            <a href="listado.php" class="read-btn">Leer más<i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="images/bg3.jpg" alt="">
          <div class="text-content">
            <h2 class="title">La tecnologia como aliada</h2>
            <p>Bien empleada, la tecnología puede convertirse en el gran aliado de la conservación
              del medioambiente. De hecho, cada vez son más los y las profesionales de diversos
              campos de la ciencia que se especializan en el diseño de soluciones específicas.</p>
            <a href="listado.php" class="read-btn">Leer más<i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="images/b1.png" alt="">
          <div class="text-content">
            <h2 class="title">Inventos ecológicos de toda la vida</h2>
            <p>El ser humano tiene el poder de preservar o destruir su entorno. Con el paso del
              tiempo hemos ido dejando en un segundo plano innovaciones que, tradicionalmente,
              nos han ayudado a mejorar nuestro día a día y que, también, ayudan al planeta.</p>
            <a href="listado.php" class="read-btn">Leer más<i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img src="images/bg1.jpg" class="swiper-slide" alt="">
        <img src="images/bg2.jpg" class="swiper-slide" alt="">
        <img src="images/bg3.jpg" class="swiper-slide" alt="">
        <img src="images/b1.png" class="swiper-slide" alt="">
      </div>
    </div>
  </section>

<?php include("./head_foot/footer.php")?>