@extends('layouts.corebiz')

@section('title', 'Register - CoreBiz')

@push('styles')
<style>
    .auth-section {
        padding: 60px 0;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }
    
    .auth-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .auth-header {
        background: linear-gradient(135deg, #0047AB 0%, #2A6EB0 100%);
        padding: 40px 30px;
        color: white;
        text-align: center;
    }
    
    .auth-header i {
        font-size: 3.5rem;
        margin-bottom: 15px;
    }
    
    .auth-header h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: white;
    }
    
    .auth-body {
        padding: 40px 30px;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-group label {
        font-weight: 500;
        color: #555;
        margin-bottom: 8px;
        display: block;
    }
    
    .input-group {
        position: relative;
    }
    
    .input-group-text {
        background: transparent;
        border-right: none;
        color: #0047AB;
    }
    
    .form-control {
        border-left: none;
        padding-left: 0;
        height: 50px;
        font-size: 0.95rem;
    }
    
    .form-control:focus {
        border-color: #ced4da;
        box-shadow: none;
        border-left: none;
    }
    
    .btn-auth {
        background: linear-gradient(135deg, #0047AB 0%, #2A6EB0 100%);
        border: none;
        height: 50px;
        border-radius: 10px;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        width: 100%;
        transition: all 0.3s;
    }
    
    .btn-auth:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0,71,171,0.3);
    }
    
    .auth-footer {
        text-align: center;
        margin-top: 25px;
        color: #666;
    }
    
    .auth-footer a {
        color: #0047AB;
        text-decoration: none;
        font-weight: 600;
    }
    
    .auth-footer a:hover {
        text-decoration: underline;
    }
</style>
@endpush

@section('content')
<div class="auth-section">
    <div class="container">
        <div class="auth-card">
            <div class="auth-header">
                <i class="bi bi-person-plus"></i>
                <h2>Create Account</h2>
                <p class="mb-0">Join us today</p>
            </div>
            
            <div class="auth-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" 
                                   placeholder="Enter your full name" required autofocus>
                        </div>
                        @error('name')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" 
                                   placeholder="Enter your email" required>
                        </div>
                        @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" placeholder="Create a password" required>
                        </div>
                        @error('password')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" 
                                   id="password_confirmation" name="password_confirmation" 
                                   placeholder="Confirm your password" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-auth">
                        <i class="bi bi-person-plus me-2"></i> Register
                    </button>
                </form>
                
                <div class="auth-footer">
                    Already have an account? <a href="{{ route('login') }}">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection