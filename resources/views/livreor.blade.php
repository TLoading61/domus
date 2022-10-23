@include('layout.layout')

@section('content')
    <header id="second_header">
        @include('layout.secondnav')

        <div id="titres">
            <h1>Livre d'or</h1>
        </div>
    </header>
    <main id="livremain">
        <div class="livre-item">
            <div class="livre-img">
                <img src="images/otter.jpg" alt="">
            </div>
            <div class="livre-famille">
                Nom et prénom
            </div>
            <div class="livre-note">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="livre-unmot">
                Parfait !
            </div>
            <div class="livre-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reprehenderit qui, 
                autem aut impedit nulla consequatur dolorum tempore eaque sequi enim possimus suscipit 
                quae reiciendis cum placeat beatae, cumque quibusdam.
            </div>
        </div>

        <div class="livre-item">
            <div class="livre-img">
                <img src="images/otter.jpg" alt="">
            </div>
            <div class="livre-famille">
                Nom et prénom
            </div>
            <div class="livre-note">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="livre-unmot">
                Parfait !
            </div>
            <div class="livre-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reprehenderit qui, 
                autem aut impedit nulla consequatur dolorum tempore eaque sequi enim possimus suscipit 
                quae reiciendis cum placeat beatae, cumque quibusdam.
            </div>
        </div>

        <div class="livre-item">
            <div class="livre-img">
                <img src="images/otter.jpg" alt="">
            </div>
            <div class="livre-famille">
                Nom et prénom
            </div>
            <div class="livre-note">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="livre-unmot">
                Parfait !
            </div>
            <div class="livre-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio reprehenderit qui, 
                autem aut impedit nulla consequatur dolorum tempore eaque sequi enim possimus suscipit 
                quae reiciendis cum placeat beatae, cumque quibusdam.
            </div>
        </div>
    </main>
    @include('layout.footer')

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/app.js', 'resources/js/menu.js'])
@show