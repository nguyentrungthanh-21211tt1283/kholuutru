@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->phone }}</th>
                        <td><img src="{{ asset('uploads/userimage/' . $user->image) }}" alt="Phone Image"></td>
                        <th>
                            <a href="{{ route('users.detail', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.UpdatetUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{route('user.deleteUser',['id' => $user->id]) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $users->links() }}</div>
            <div class="col-md-5"></div>
        </div>

    </div>
</main>
@endsection