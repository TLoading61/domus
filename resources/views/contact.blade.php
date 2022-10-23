@include('layout.layout')

@section('content')
    <header id="second_header">
        @include('layout.secondnav')

        <div id="titres">
            <h1>Contact</h1>
        </div>
    </header>
    <main id="contactmain">
        <div id="contact_fond"></div>
        <div id="form">
            <form action="#">
                <div id="imgform"></div>
                <div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" placeholder="Votre nom...">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" placeholder="Votre prénom...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="" id="" placeholder="Votre email...">
                </div>
                <div class="form-group">
                    <label for="objet">Objet de votre message</label>
                    <input type="text" name="" id="" placeholder="L'objet de votre message...">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Votre message..."></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer un message">
                </div>
            </form>
        </div>
    </main>
    @include('layout.footer')

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/app.js', 'resources/js/menu.js'])
@show