<header>
    <div class="container h-100">
        <div class="row d-flex justify-content-between align-items-center h-100">
            <div class="col-4 d-flex">
                <nav class="menu">
                    <ul>
                        @foreach($menu as $link)
                        <li>{{$link['title']}}</li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-4 img-container">
                <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
            </div>
            <div class="col-4 d-flex justify-content-end">
                <ul>
                    <li>icon</li>
                    <li>icon</li>
                    <li>icon</li>
                </ul>
            </div>
        </div>
    </div>
</header>