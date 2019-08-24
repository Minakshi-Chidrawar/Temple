<div class="container">
  <div class="row">
  <div class="col-6  mt-5">
      <ul class="list-unstyled">
        <li>
          <strong class="font-color">Event Name</strong>: {{ $event->title}}<br>
          <strong class="font-color">About Event</strong>:<br> {!! $event->description !!}
        </li>
        <li>&nbsp;</li>
        <li class="font-color">You can also find events for {{ date('Y') }} at the temple: <a href="docs/Calendar 2017.pdf">Click Here</a></li>
      </ul>
  </div>
  <div class="col-6" style="margin-top: 10%;">
    <div class="text-center">
      <h1>Upcoming Event</h1>
    </div>
  </div>
  </div>
</div>