@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    User Details
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $user->username }}</h5>
                    <p class="card-text">
                        Email: {{ $user->email }}<br>
                        First Name: {{ $user->firstname }}<br>
                        Last Name: {{ $user->lastname }}<br>
                        Address: {{ $user->address }}<br>
                        City: {{ $user->city }}<br>
                        Balance Adv: {{ $user->balance_adv }}<br>
                        Balance Isa: {{ $user->balance_isa }}<br>
                        Balance Join: {{ $user->balance_join }}

                    </p>
                    <h3>Balance : {{ $user->balance }}</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Transactions
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="transactionsTable">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Ref</th>
                                <th>Beneficiary</th>
                                <th>Account</th>
                                <th>IBAN</th>
                                <th>SWIFT</th>
                                <th>Bank Beneficiary</th>
                                <th>Amount</th>
                                <th>Digit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->ref }}</td>
                                    <td>{{ $transaction->beneficiary }}</td>
                                    <td>{{ $transaction->account }}</td>
                                    <td>{{ $transaction->iban }}</td>
                                    <td>{{ $transaction->swift }}</td>
                                    <td>{{ $transaction->bank_beneficiary }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->digit }}</td>
                                    <td>
                                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTransactionModal" style="margin-top: 30px;">
            Add Transaction
        </button>

        <!-- Add Transaction Modal -->
        <div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTransactionModalLabel">Add Transaction</h5>

                    </div>
                    <form action="{{ route('admin.transactions.store',['id'=>$user->id]) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <!-- Add form fields for transaction attributes here -->
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">In Progress</option>
                                    <option value="1">Successful</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Confirmed</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" name="amount" id="amount" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="type">Type:</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Withdrawal">Withdrawal</option>
                                    <option value="Wire">Wire</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                Transactions
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="transactionsTable">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Type</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->admintransactions as $transaction)
                        <tr>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->description }}</td>
                            <td>
                                @switch($transaction->status)
                                    @case(0)
                                        In Progress
                                        @break
                                    @case(1)
                                        Successful
                                        @break
                                    @case(2)
                                        Pending
                                        @break
                                    @case(3)
                                        Confirmed
                                        @break
                                @endswitch
                            </td>                            <td>{{ $transaction->amount }}</td>
                            <td>{{ $transaction->type }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
