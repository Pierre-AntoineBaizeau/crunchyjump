<footer>
    <hr>
    <section class="firstsection">

        <div>
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">

            <?php wp_nav_menu(array( 
                                    'theme_location' => 'apropos', 
                                    'container' => 'li', // afin d'éviter d'avoir une div autour 
                                    'menu_class' => 'crunchy_footer_menu', // ma classe personnalisée 
                                ) 
                            );
                    ?> 
                                   
        </div>

        <?php wp_nav_menu(array( 
                                    'theme_location' => 'footer', 
                                    'container' => 'li', // afin d'éviter d'avoir une div autour 
                                    'menu_class' => 'crunchy_footer_menu', // ma classe personnalisée 
                                ) 
                            );
                    ?> 
                     
            <?php wp_nav_menu(array( 
                            'theme_location' => 'equipe', 
                            'container' => 'li', // afin d'éviter d'avoir une div autour 
                            'menu_class' => 'crunchy_footer_menu', // ma classe personnalisée 
                        ) 
                    );
            ?>
    
            <ul class="ullast">
                <li class="montserrat_bold_24_upper">Notre jeu</li>
                <li> <img class="crunchy" src="<?php echo get_template_directory_uri(); ?>/img/crunchy_android.png" alt="Logo"> </li>
            </ul>
       

    </section>
    <section class="secondsection">
        <p>Copyright &copy; 2020 - 2021 - Tout droit réservés - <span>Mentions Légales</span></p>
        <p>Site réalisé dans le cadre d’un projet scolaire - 2021</p>
    </section>
</footer>
<?php wp_footer(); ?>

</body>
</html>