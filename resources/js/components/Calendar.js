import React from 'react';
import FullCalendar from '@fullcalendar/react';
import timeGridPlugin from '@fullcalendar/timegrid';

const Calendar = () => {
  return (
    <FullCalendar
      plugins={[ timeGridPlugin ]}
      initialView="timeGridWeek"
      headerToolbar={{ start: 'today', center: 'title', end: 'prev,next' }}
      allDaySlot={false}
      slotMinTime="08:00:00"
      slotMaxTime="22:00:00"
      selectable={true}
      selectMirror={true}
      expandRows={true}
      nowIndicator={true}
      windowResizeDelay={0}
    />
  )
};

export default Calendar;
