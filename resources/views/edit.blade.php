<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <div style="padding:100px">
        <form action="{{ routre('user.index') }}">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="name" />
                <label class="form-label" for="form2Example1">Name</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="mobile" />
                <label class="form-label" for="form2Example1">Mobile</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="address" />
                <label class="form-label" for="form2Example1">address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="password" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- Submit button -->
            <button href="{{ route('user.update') }}" type="button"
                class="btn btn-primary btn-block mb-4">update</button>
        </form>
    </div>
</body>
