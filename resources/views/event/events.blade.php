@extends('master.layout')

@section('content')
    <div class="container mt-4">
        <h1>News & Events</h1>
        <div class="row">
            <button class="btn btn-dark"> <a href="{{ route('event.store') }}">
                Add Event</a>
            </button>
        </div>

        <div class="card mt-5">
            <div class="card-header">Create Event</div>
            <div class="card-body">
                <form id="form" action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Event:</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Event Description:</label>
                        <textarea name="description" class="form-control summernote"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="startTime">Event Start Time:</label>
                            <input type="time" name="startTime" class="form-control"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="endTime">Event EndT ime:</label>
                            <input type="time" name="endTime" class="form-control"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="startDate">Event Start Date:</label>
                            <input type="date" name="startDate" class="form-control"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="endDate">Event End Date:</label>
                            <input type="date" name="endDate" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sponser">Sponsor:</label>
                        <input type="text" name="sponser" class="form-control"/>
                    </div>

                    <div class="form-row">
                        <button class="btn btn-success mt-4" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

<script type="text/javascript">
   $(document).ready(function() {
        $('#content').summernote({
            height: 500,
        });
    }); 
</script>