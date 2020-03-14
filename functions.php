<?php

    /* altera o logo do painel de login do Wordpress */
    function my_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                content: url(<?php echo bloginfo('template_url'); ?>/img/logo-colorida.png);
                background-image: none;
                width:320px;
                height:177px;
                background-size: 320px 65px;
                background-repeat: no-repeat;
                padding-bottom: 30px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );


    
    
    /* redirecionar o administrador para a tela de currículos */

    function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                // redirect them to the default place
                return home_url('cadastros');
            } else {
                return $redirect_to;
            }
        } else {
            return $redirect_to;
        }
    }
     
    add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );


?>