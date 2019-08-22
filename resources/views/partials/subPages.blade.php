<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="subPages">
        <h5 class="font-weight-bold mb-8">Timings</h5>
        <ul class="list-unstyled">
          <li>Open daily 08:00-18:30 PM</li>
          <li>Aarti daily at 12:00 noon and 18:00</li>
          <li class="volunteer">Volunteer needed for Mataji's Temple, please <a href="{{ route('vacancies')}}">click Here</a> for more information.</li>
        </ul>
      </div>
    </div>

    <div class="col-6">
      <div class="subPages">
        <h4 class="font-color">Upcoming Event</h4>
        <ul class="list-unstyled">
          <li><h4></h4></li>
          <li>
            <strong>Event Name</strong>: {{ $event->title}}<br>
            <strong>About Event</strong>: {!! $event->description !!}
          </li>
          <li>You can also find events for {{ date('Y') }} at the temple: <a href="docs/Calendar 2017.pdf">Click Here</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>