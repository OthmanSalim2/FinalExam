<head>

    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <div style="padding:100px">

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td> {{ $user->email }} </td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><button href="{{ route('user.edit', $user->id) }}" type="button"
                                class="btn btn-primary">edit</button>
                            <button href="{{ route('user.destroy', $user->id) }}" type="button"
                                class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
