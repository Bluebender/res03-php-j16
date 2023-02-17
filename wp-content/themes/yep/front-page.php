<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header>
            <figure>
                <img src="https://cdn-icons-png.flaticon.com/512/36/36514.png?w=740&t=st=1676623289~exp=1676623889~hmac=b273591486ca8d28940fcd42c83f556e9ce50ee6d3dfac4012619f84eac55331" alt="">
            </figure>
            <nav>
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">à propos</a></li>
                    <li><a href="">Mes projets</a></li>
                    <li><a href="">Me contacter</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <h1>YEPFOLIO</h1>
                <h2>Développement Web & Web Mobile</h2>
                <figure>
                    <img src="https://images-ext-1.discordapp.net/external/fS-4AuqYH0J6Fseb1sQVpY3Z6DSk77nM8lSHCEpvhWA/https/www.evinux.org/wp-content/uploads/2021/09/pc-portable-clavier-ecran-lumineux-840x400.jpg" alt="Ordinateur ouvert">
                    <h1></h1>
                </figure>
            </section>
            <section>
                <h2>Yepfolio en quelques mots</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores accusamus amet molestiae numquam, deserunt possimus! Quas ducimus saepe tempora est atque, molestiae odit quidem rerum magni dolore accusantium ea deleniti quo earum fuga officiis voluptatibus alias error! Quam doloribus adipisci est</p>
                <p>uod rerum similique quidem voluptatibus architecto eveniet iusto atque.</p>
            </section>
            <section>
                <h2>Mes derniers projets</h2>
                <article>
                    <h3>Application santé</h3>
                    <h4>Pharmacie de Maurepas</h4>
                </article>
                <article>
                    <h3>Site e-commerce</h3>
                    <h4>Librairie l'écume des jours</h4>
                </article>
                <article>
                    <h3>Site vitrine</h3>
                    <h4>Boulangeire Galetier</h4>
                </article>
                <article>
                    <h3>Site institutionnel</h3>
                    <h4>Mairie de Ploutruc</h4>
                </article>
                <article>
                    <h3>Site promotionnel</h3>
                    <h4>Festival des choses</h4>
                </article>
            </section>
            <section>
                <h2>Me contacter</h2>
                <form action="">
                    <fieldset>
                        <label for="">Prénom + Nom*</label>
                        <input type="text">
                    </fieldset>
                    <fieldset>
                        <label for="">Email*</label>
                        <input type="email">
                    </fieldset>
                    <fieldset>
                        <label for="">Message</label>
                        <input type="text">
                    </fieldset>
                    <input type="button" value="Envoyer">
                </form>
            </section>
        </main>



        <?php wp_footer(); ?>
    </body>
</html>