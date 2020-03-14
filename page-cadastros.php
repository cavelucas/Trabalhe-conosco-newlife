<?php /* template name: cadastros */ ?>

<?php get_header(); ?>

    <div class="cadastros">
        <h2>Últimos cadastros recebidos</h2>

        <?php echo do_shortcode('[acf7db form_id="9" hide="9.submit_ip, 9.submit_time, 9.your-email"]'); ?>
        <!--
        <div class="cadastros__item">
            <ul class="dados">
                <li>José Carlos</li>
                <li>vendedor</li>
                <li>sem currículo</li>
            </ul>
            <ul class="hidden">
                <li>jc@gmail.com</li>
                <li>55 9920 9264</li>
                <li>São Gabriel</li>
            </ul>
        </div>
        -->
    </div>

<?php get_footer(); ?>