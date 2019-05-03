@extends('master.layout')

@section('content')
<h1>Aarati</h1>
<div class="bs-callout">
    <div class="row">
        <div class="col-md-3">
            @include('partials.verticalNav')
        </div>
        <div class="col-md-8">
            <div class="center-heading text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <!-- Heading -->
                <h2 style="padding-bottom:10px;">Gayatri Mantra </h2>
                <audio controls="controls">
                    <source src="{{ asset('aarti/Gayatri_Mantra.mp3') }}"/>
                    <embed type="application/x-shockwave-flash"
                            flashvars="audioUrl=yourURL.mp3"    
                            src="http://www.google.com/reader/ui/3523697345-audio-player.swf"   
                            width="650" height="0" quality="best">
                </audio>
                <p class="para">
                    <br>Om Bhur Bhuvah Svah Tat Savitur Varenyam |<br>Bhargo Devasya Dhimahi DhiyoYonah Prachodayat ||<br><br>We meditate on the transcendental Glory of the Deity Supreme,<br>who is inside the heart of the earth, inside the life of the sky and inside the soul of Heave. <br>May He stimulate and illuminate our minds.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection