@extends('layouts.app')

@section('content')

{{--  --------------------------------------SECTION -----------------------------}}

    <section class="section" id="section">
          <div class="section_1">
              @foreach($sports as $sport)

                  @if($sport->id==1)
              <div class="section_card_1">
                  <img src="{{$sport->photo}}" alt="">
                 <a href="/sport/{{$sport->id}}"><h1>{{$sport->name}}</h1></a>
              </div>
                  @endif
                  @endforeach

          </div>

          <div class="section_2">
              @foreach($dunyos as $dunyo)
                      <div class="section_card_1">
                          <span>{{$dunyo->created_at->toTimeString()}}</span><a href="/dunyo/{{$dunyo->id}}"><p>{{$dunyo->name}}</p></a>
                      </div>

              @endforeach
          </div>
          <div class="section_3">
dec
         </div>

    </section>
    @endsection
