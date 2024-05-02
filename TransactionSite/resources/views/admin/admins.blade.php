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
                    <h4 class="card-title">Admins List</h4>
                    <input type="text" id="searchInput" placeholder="Search admins..." oninput="performSearch(event)" class="form-control">
                    <div class="table-responsive">
                        <table class="table table-hover" id="adminsTable">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Verification Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->firstname }}</td>
                                    <td>{{ $admin->lastname }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->email_verified_at ? 'Verified' : 'Not Verified' }}</td>
                                    <td>
                                        <!-- Add your ban/unban logic here -->
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
            const adminsTable = document.getElementById('adminsTable');

            axios.get('/admin/admins/search', {
                params: {
                    query: searchInput.value
                }
            })
                .then(function (response) {
                    // Update the admins table with the search results
                    adminsTable.innerHTML = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        }
    </script>
@endsection
