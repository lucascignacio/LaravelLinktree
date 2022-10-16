@extends('admin.template')

@section('title', 'Bio - '.$page->op_title.' - Links')

@section('content')
    
    <div class="preheader">
        Página: {{$page->op_title}}
    </div>

    <div class="area">
        <div class="leftside">

            <header>
                <ul>
                    <li @if ($menu=='links') class="active" @endif><a href="{{url('/admin/'.$page->slug.'/links')}}">Link</a></li>
                </ul>
            </header>

            @yield('body')
        </div>
        <div class="rightside">
            <iframe src="{{url('/'.$page->slug)}}" frameborder="0"></iframe>
        </div>
    </div>

@endsection