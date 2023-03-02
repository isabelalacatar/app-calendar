@extends('layouts.admin')
@section('content')
    <h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
    <div class="card">
        <div class="card-header">
            {{ trans('global.systemCalendar') }}
        </div>

        <div class="card-body">
            <link rel='stylesheet'
                  href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

            <div id='calendar'></div>


        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
      $(document).ready(function () {
        // page is now ready, initialize the calendar...
        events ={!! json_encode($events) !!};
        $('#calendar').fullCalendar({
          slotDuration: {
      "hours": 1
    },
    minTime: "09:00",
    maxTime: "21:00",
    selectConstraint: "businessHours",
    select: function(info) {
      calendar.addEvent({
        "title": "Demo event",
        start: info.start,
        end: info.end
      });
    },
    businessHours: { // Mon - Fri, 9-21
      daysOfWeek: [1, 2, 3, 4, 5],
      startTime: '09:00',
      endTime: '21:00',
    },
          events: events,
          defaultView: 'agendaWeek'
        })
      })
    </script>
@stop