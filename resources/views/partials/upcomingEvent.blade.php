<div class="container">
  <div class="row"> 
    <div class="col-6 mt-5">
        @if(!(empty($event)))
        <ul class="list-unstyled">
          <li>
            <strong class="font-color">Event Name</strong>: {{ $event->title }}<br>
            <strong class="font-color">About Event</strong>:<br> {!! $event->description !!}<br>
            <strong class="font-color">Event is on</strong>: {{ Carbon\Carbon::parse($event->startDate)->isoFormat('MMM Do, YYYY') }}
          </li>
          <li>&nbsp;</li>
          <li class="font-color">You can also find events for {{ date('Y') }} at the temple: <a href="{{ route('calendar') }}">Click Here</a></li>
        </ul>
        @else
          <p>Coming soon ..</p>
        @endif
    </div>
    <div class="col-6" style="margin-top: 10%;">
      <div class="text-center">
        <h1>Upcoming Event</h1>
      </div>
    </div>
  </div>
</div>