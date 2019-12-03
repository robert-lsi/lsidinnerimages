@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-1 text-center text-md-left">Welcome</h1>

    <p class="text-center text-md-left">Thank you again for attending our 25th Anniversary Gala Dinner, it was a fantastic evening and wouldn't have been the same without you all being there.</p>
    <p class="text-center text-md-left">In order to remember the night this website allows you to upload your own photos onto our online gallery so they can be shared with all the other attendees. To do this please use this page to upload your photos</p>
    <p class="text-center text-md-left">You can also view and save all the professional photos from the evening and those which others have uploaded by clicking the "View Photos" tab on the navigation bar.</p>

    {!! Form::open(['action' => 'GalleryController@store', 'files' => true, 'class' => 'dropzone']) !!}
        <div class="fallback">
            {!! Form::file('file') !!}
        </div>
    {!! Form::close() !!}
</div>

@endsection