<?php

namespace App\Http\Controllers;

use App\Models\ServiceBooking;
use Illuminate\Http\Request;

class ServiceBookingController extends Controller
{
    public function index(Request $request)
    {
        // Get the service parameter from URL
        $selectedService = $request->query('service');
        
        return view('service-booking', compact('selectedService'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'vehicle_type' => 'required|string|max:100',
            'vehicle_model' => 'nullable|string|max:100',
            'vehicle_year' => 'nullable|string|max:4',
            'services' => 'required|array|min:1',
            'additional_notes' => 'nullable|string',
            'preferred_date' => 'nullable|string|max:50',
            'preferred_time' => 'nullable|string|max:50',
        ]);

        $booking = new ServiceBooking();
        $booking->customer_name = $validated['customer_name'];
        $booking->email = isset($validated['email']) ? $validated['email'] : null;
        $booking->phone = $validated['phone'];
        $booking->vehicle_type = $validated['vehicle_type'];
        $booking->vehicle_model = isset($validated['vehicle_model']) ? $validated['vehicle_model'] : null;
        $booking->vehicle_year = isset($validated['vehicle_year']) ? $validated['vehicle_year'] : null;
        $booking->services = $validated['services'];
        $booking->additional_notes = isset($validated['additional_notes']) ? $validated['additional_notes'] : null;
        $booking->preferred_date = isset($validated['preferred_date']) ? $validated['preferred_date'] : null;
        $booking->preferred_time = isset($validated['preferred_time']) ? $validated['preferred_time'] : null;
        $booking->status = 'pending';
        $booking->save();

        $services = is_array($booking->services) ? implode(', ', $booking->services) : $booking->services;
        
        $message = "🔧 NEW SERVICE BOOKING 🔧\n\n";
        $message .= "Customer: " . $booking->customer_name . "\n";
        $message .= "Phone: " . $booking->phone . "\n";
        $message .= "Email: " . ($booking->email ? $booking->email : 'Not provided') . "\n\n";
        $message .= "Vehicle: " . $booking->vehicle_type . " " . ($booking->vehicle_model ? $booking->vehicle_model : '') . "\n";
        $message .= "Year: " . ($booking->vehicle_year ? $booking->vehicle_year : 'Not specified') . "\n\n";
        $message .= "Services: " . $services . "\n";
        $message .= "Notes: " . ($booking->additional_notes ? $booking->additional_notes : 'None') . "\n\n";
        $message .= "Preferred Date: " . ($booking->preferred_date ? $booking->preferred_date : 'Not specified') . "\n";
        $message .= "Preferred Time: " . ($booking->preferred_time ? $booking->preferred_time : 'Not specified') . "\n\n";
        $message .= "Booking ID: #" . $booking->id . "\n";
        $message .= "Status: Pending\n\n";
        $message .= "Please contact this customer to confirm the booking.";
        
        $adminWhatsApp = '94711426008';

        return redirect()->route('service-booking.thankyou')
            ->with('success', 'Your service request has been submitted successfully!')
            ->with('whatsapp_url', "https://wa.me/" . $adminWhatsApp . "?text=" . urlencode($message));
    }

    public function thankYou()
    {
        return view('service-booking-thankyou');
    }
}