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
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
