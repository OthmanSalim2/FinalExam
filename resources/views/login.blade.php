<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <div style="padding:100px">
        <form action="{{ routre('login') }}">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="password" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Login</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                <p>or sign up with:</p>
            </div>
        </form>
    </div>
</body>
