@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="LSi 25th Anniversary Logo" class="mt-4 mb-4">

        <h1>25th Anniversary Gala Dinner Photo Site</h1>

        <p>Thank you again for attending our 25th Anniversary Gala Dinner on the 23rd November 2019. It was a fantastic evening and wouldn't have been the same without you all being there.</p>
        <p>In order to remember the night this website allows you to upload your own photos onto our online gallery so they can be shared with all the other attendees. To do this please use this page to upload your photos</p>
        <p>You can also view and save all the professional photos from the evening and those which others have uploaded by clicking the "View Photos" tab on the navigation bar.</p>
    </div>
    <!--
    <h1 class="pt-1 text-center text-md-left">Welcome</h1>

    <p class="text-center text-md-left">Thank you again for attending our 25th Anniversary Gala Dinner on the 23rd November 2019. It was a fantastic evening and wouldn't have been the same without you all being there.</p>
    <p class="text-center text-md-left">In order to remember the night this website allows you to upload your own photos onto our online gallery so they can be shared with all the other attendees. To do this please use this page to upload your photos</p>
    <p class="text-center text-md-left">You can also view and save all the professional photos from the evening and those which others have uploaded by clicking the "View Photos" tab on the navigation bar.</p>
    -->

    {!! Form::open(['action' => 'GalleryController@store', 'files' => true, 'class' => 'dropzone']) !!}
        <div class="fallback">
            {!! Form::file('file') !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-4 text-center box">
            <a href="#"><img src="{{ asset('images/balloons.jpg') }}" class="img-thumbnail"></a>
        </div>
        <div class="col-sm-4 text-center box">
            <a href="#"><img src="{{ asset('images/lloyd.jpg') }}" class="img-thumbnail"></a>
        </div>
        <div class="col-sm-4 text-center box">
            <a href="#"><img src="{{ asset('images/tree.jpg') }}" class="img-thumbnail"></a>
        </div>
    </div>
</div>

@endsection