@include('layout.layout')

@section('content')
    <header id="second_header">
        @include('layout.secondnav')

        <div id="titres">
            <h1>Quelques photos de la Vendée</h1>
        </div>
    </header>
    <main id="photomain">
        <div id="grid">
            <div class="grid-item" id="photo-1">
                <img src="{!! URL::asset('images/photos/1.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-2">
                <img src="{!! URL::asset('images/photos/2.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-3">
                <img src="{!! URL::asset('images/photos/3.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-4">
                <img src="{!! URL::asset('images/photos/4.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-5">
                <img src="{!! URL::asset('images/photos/5.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-6">
                <img src="{!! URL::asset('images/photos/6.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-7">
                <img src="{!! URL::asset('images/photos/7.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-8">
                <img src="{!! URL::asset('images/photos/8.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-9">
                <img src="{!! URL::asset('images/photos/9.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-10">
                <img src="{!! URL::asset('images/photos/10.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-1">
                <img src="{!! URL::asset('images/photos/1.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-2">
                <img src="{!! URL::asset('images/photos/2.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-3">
                <img src="{!! URL::asset('images/photos/3.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-4">
                <img src="{!! URL::asset('images/photos/4.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-5">
                <img src="{!! URL::asset('images/photos/5.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-6">
                <img src="{!! URL::asset('images/photos/6.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-7">
                <img src="{!! URL::asset('images/photos/7.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-8">
                <img src="{!! URL::asset('images/photos/8.jpg') !!}" alt="" class="grid-img">
            </div>
            <div class="grid-item" id="photo-10">
                <img src="{!! URL::asset('images/photos/10.jpg') !!}" alt="" class="grid-img">
            </div>
        </div>
    </main>
    @include('layout.footer')

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/app.js', 'resources/js/menu.js'])
@show