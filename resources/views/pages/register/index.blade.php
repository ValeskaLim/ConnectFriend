@extends('layout.master')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="card p-4 shadow rounded" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">@lang('messages.register')</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">@lang('messages.username')</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="form-control @error('username') is-invalid @enderror" 
                        value="{{ old('username') }}" 
                        required>
                    @error('username')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">@lang('messages.gender')</label>
                    <select 
                        name="gender" 
                        id="gender" 
                        class="form-select @error('gender') is-invalid @enderror" 
                        required>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>@lang('messages.gender1')</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>@lang('messages.gender2')</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="hobbies" class="form-label">@lang('messages.hobbies_register')</label>
                    <input 
                        type="text" 
                        id="hobbies" 
                        name="hobbies" 
                        class="form-control @error('hobbies') is-invalid @enderror" 
                        value="{{ old('hobbies') }}" 
                        required>
                    @error('hobbies')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">@lang('messages.phone_number')</label>
                    <input 
                        type="text" 
                        id="phone_number" 
                        name="phone_number" 
                        class="form-control @error('phone_number') is-invalid @enderror" 
                        value="{{ old('phone_number') }}" 
                        required>
                    @error('phone_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="instagram_link" class="form-label">@lang('messages.instagram_link')</label>
                    <input 
                        type="url" 
                        id="instagram_link" 
                        name="instagram_link" 
                        class="form-control @error('instagram_link') is-invalid @enderror" 
                        value="{{ old('instagram_link') }}" 
                        required>
                    @error('instagram_link')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">@lang('messages.password')</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        required>
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 rounded-2 fw-bold">@lang('messages.register')</button>
                <a href="{{ route('login') }}" class="d-block text-center mt-3">@lang('messages.login_message')</a>

                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
