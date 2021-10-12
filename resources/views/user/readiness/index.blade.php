@extends('user.master')
@section('title', 'سطح آمادگی')
@section('content')
    <router-view></router-view>
@endsection
@section('css')
    <link href="{{ asset('assets/css/pages/wizard/wizard-2.rtl.css') }}" rel="stylesheet" type="text/css" />
@endsection