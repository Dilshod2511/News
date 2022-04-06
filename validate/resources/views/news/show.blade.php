@extends('layouts.app')
@section('content')


    <section class="section_show" id="section">
           <div class="section_1_show">
             <div class="center_show">
                 <span class="span_show">Uzbekiston</span><span class="spam_time">
                     {{$users->created_at->toDateString()}} | {{ $users->created_at->format(' H:i')}}</span>

                 <div class="section_card_1">
                     <h1 class="show_title">{{$users->name}}</h1>
                     <img class="show_img" src="{{$users->photo}}" alt="">
                         <p class="spam_p">Foto:Yangiliklar.uz</p>
                              <p class="des_show">{{$users->description}}</p>
                 </div>
             </div>

             </div>

            <div class="section_2_show">
                 <h1>Oxirgi yangiliklar</h1>
                @foreach($us as $s)
                <div class="right_show">
                   <a href="/sport/{{$s->id}}"><p>{{$s->name}}</p></a>
                   <span class="spam_time">
                     {{$s->created_at->toDateString()}} | {{ $s->created_at->format(' H:i')}}</span>
                </div>
                    @endforeach
             </div>


    </section>


    @endsection
