@extends('layouts.main',[
    'footer_text_1' => $footer_text,
    'show_footer => isset($footer) ? $footer : true,
    ])

@section('content')
    <h1>this is homepage</h1>
@endsection


