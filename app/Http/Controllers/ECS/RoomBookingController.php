<?php

namespace App\Http\Controllers\ECS;

use App\Http\Controllers\Controller;
use Acaronlex\LaravelCalendar\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RoomBookingController extends Controller
{
    const BOOKINGS = [
            3 => ['room_id' => 1, 'purpose' => 'HKU meeting', 'contact_person' => '同事A', 'start_time' => '2021-02-19 09:00 (五)', 'end_time' => '2021-02-19 17:30  (五)'] ,
            2 => ['room_id' => 1, 'purpose' => 'ECS meeting', 'contact_person' => '同事B', 'start_time' => '2021-02-18 15:00 (四)', 'end_time' => '2021-02-18 17:00 (四)'] ,
            1 => ['room_id' => 1, 'purpose' => 'Robot meeting', 'contact_person' => '同事C', 'start_time' => '2021-02-17 14:00 (三)', 'end_time' => '2021-02-17 16:00 (三)'] ,
        ];

    public function __construct()
    {
        date_default_timezone_set('Asia/Hong_Kong');
        View::share('rooms', RoomController::getRooms());
        View::share('bookings', self::BOOKINGS);
    }

    public function index()
    {
        return view('ECS.room_booking.index');
    }

    public function calendar()
    {
        $events = [];

        $events[] = \Calendar::event(
            'HKU meeting', //event title
            false, //full day event?
            '2021-02-19T0900', //start time (you can also use Carbon instead of DateTime)
            '2021-02-19T1730', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "ECS meeting",
            false,
            '2021-02-18T1500',
            '2021-02-18T1700',
            0
        );

        $events[] = \Calendar::event(
            "Robot meeting", //event title
            false, //full day event?
            new \DateTime('2021-02-17T1400'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2021-02-17T1600'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
            ->setOptions([
                'locale' => 'zh-hk',
                'firstDay' => 0,
                'displayEventTime' => true,
                'selectable' => true,
                'initialView' => 'timeGridWeek',
                'headerToolbar' => [
                    'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
                ]
            ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('ECS.room_booking.calendar', compact('calendar'));
    }

    public function create()
    {
        return view('ECS.room_booking.create');
    }

    public function edit($booking_id)
    {
        $booking = self::BOOKINGS[$booking_id];
        $booking['start_time'] = date('Y-m-d', strtotime($booking['start_time'])).'T'.date('H:i', strtotime($booking['start_time']));
        $booking['end_time'] = date('Y-m-d', strtotime($booking['end_time'])).'T'.date('H:i', strtotime($booking['end_time']));
        return view('ECS.room_booking.edit', compact('booking', 'booking_id'));
    }
}
