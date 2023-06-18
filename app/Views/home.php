<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row" style="width:110%">
            <div class="col-md-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Title:</strong> <span id="eventTitle"></span></p>
                    <p><strong>Start Date:</strong> <span id="eventStartDate"></span></p>
                    <p><strong>End Date:</strong> <span id="eventEndDate"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var existingEvents = <?php echo json_encode($file) ?>;

    var defaultHolidays = [{
            title: "New Year's Day",
            start: "2023-01-01",
            end: "2023-01-01"
        },
        {
            title: "Independence Day",
            start: "2023-06-12",
            end: "2023-06-12"
        },
        // Add more holiday events here...
    ];

    var events = existingEvents.concat(defaultHolidays);

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
        },
        events: events,
        eventClick: function(event) {
            console.log('Event clicked:', event);
            $('#eventTitle').text(event.title);
            $('#eventStartDate').text(event.start.format('MMMM Do, YYYY'));
            $('#eventEndDate').text(event.end.format('MMMM Do, YYYY'));
            $('#eventModal').modal('show');
            // Rest of the code
        },
        eventDragStart: function(event) {
            // Show tooltip when event drag starts
            var tooltip = '<div class="tooltip">Drag event: ' + event.title + '</div>';
            $(tooltip).appendTo('body');
        },
        eventDragStop: function(event) {
            // Hide tooltip when event drag stops
            $('.tooltip').remove();
        }
    });
    </script>






</body>

</html>