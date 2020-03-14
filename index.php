<?php get_header(); ?>

        

    <div class="index__content">
        <div class="index__content__txt">
            <img src="<?php bloginfo('template_url');?>/img/bg-main.jpg" alt="">
            <h2>Venha trabalhar com a gente</h2>
            <p>Preencha os campos abaixo e deixe seu currículo, quando houverem vagas abertas avisaremos você por e-mail</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="9" title="Currículos"]'); ?>
        <h3>Fique atento a seu e-mail e confira se seu telefone está atualizado, são estes os meios de comunicação que usaremos para falar com você.</h3>
    </div>

<?php get_footer(); ?>