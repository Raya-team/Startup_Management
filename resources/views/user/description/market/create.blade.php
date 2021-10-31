@extends('user.master')
@section('title', 'توضیحات - بازار')
@section('content')
    <router-view></router-view>
@endsection

@section('css')
    <link href="{{ asset('assets/css/pages/wizard/wizard-2.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{
            font-weight: 600
        }
        .wizard.wizard-2 .wizard-nav{
            -webkit-box-flex: 0;
            flex: 0 0 400px;
            width: 400px;
            max-width: 50%;
        }
        .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]{
            background-color: #509eff45;
            -webkit-transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
            transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
            transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
            transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, -webkit-box-shadow 0.15s ease;
        }
        .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]:after{
            left: 100%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            content: " ";
            height: 0;
            width: 0;
            border: solid transparent;
            position: absolute;
            border-left-color: #509eff45;
            border-width: 1rem;
        }
    </style>
@endsection