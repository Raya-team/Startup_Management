@extends('user.master')
@section('content')
    <router-view></router-view>
@endsection

@section('script')
<script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection