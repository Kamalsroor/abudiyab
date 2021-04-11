<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
   public function secondBookingStep(Booking $booking)
   {
       return view('web.bookings.secondBookingPage',['booking'=>$booking]);
   }

   public function secondStepStore(Request $request , $booking)
   {
       $booking = Booking::where('id',$booking)->first();
       $booking->baby_seat = $request->seatInput;
       $booking->abudiyab_shield = $request->shieldInput;
       $booking->insurance = $request->insuranceInput;
     //$booking->open_kilometer = $request->kilometerInput;
       $booking->navigation_system = $request->navigationInput;
       $booking->home_delivery = $request->deliveryInput;
       $booking->intercity_shipping = $request->intercityInput;
       $booking->status = 'pending';
       $booking ->update();

       return redirect(route('thirdBookingStep' , ['booking'=>$booking ]));
   }

   public function thirdBookingStep(Booking $booking)
   {
       return view('web.bookings.thirdBookingPage',['booking'=>$booking]);
   }

    public function thirdStepStore(Request $request , $booking)
    {
        $booking = Booking::where('id',$booking)->first();
        $booking->total_amount = $request->totalAmount;
        $last_booking_number = Booking::orderBy('id' , 'DESC')->first();
        $booking->booking_number=$last_booking_number['booking_number']+1;
        $booking->user_id=Auth::user()['id'];
        $booking ->update();
        return redirect(route('fourthBookingStep' , ['booking'=>$booking]));
    }

    public function fourthBookingStep(Booking $booking)
    {
        return view('web.bookings.fourthBookingPage',['booking'=>$booking]);
    }

    public function fifthBookingStep()
    {
        // $booking = Booking::where('user_id',Auth::user()['id'])->first();
        $booking = DB::table('bookings')->latest('id')->where('user_id',Auth::user()['id'])->first();
        
        return view('web.bookings.fifthBookingPage',['booking'=>$booking]);
    }
}
