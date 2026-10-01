<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            background: #f3f6fb;
            color: #172033;
            font: 16px/1.5 system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .login-card {
            width: min(100%, 440px);
            padding: clamp(24px, 6vw, 40px);
            background: #fff;
            border: 1px solid #e5eaf2;
            border-radius: 16px;
            box-shadow: 0 14px 40px rgb(26 43 77 / 9%);
        }

        h1 {
            margin: 0 0 6px;
            font-size: 1.8rem;
        }

        .intro {
            margin: 0 0 26px;
            color: #65718a;
        }

        .field {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            min-height: 46px;
            padding: 10px 12px;
            border: 1px solid #cbd3e0;
            border-radius: 8px;
            font: inherit;
        }

        input:focus {
            outline: 3px solid rgb(55 105 220 / 20%);
            border-color: #3769dc;
        }

        .captcha-box {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            padding: 14px;
            border: 1px solid #cbd3e0;
            border-radius: 8px;
            background: #f9fbfe;
        }

        .error-message {
            margin: 0 0 18px;
            color: #b42318;
        }

        .captcha-box input {
            width: 20px;
            height: 20px;
            margin: 0;
            accent-color: #315fce;
        }

        .captcha-box label {
            margin: 0;
            font-weight: 500;
            cursor: pointer;
        }

        .captcha-hint {
            width: 100%;
            margin: 0;
            color: #65718a;
            font-size: .85rem;
        }

        button {
            width: 100%;
            min-height: 48px;
            border: 0;
            border-radius: 8px;
            background: #315fce;
            color: #fff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: #254eaf;
        }

        .forgot {
            display: block;
            margin-top: 18px;
            text-align: center;
            color: #315fce;
        }

        @media (max-width: 360px) {
            body {
                padding: 12px;
            }

            .login-card {
                padding: 22px 18px;
            }
        }
    </style>
</head>

<body>
    <main class="login-card">
        <h1>Login AppLaraLearn</h1>
        <p class="intro">Sign in to continue to your account.</p>

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="field">
                <label for="email">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="username"
                    required autofocus>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required>
            </div>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <button type="submit">Login</button>
        </form>
    </main>
</body>

</html>
