<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
@isset($html_tag_data)
    @foreach ($html_tag_data as $key=> $value) data-{{$key}}='{{$value}}' @endforeach
@endisset
>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Acorn Admin Template | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    @include('_layout.head')
</head>

<body>
    @yield('content')
@include('_layout.footer')
@include('_layout.modal_settings')
@include('_layout.modal_search')
@include('_layout.scripts')
</body>
</html>
