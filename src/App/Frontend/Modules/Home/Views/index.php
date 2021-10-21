<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Alexandre Manteaux</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-bold mb-0">Développeur Web, toujours partant pour de nouveaux projets!</p>

    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center py-5">
                <h2>Les 3 dernières news publiées</h2>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto my-4">
                    <?php
                    foreach ($lastNews as $news) {
                    ?>

                        <h3><a href="news-<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></h3>
                        <p style="text-align: left;" class="intro-news">Par <em><?= $news['author'] ?></em>, Modifiée le <?= $news['dateUpdate']->format('d/m/Y à H\hi') ?></p>

                        <p class="lead"><?= htmlspecialchars($news['lead']) ?></p>

                        <p class="news-content"><?= nl2br(htmlspecialchars($news['content'])) ?> <a href="news-<?= $news['id'] ?>">lire la suite</a></p>
                        <hr class="my-5" />
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
</section>

<section style="background-color: #2c3e50; color: white; width: auto; padding-top: 75px; padding-bottom: 75px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Mes compétences:</h2>
            </div>
        </div>
        <br />
        <div class="row text-center my-4">
            <div class="col-lg-6 col-sm-12">
                <h4>Programmation</h4>
                <ul style="list-style-type:none;  padding-left: 0;">
                    <li>HTML/CSS</li>
                    <li>PHP</li>
                    <li>SQL/MySQL</li>
                    <li>Symfony</li>
                    <li>API Rest</li>
                    <li>Test Unitaires</li>
                    <li>Bootstrap</li>
                    <li>Javascript</li>
                    <li>Jquery</li>
                    <li>WordPress</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h4>Divers</h4>
                <ul style="list-style-type:none; padding-left: 0;">
                    <li>Git/Github</li>
                    <li>Méthodologie agile / séquentielle</li>
                    <li>Conception cahier des charges</li>
                    <li>Diagrammes UML</li>
                    <li>Wireframing / Balsamiq</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h4 class="col-lg-12 text-center"><a href="../files/alexandre_manteaux_cv.pdf">Télécharger mon CV</a></h4>
        </div>
    </div>
</section>

<section class="page-section portfolio bg-light" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/todolist.jpg" alt="Capture d'écran github du projet todolist" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/bilemo.jpg" alt="Capture d'écran de la documentation api Bilemo" />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/snowtricks.jpg" alt="Capture d'écran du site Symfony Snowtricks" />
                </div>
            </div>
            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/blog.jpg" alt="Capture d'écran du blog" />
                </div>
            </div>
            <!-- Portfolio Item 5-->
            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/Expressfood.jpg" alt="Capture d'écran d'un diagramme de séquence d'ExpressFood" />
                </div>
            </div>
            <!-- Portfolio Item 6-->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/festival.jpg" alt="Capture d'écran de la maquette du festival du film" />
                </div>
            </div>
            <!-- Portfolio Item 7-->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="/img/portfolio/chalets.jpg" alt="Capture d'écran du site WordPress Chalets et Caviar" />
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="text-center text-uppercase titre-pages" style="font-size: 2.5em">Me Contacter</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <?php
        if ($visitor->hasFlash()) {
        ?>
            <div class="row">
                <div class="col-lg-6 mx-auto my-4">
                    <p class="flash text-center"> <?= $visitor->getFlash(); ?> </p>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="intro">Vous souhaitez me contacter? Remplissez le formulaire ci-dessous et je vous répondrai dans les meilleurs délais.</p>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-10 mx-auto">

                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Prénom</label>
                            <input type="text" pattern=".{2,}" title="le prénom doit faire au moins 2 caractères" name="name" class="form-control" placeholder="Prénom" id="name" required data-validation-required-message="Veuillez entrer votre nom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nom</label>
                            <input type="text" pattern=".{2,}" title="le nom doit faire au moins 2 caractères" name="lastName" class="form-control" placeholder="Nom" id="lastName" required data-validation-required-message="Veuillez entrer votre prénom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Adresse email</label>
                            <input type="email" name="email" class="form-control" placeholder="Adresse email" id="email" required data-validation-required-message="Veuillez entrer votre email.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Veuillez entrer un message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="consent" id="consent" required>
                            <label class="form-check-label" for="consent">J'autorise ce site à conserver mes données personnelles transmises via ce formulaire. Aucune exploitation commerciale ne sera faite des données conservées.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey=<?= $secret ?>></div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-6">
                            <button type="submit" class="btn btn-primary btn-lg" id="sendMessageButton">Envoyer</button>
                        </div>
                        <div class="form-group col-6 ">
                            <button type="reset" class="btn btn-primary btn-lg" id="sendMessageButton">Réinitialiser</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Projet ToDoList</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="/assets/img/portfolio/todolist.jpg" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">L'application originellement sous Symfony 3 a été mise à jour vers Symfony 4. Les tests unitaires et fonctionnels ont été implémentés via PHPUnit. Après audits de qualités et de performances (utilisation de Blackfire), des correctifs et des optimisations ont été intégrés.</p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Projet Bilemo</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Conception d'une API Rest et de sa documentation sous Symfony 4.4 respectant les 3 niveaux de maturité du modèle de Richardson et permettant aux applications tierces d'obtenir des informations au format JSON. Les résultats sont paginés et peuvent être filtrés. Une documentation en ligne accompagne l'API.
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Projet Snowtricks</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Conception et développement d’un site communautaire de snowboard sous Symfony 5. Outre la consultation des figures, le site permet aux utilisateurs enregistrés d’ajouter des figures et les médias associés, notamment des images et des vidéos. Ajax a été utilisé pour ajouter du dynamisme dans la présentation et dans l'édition des figures.
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Projet Blog</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Conception et développement d’un blog en PHP natif. Utilisation de la POO, mise place de l’architecture MVC et utilisation de Bootstrap pour le frontend. La partie publique du site permet de consulter les articles tandis qu' une interface backend permet aux administrateurs de gérer les comptes utilisateurs ainsi que les articles.
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Projet ExpressFood</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Conception technique d'une application de restauration en ligne. Représentée à l’aide de diagrammes UML, la modélisation permet de voir les différentes entités, leurs interactions et la représentation schématique de la base de données.</p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Projet Festival du film de plein air</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Création d'un cahier des charges (spécifications fonctionnelles), conception des wireframes et d'une
                                maquette en HTML pour un projet de festival de cinéma.</p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 7-->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Projet Chalets et caviar</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">Conception et réalisation d’un site WordPress pour une agence immobilière et rédaction de sa documentation technique. Mise en place d’un backend pour la gestion des annonces par les administrateurs. Rédaction de la documentation d’utilisation pour le client.
                            </p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>