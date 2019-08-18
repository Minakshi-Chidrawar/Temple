@extends('master.layout')

@section('content')
<div class="back-color">
    <div class="container pt-4 pb-4">
        <h1>Aarati</h1>
        <div class="bs-callout">
            <div class="row">
                <div class="col-md-3">
                    @include('partials.verticalNav')
                </div>
                <div class="col-md-8">
                    <div class="center-heading text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <!-- Heading -->
                        <h2 style="padding-bottom:10px;">Ganesha Shlok</h2>
                        <audio controls="controls">
                            <source src="{{ asset('aarti/Vakratunda_Mahakaya.mp3') }}"/>
                            <embed type="application/x-shockwave-flash"
                                    flashvars="audioUrl=yourURL.mp3"    
                                    src="http://www.google.com/reader/ui/3523697345-audio-player.swf"   
                                    width="650" height="0" quality="best">
                        </audio>
                        <p class="para">
                            <br>Vakra-Tunndda Maha Kaaya SuryaKotti Samaprabha |<br>Nirvighnam Kuru Me Deva Sarva-Kaaryessu Sarvadaa ||<br>
                            <br>The Lord with curved trunk and a mighty body, who has the power of a million suns,
                            <br>I pray to you O Lord, to remove the obstacles from all the good action I intend to perform.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection