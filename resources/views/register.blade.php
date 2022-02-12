@extends('layout')

@section('body')
<form action="/register-try" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Sign Up</h2>
    <div class="row mb-3">
        <div class="col">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control rounded-top @error('first_name') is-invalid @enderror" id="first_name" value="{{ old('first_name') }}" autofocus required>

                @error('first_name')
                    <div class="invalid-feedback d-block text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control rounded-top @error('last_name') is-invalid @enderror" id="last_name" value="{{ old('last_name') }}" required>

                @error('last_name')
                    <div class="invalid-feedback d-block text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <p class="form-label">Gender</p>
                <div class="d-flex">
                    <div class="form-check me-3">
                        <label class="form-check-label" for="gender_id">Male</label>
                        <input class="form-check-input" type="radio" name="gender_id" id="gender_id" value="male">
                    </div>
                    
                    <div class="form-check">
                        <label class="form-check-label" for="gender">Female</label>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    </div>
                </div>

                @error('gender')
                    <div class="invalid-feedback d-block text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" name="middle_name" class="form-control rounded-top @error('middle_name') is-invalid @enderror" id="last-name" value="{{ old('middle_name') }}">

                @error('middle_name')
                    <div class="invalid-feedback d-block text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required >
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="role_id" class="form-label">Role</label>
                <select id="role_id" name="role_id" class="form-control form-select @error('role_id') is-invalid @enderror">
                    <option selected>Choose Role</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
    
                @error('role_id')
                        <div class="invalid-feedback d-block text-start">
                            {{ $message }}
                        </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="display_picture_link" class="form-label">Display Picture</label>
                <input type="file" class="form-control form-control-sm" id="display_picture_link" name="display_picture_link">

                @error('display_picture_link')
                    <div class="invalid-feedback d-block text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="container text-center">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        <p>Already have an account? <a href="/login">Login Now!</a></p>
    </div>
</form>

@endsection