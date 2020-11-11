@extends('layouts.main',[
    'footer_text_1' => $footer_text,
    'show_footer => isset($footer) ? $footer : false,
    ])

@section('content')
    <h1>{{ $text }}</h1>
@endsection


