@extends('layouts.defalut')
@section('css')

    <style>

    </style>
@endsection
@section('content')
    <div id="calendar" class="mt-5"></div>
@endsection
@section('js')
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         initialView: 'dayGridMonth'
        //     });
        //     calendar.render();
        // });

        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',  
            locale: 'th',  
            headerToolbar: {
                left: 'prev,next today',  
                center: 'title',  
                right: 'dayGridMonth,timeGridWeek,timeGridDay' 
            },
            // themeSystem: 'bootstrap5'
            views: {
                agendaWeek: {
                   
                },
                agendaDay: {
  
                }
            },
            events: [
                // {
                //     title: 'ประชุมทีมงาน',
                //     start: '2025-05-05T10:00:00',
                //     end: '2025-05-05T12:00:00'
                // },
                // {
                //     title: 'สัมมนาเรื่องเทคโนโลยี',
                //     start: '2025-05-10T09:00:00',
                //     end: '2025-05-10T17:00:00'
                // }
            ],
            editable: true,  // สามารถแก้ไขกิจกรรมได้
            droppable: true, // สามารถลากกิจกรรมไปยังวันที่ใหม่ได้
            eventColor: '#378006',  // สีของกิจกรรม
            locale: 'th'  // ใช้ locale ภาษาไทย
        });

        calendar.render();
    });
    </script>
@endsection
