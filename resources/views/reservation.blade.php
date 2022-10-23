@include('layout.layout')

@section('content')
    <header id="second_header">
        @include('layout.secondnav')

        <div id="titres">
            <h1>Réservez votre séjour !</h1>
            <h2>Envoyez une demande ou téléchargez notre carte de visite !</h2>
        </div>
    </header>
    <main id="reservationmain">
        <div id="reserve">
            <div id="fond"></div>
            <div id="formulaire">
                <div id="form_reserver">
                    <form action="#" method="post" id="reservation_form">
                        <section id="nomprenom">
                            <div class="form-group-reversation w-40">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group-reversation w-40">
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom">
                            </div>
                        </section>
                        <section id="dates">
                            <div class="form-group-reversation w-40">
                                <label for="date_arrivee">Date d'arrivée</label>
                                <input type="date" name="date_arrivee" id="date_arrivee">
                            </div>
                            <div class="form-group-reversation w-40">
                                <label for="date_retour">Date de retour</label>
                                <input type="date" name="date_retour" id="date_retour">
                            </div>
                        </section>
                        <section class="form-group-reversation infoscomplem">
                            <label for="date_retour">Informations complémentaires</label>
                            <textarea name="" id="" cols="30" rows="3"></textarea>
                        </div>
                        <section id="valid_form">
                            <input type="submit" value="Envoyer une demande">
                        </section>
                    </form>
                    <div id="download">
                        <h2>Ou bien</h2>
                        <a href="#">Télécharger notre carte de visite</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layout.footer')

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/app.js', 'resources/js/menu.js'])
@show