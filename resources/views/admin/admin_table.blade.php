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
