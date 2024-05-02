@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" class="form-control">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>

@endsection
