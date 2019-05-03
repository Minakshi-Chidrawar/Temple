@extends('master.layout')

@section('content')
    <h1>Contact Us</h1>
    <div class="bs-callout">
        <div class="row">
            <div class="col-md-3">
                <p>
                    <strong>Temple Address:</strong><br>
                    Adhya Shakti Mataji Temple<br>
                    55, High Street, Cowley, Uxbridge<br>
                    Middlesex UB8 2DZ
                </p>
                <p>
                    <strong>Registered Charity Address:</strong><br>
                    Navratri Garba (Registered Charity No 1089024)<br>
                    123, Estcourt Road, Fulham,<br>
                    London SW6 7HB
                </p>
                <p>
                    <strong>Contact Numbers:</strong><br>
                    Mobile : 078 8225 3540
                </p>  
            </div>        
            <div class="col-md-8">
                <iframe  width="750" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                    src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Uxbridge,+UB8+2DZ,+UK&amp;aq=0&amp;sll=51.52986,-0.482398&amp;sspn=0.007102,0.017574&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=UB8+2DZ,+United+Kingdom&amp;t=m&amp;ll=51.529839,-0.482368&amp;spn=0.018689,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed">
                </iframe><br>
                <small>
                    <a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Uxbridge,+UB8+2DZ,+UK&amp;aq=0&amp;sll=51.52986,-0.482398&amp;sspn=0.007102,0.017574&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=UB8+2DZ,+United+Kingdom&amp;t=m&amp;ll=51.529839,-0.482368&amp;spn=0.018689,0.051498&amp;z=14&amp;iwloc=A" style="color:#7b0d0d;text-align:left">View Larger Map</a>
                </small>
            </div>
        </div>
    </div>
    <div class="bs-callout">
        <form method="post" action="{{ route('contact.store') }}">
        {{ csrf_field() }}
        
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div class="form-group">
                    <label class="form-control-label" for="name">Name:</label> 
                    <input name="name" type="text" class="form-control" placeholder="Name"/>
                    @if ($errors->has('name'))
                        <small class="inavlid-feedback">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone:</label>
                    <input name="phone" type="text" class="form-control" placeholder="Phone"/>
                    @if ($errors->has('phone'))
                        <small class="inavlid-feedback">{{ $errors->first('phone') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input name="email" type="text" class="form-control" placeholder="Email"/>
                    @if ($errors->has('email'))
                        <small class="inavlid-feedback">{{ $errors->first('email') }}</small>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="comments">Message:</label>
                    <textarea name="message" cols="" rows="8" class="form-control" placeholder="Message"></textarea>
                    @if ($errors->has('message'))
                        <small class="inavlid-feedback">{{ $errors->first('message') }}</small>
                    @endif
                </div>
            </div>
        </div>
            <div class="clearfix">
                <div class="col-md-12 text-center">
                    <input type="submit" value="Send Message" class="btn-5"/>
                </div>
            </div>
        </form>
    </div>
@endsection