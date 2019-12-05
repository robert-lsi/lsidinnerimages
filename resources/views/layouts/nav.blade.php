<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ action('GalleryController@index') }}">LSi Dinner Photos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                @if(session('accesscode'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('GalleryController@index') }}">Add Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('GalleryController@photo', [1]) }}">LSi Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('GalleryController@photo', [2]) }}">Other Photos</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                @if(session('accesscode'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('PageController@logout') }}">Log Out</a>
                    </li>
                @endif
            </ul>
            
        </div>
    </div>
</nav>