@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 400px; background-color: #fce4ec; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h2 class="text-center mb-4" style="color: #d81b60;">Login</h2>
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" style="color: #a94442;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color: #a94442;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required style="border-radius: 8px; padding: 10px; background-color: #fff; border: 1px solid #f8d7da;">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger btn-lg" style="border-radius: 8px; background-color: #d81b60; border-color: #d81b60; color: white; font-size: 16px; padding: 10px;">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
