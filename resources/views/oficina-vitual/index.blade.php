@extends('layouts.app')

@section('content_header')
<img class="main-banner" src="{{ asset("img/main_banner.png") }}" alt="main_banner">
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- Banner Zoom --}}
            <div class="row p-4">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-4 iniciar-reunion-panel">
                            <div class="content">
                                <div class="computer-icon p-4 text-center">
                                    <img src="{{ asset("img/icons/computer_icon.png") }}" width="40%" alt="secondary_banner">
                                </div>
                                <div class="start-meet-btn text-center">
                                    <a target="_BLANK" href="{{ route('zoom-meet') }}"
                                        class="btn btn-primary start-meet">Iniciar Reunión</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="secondary_banner">
                                <img src="{{ asset("img/secondary_banner.png") }}" width="100%" height="220"
                                    alt="secondary_banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Banner Zoom --}}
            {{-- Agenda Reunion --}}
            <div class="row p-4">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-8">
                            <div class="third_banner">
                                <img src="{{ asset("img/third_banner.png") }}" width="100%" height="220" alt="secondary_banner">
                            </div>
                        </div>
                        <div class="col-4 agendar-reunion-panel">
                            <div class="content">
                                <div class="calendary-icon p-4 text-center">
                                    <img src="{{ asset("img/icons/calendar_icon.png") }}" width="40%" alt="secondary_banner">
                                </div>
                                <div class="start-meet-btn text-center">
                                    <a href="{{ route('cita-telefonica') }}" class="btn btn-primary agenda-meet">agendar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Ageda Reunion --}}
            <div class="row" style="margin:0 -2.8% 0 -3.5%">
                <div class="col-lg-12">
                    <div class="secondary-banner">
                        <img src="{{ asset("img/fourth_banner.png") }}" alt="main_banner" width="100%" height="450">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .main-banner{
        margin:-2% 0 0 -2%;
        width: 103.9%;
        max-width: 110%;
    }

    .secondary_banner{
        margin-left:-2%;
    }

    .iniciar-reunion-panel{
        background-color: #317873
    }

    .agendar-reunion-panel{
        background-color: #0000cd
    }

    .third_banner{
        margin: 0 -2% 0 -2%;
    }

    .start-meet{
        background-color: transparent;
        border: 1px solid #FFFFFF;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 10px;
    }

    .agenda-meet{
        background-color: transparent;
        border: 1px solid #FFFFFF;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 10px;
        padding: 2% 10% 2% 10%;
    }
</style>
@stop
