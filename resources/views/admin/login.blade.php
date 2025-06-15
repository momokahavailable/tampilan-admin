@extends('admin.layouts.dashboard')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-header text-center mb-4">
            <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>
            <h2>Admin Login</h2>
            <p>Masuk ke panel administrasi</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle me-2"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
                <div class="form-floating flex-grow-1">
                    <input type="text" 
                           class="form-control @error('username') is-invalid @enderror" 
                           id="username" 
                           name="username" 
                           placeholder="Username"
                           value="{{ old('username') }}" 
                           required autofocus>
                    <label for="username">Username</label>
                </div>
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
                <div class="form-floating flex-grow-1">
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           placeholder="Password"
                           required>
                    <label for="password">Password</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-login w-100">
                <i class="fas fa-sign-in-alt me-2"></i> Masuk
            </button>
        </form>
    </div>
</div>
@endsection
