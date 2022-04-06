@extends('layouts.app')
@section('content')

    <div class="section_show_1" id="sport">
          <div class="w-100">
              @foreach($sports as $sport)
                  @if($sport->id==1)
                      <div  class="sport">
                          <a href=""><h1 class="sport_title">{{$sport->name}}</h1></a>
                      </div>
                  @endif
              @endforeach
          </div>
          <h3 class="h3">Oxirgi xabarlar</h3>
        <div class="sprot_card">

            @foreach($sports as $sport)
                <div class="sport_1">
                    <a href="/sport/{{$sport->id}}"><img class="img" src="{{$sport->photo}}"></a>
                    <a href="/sport/{{$sport->id}}"><p>{{$sport->name}}</p></a>
                    <span class="spam_time">
                     {{$sport->created_at->toDateString()}} | {{ $sport->created_at->format(' H:i')}}</span>
                </div>

            @endforeach

        </div>
        @foreach($sports as $sport)
            <div class="sport_1">
                <a href="/sport/{{$sport->id}}"><p>{{$sport->name}}</p></a>
                <span class="spam_time">
                     {{$sport->created_at->toDateString()}} | {{ $sport->created_at->format(' H:i')}}</span>
            </div>

        @endforeach
    </div>



    @endsection
