<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\CitaTelefonicaRequest;
use App\Http\Requests\OficinaVirtualRequest;
use App\Mail\OsticketNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OficinaVirtualController extends Controller
{
    public function index(Type $var = null)
    {
        return view('oficina-vitual.index');
    }

    public function citaTelefonica(Type $var = null)
    {
        $paises = Country::orderBy('name', 'ASC')->get();
        return view('oficina-vitual.cita-telefonica', [
            'paises' => $paises
        ]);
    }

    public function agendarCita(CitaTelefonicaRequest $request)
    {
        $osticket = Mail::to('apoyomaster@eadic.es')->send(new OsticketNotification($request));
        return redirect()->back()->with('success', 'En el horario y fecha informada uno de nuestros asesores se comunicara contigo');
    }

    public function zoomMeet(Type $var = null)
    {
        return view('oficina-vitual.zoom-meet');
    }
}
