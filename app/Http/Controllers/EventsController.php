<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Displays a list of events created by the authenticated user.
     */
    public function index()
    {
        //
    }

    /**
     * Displays a form to create a new event
     */
    public function create()
    {

    }

    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified event by id.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Displays a form to edit an exisitng event loaded by its id
     */
    public function edit(int $id)
    {

    }

    /**
     * Update the specified event in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Displays a form to register an attendee on the event loaded by its id
     */
    public function register(int $id)
    {

    }

    /**
     * Store an existing attendee in the event's attendees
     */
    public function storeAttendee(Request $request, int $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
