@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-end mb-3">
                <a href="/admin/users/create" class="btn btn-primary mr-3" style="margin-right: 20px;">Add User</a>
                <a href="/admin/admins/create" class="btn btn-primary">Add Admin</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users List</h4>
                    <input type="text" id="searchInput" placeholder="Search users..." oninput="performSearch(event)" class="form-control">
                    <div class="table-responsive">
                        <table class="table table-hover" id="usersTable">                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Balance Adv</th>
                                <th>Balance Isa</th>
                                <th>Balance Join</th>
                                <th>Verification Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->balance_adv }}</td>
                                    <td>{{ $user->balance_isa }}</td>
                                    <td>{{ $user->balance_join }}</td>
                                    <td>{{ $user->email_verified_at ? 'Verified' : 'Not Verified' }}</td>
                                    <td>
                                        <!-- Add your ban/unban logic here -->

                                        <!-- Delete button -->
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                        <!-- Details button -->
                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info">Details</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    <script>
        function performSearch(event) {
            const searchInput = event.target;
            const usersTable = document.getElementById('usersTable');

            axios.get('/admin/users/search', {
                params: {
                    query: searchInput.value
                }
            })
                .then(function (response) {
                    // Update the users table with the search results
                    usersTable.innerHTML = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        }
    </script>
@endsection

