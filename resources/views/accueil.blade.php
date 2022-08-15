<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Domus Aurea</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
        @vite(['resources/css/app.css', 'resources/sass/app.scss'])
    </head>
    <body>
        <header>
            <nav id="headnav">
                <ul id="navbrand">
                    <li>
                        <a href="#" id="logo">
                            <img src="{!! URL::asset('images/domuswhite-2.svg') !!}" alt="" height="40">
                        </a>
                    </li>
                </ul>
                <ul id="menu">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Livre d'or</a>
                    </li>
                    <li>
                        <a href="#">Photos</a>
                    </li>
                    <li>
                        <a href="#">Réservation</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <ul id="hamb_btn">
                    <li>
                        <i id="hamburger" class="fa-solid fa-bars"></i>
                    </li>
                </ul>
            </nav>
            <div id="responsive_menu">
                <ul id="res_menu">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Livre d'or</a>
                    </li>
                    <li>
                        <a href="test.html">Photos</a>
                    </li>
                    <li>
                        <a href="#">Réservation</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div id="titres">
                <h1>Domus Aurea</h1>
                <h2>Réservez vos vacances dans la maison dorée</h2>
            </div>
            <div id="div_link_reservation">
                <a href="#" id="link_reservation">Je réserve dès maintenant</a>
            </div>
            <div id="infos">
                <p id="coord">............</p>
                <p id="temp">..........</p>
                <p id="temps">...........</p>
            </div>
        </header>
        <main>
            <section id="infos_maison">
                <section class="bloc_info">
                    <section id="bloc_info_1_text">
                        <h3>Bienvenue dans votre maison dorée !</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae voluptas itaque consectetur 
                            provident corrupti expedita sit maxime soluta! Voluptate quia vitae totam ducimus, numquam 
                            dolor saepe molestias accusamus facere quae ipsum, eaque rem. Magni corrupti sapiente consectetur 
                            praesentium ab quaerat quas modi nemo, similique non cumque impedit excepturi accusamus
                             exercitationem laborum provident tenetur. Sapiente sunt suscipit nihil voluptas iusto 
                             facilis? Tempore dicta inventore corrupti numquam nemo dolore consequuntur veritatis!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae voluptas itaque consectetur 
                            provident corrupti expedita sit maxime soluta! Voluptate quia vitae totam ducimus, numquam 
                            dolor saepe molestias accusamus facere quae ipsum, eaque rem. Magni corrupti sapiente consectetur 
                            praesentium ab quaerat quas modi nemo, similique non cumque impedit excepturi accusamus
                             exercitationem laborum provident tenetur. Sapiente sunt suscipit nihil voluptas iusto 
                             facilis? Tempore dicta inventore corrupti numquam nemo dolore consequuntur veritatis!
                        </p>
                    </section>
                    <div class="bloc_info_img">
                        <img src="images/house.png" alt="">
                    </div>
                </section>
                <div id="separator">
                    <img src="images/sep.png" alt="test">
                </div>
                <section class="bloc_info" id="bloc_info_2">
                    <div class="bloc_info_img">
                        <img src="images/house.png" alt="">
                    </div>
                    <section id="bloc_info_2_text">
                        <h3>Bienvenue dans votre maison dorée !</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae voluptas itaque consectetur 
                            provident corrupti expedita sit maxime soluta! Voluptate quia vitae totam ducimus, numquam 
                            dolor saepe molestias accusamus facere quae ipsum, eaque rem. Magni corrupti sapiente consectetur 
                            praesentium ab quaerat quas modi nemo, similique non cumque impedit excepturi accusamus
                             exercitationem laborum provident tenetur. Sapiente sunt suscipit nihil voluptas iusto 
                             facilis? Tempore dicta inventore corrupti numquam nemo dolore consequuntur veritatis!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae voluptas itaque consectetur 
                            provident corrupti expedita sit maxime soluta! Voluptate quia vitae totam ducimus, numquam 
                            dolor saepe molestias accusamus facere quae ipsum, eaque rem. Magni corrupti sapiente consectetur 
                            praesentium ab quaerat quas modi nemo, similique non cumque impedit excepturi accusamus
                             exercitationem laborum provident tenetur. Sapiente sunt suscipit nihil voluptas iusto 
                             facilis? Tempore dicta inventore corrupti numquam nemo dolore consequuntur veritatis!
                        </p>
                    </section>
                </section>
            </section>
            <section id="reservations">
                <section id="reservation_card">
                    <h3>Faites votre réservation maintenant</h3>
                    <form action="#" method="post" id="reservation_form">
                        <section id="nomprenom">
                            <div class="form-group w-40">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group w-40">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom">
                            </div>
                        </section>
                        <section id="dates">
                            <div class="form-group">
                                <label for="date_arrivee">Date d'arrivée</label>
                                <input type="date" name="date_arrivee" id="date_arrivee">
                            </div>
                            <div class="form-group">
                                <label for="date_retour">Date de retour</label>
                                <input type="date" name="date_retour" id="date_retour">
                            </div>
                        </section>
                        <section id="valid_form">
                            <input type="submit" value="Poursuivre la réservation">
                        </section>
                    </form>
                </section>
            </section>
            <section id="livreor">
                <h3>Ils ont passés des vacances dans la maison dorée !</h3>
                <section id="livreorcontent">
                    <span class="before"><i class="fa-solid fa-chevron-left"></i></span>
                    <div id="photonote">
                        <div class="photo">
                            <img src="images/person.jpeg" alt="">
                        </div>
                        <section id="note_avis">
                            <p id="note">5/5</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem tempore voluptatibus 
                                molestias in minus praesentium voluptates natus, rem, magni, harum iste. Nisi dolor, eum deserunt modi ipsam assumenda incidunt ab!</p>
                        </section>
                    </div>
                    <span class="after"><i class="fa-solid fa-chevron-right"></i></span>
                </section>
            </section>
            <section id="nousretrouver">
                <h3>Retrouvez-nous en Vendée !</h3>
                <section id="map">
    
                </section>
                <div id="contact">
                    <a href="">Contactez nous !</a>
                </div>
            </section>
        </main>
        <footer>
            <div id="imgfooter">
                <img src="images/domuswhite-2.svg" alt="" height="75">
            </div>
            <nav id="footer_menu">
                <ul>
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Livre d'or</a>
                    </li>
                    <li>
                        <a href="#">Photos</a>
                    </li>
                    <li>
                        <a href="#">Réservation</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <div id="qrcode">
                <img src="images/frame.png" alt="">
            </div>
            <nav id="cookies">
                <ul>
                    <li>
                        <a href="#">Cookies</a>
                    </li>
                    <li>
                        <a href="#">Vos données</a>
                    </li>
                    <li>
                        <a href="#">Politique de paiement</a>
                    </li>
                </ul>
            </nav>
        </footer>
    
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="app.js"></script>
    </body>
</html>
