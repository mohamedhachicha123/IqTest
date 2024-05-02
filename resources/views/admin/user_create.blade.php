@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.users.store') }}" method="POST">
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

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="balance_adv">Balance Adv:</label>
            <input type="number" name="balance_adv" id="balance_adv" class="form-control">
        </div>

        <div class="form-group">
            <label for="balance_isa">Balance Isa:</label>
            <input type="number" name="balance_isa" id="balance_isa" class="form-control">
        </div>

        <div class="form-group">
            <label for="balance_join">Balance Join:</label>
            <input type="number" name="balance_join" id="balance_join" class="form-control">
        </div>
        <div class="form-group">
            <label for="currency">Currency:</label>
            <select name="currency" id="currency" class="form-control">
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="GBP">GBP</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Add User</button>
    </form>

@endsection
