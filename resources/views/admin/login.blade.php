@extends('layouts.admin-login')

@section('title', 'Admin Login - Laboratorium Fisika Medis')

@section('content')
    <!-- Login Form Container -->
    <div class="w-full max-w-lg">
        @include('admin.components.login.header')
        @include('admin.components.login.login-form')
        @include('admin.components.login.footer')
    </div>
@endsection