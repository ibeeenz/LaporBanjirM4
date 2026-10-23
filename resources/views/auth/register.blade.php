@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register Petugas Baru</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nama Lengkap:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>
@endsection