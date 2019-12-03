@extends('layouts.app')

@section('content')

<div class="container">

<div class="text-center">
    <img src="{{ asset('images/logo.png') }}" alt="LSi 25th Anniversary Logo" class="mt-4 mb-4">

    <h1>25th Anniversary Gala Dinner Photo Gallery</h1>
    <p>Click photo for larger viewing.</p>
</div>

    <div class="row">
    @foreach($photos as $i=>$photo)
        @if($i % 4 === 0)
        <div class="row mb-4">
        @endif
            <div class="col-sm-3 text-center box">
                <a href="{{ $photo->getUrl() }}"><img src="{{ $photo->getUrl('thumb') }}" class="img-thumbnail"></a>
            </div>
        @if($i % 4 === 3)
        </div>
        @endif
    @endforeach
    </div>
    <div class="text-center">
        {{ $photos->links() }}
    </div>
    
</div>

@endsection