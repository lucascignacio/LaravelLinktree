<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="widht=device-width, initial-scale=1"/>
    <title>{{$title}}</title>

    <style type="text/css">
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        padding: 20px;
        font-family: Helvetica, Arial;
        color: {{ $font_color }};
        background: {{ $bg }}
    }
    .profileImage img{
        width: auto;
        height: 100px;
    }
    .profileTitle {
        font-size: 17px;
        font-weight: bold;
        margin-top: 10px;
    }
    .profileDescription {
        font-size: 15px;
        margin-top: 5px;
    }
    .linkArea {
        width: 50%; 
        margin: 50px 0;
    }
    .banner a {
        color: {{ $font_color }};
    }
    .linkArea a {
        display: block;
        padding: 20px;
        text-align: center;
        text-decoration:none;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .linkArea a.linksquare {
        border-radius: 0px;
    }
    .linkArea a.linkrounded {
        border-radius: 50px;
    }
    </style>
</head>
<body>
    <div class="profileImage">
        <img src="{{ $profile_image }}" />
    </div>

    <div class="profileTitle">{{ $title }}</div>

    <div class="profileDescription"> {{ $description }} </div>

    <div class="linkArea">
        @foreach ($links as $link)
            <a
                href="{{ $link->href }}"
                class="link{{$link->op_border_type}}"
                style="background-color:{{$link->op_bg_color}};color:{{$link->op_text_color}};"
                target="blank"
            >{{  $link->title  }}</a>   
        @endforeach
    </div>

    <div class="banner">
        Feito pela <a href="https://www.linkedin.com/in/lucas-ignacio-0214b5238/"> Ignácio Corp.</a>
    </div>

    @if (!empty($fb_pixel)) 

    @endif
</body>
</html>