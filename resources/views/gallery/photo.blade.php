@extends('layouts.app')

@section('content')

<div class="container">

<h2 class="pt-3 pb-3 text-center text-md-left">Photo's from LSi's 25th Anniversary Dinner</h2>
<p class="text-center text-md-left">Click photo for larger viewing.</p>
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