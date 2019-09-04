<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <div class="text-center">
            <h1>Timings</h1>
            </div>
        </div>
        <div class="col-6 mt-3">
            @if(!(empty($content)))
            {!! $content->description !!}
            <br>
            @endif
            <ul class="list-unstyled">
                <li class="volunteer">Volunteer needed for Mataji's Temple, please <a href="{{ route('vacancies')}}">click Here</a> for more information.</li>
            </ul>
      </div>
    </div>
</div>