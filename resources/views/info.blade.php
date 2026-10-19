<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Aplikasi | AppLaraLearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 text-slate-800 antialiased">
    <main class="flex min-h-screen items-center justify-center px-6 py-12">
        <section class="w-full max-w-xl overflow-hidden rounded-2xl bg-white shadow-xl shadow-slate-200/70">
            <header class="bg-indigo-600 px-8 py-10 text-white">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Informasi Aplikasi</p>
                <h1 class="mt-3 text-3xl font-bold">AppLaraLearn</h1>
                <p class="mt-2 text-indigo-100">Kenali aplikasi pembelajaran Laravel Anda.</p>
            </header>
            <dl class="divide-y divide-slate-100 px-8">
                <div class="grid gap-1 py-6 sm:grid-cols-[10rem_1fr] sm:gap-4">
                    <dt class="text-sm font-medium text-slate-500">Nama Aplikasi</dt>
                    <dd class="font-semibold text-slate-900">AppLaraLearn</dd>
                </div>
                <div class="grid gap-1 py-6 sm:grid-cols-[10rem_1fr] sm:gap-4">
                    <dt class="text-sm font-medium text-slate-500">Framework</dt>
                    <dd class="font-semibold text-slate-900">Laravel</dd>
                </div>
                <div class="grid gap-1 py-6 sm:grid-cols-[10rem_1fr] sm:gap-4">
                    <dt class="text-sm font-medium text-slate-500">Tujuan</dt>
                    <dd class="font-semibold text-slate-900">Belajar Laravel</dd>
                </div>
            </dl>

            <div class="border-t border-slate-100 bg-slate-50 px-8 py-8">
                <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-600">Logout</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-900">Keluar dari aplikasi</h2>
                    <p class="mt-2 text-sm text-slate-600">Anda dapat keluar dari sesi aplikasi dan kembali ke halaman
                        login.</p>

                    <form method="POST" action="{{ url('/login') }}" class="mt-5 flex flex-col gap-3 sm:flex-row">
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-red-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-200">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
