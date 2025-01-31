<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-[#B88B8BE5] min-h-screen flex items-center justify-center gap-x-72">
        <div class="w-1/3">
            <img src="./assets/images/bg.svg" alt="bg" class="h-[100vh] max-w-full">
        </div>
        <div class="w-1/3">
            <h1 class="text-4xl font-semibold">Registrasi</h1>
            @if (Session::has('error'))
                <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                    <span class="font-medium">{{ Session::get('error') }}</span>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="p-4 my-4 text-sm text-green-800 rounded-lg bg-green-50 " role="alert">
                    <span class="font-medium">{{ Session::get('success') }}</span>
                </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                <div class="flex flex-col space-y-6">
                    @csrf
                    <input type="text" name="nama_lengkap"
                        class="p-5 rounded-xl bg-[#CCB8B8] placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="nama_lengkap" placeholder="Nama Lengkap" required>
                    <input type="number" name="npm"
                        class="p-5 rounded-xl bg-[#CCB8B8] placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="npm" placeholder="NPM" required>
                    <input type="email" name="email"
                        class="p-5 rounded-xl bg-[#CCB8B8] placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="email" placeholder="Email" required>
                    <input type="password" name="password"
                        class="p-5 rounded-xl bg-[#CCB8B8] placeholder:text-[#524A4A] placeholder:text-lg focus:outline-none"
                        id="password" placeholder="Kata Sandi" required>
                </div>
                <div class="mt-7">
                    <button
                        class="w-full bg-[#615555] p-5 text-xl rounded-xl font-semibold hover:opacity-90">Daftar</button>
                </div>
                <div class="flex space-x-1 justify-center my-5">
                    <p class="text-lg font-medium">Sudah Punya Akun?</p> <a href="/login"
                        class="text-lg font-medium text-[#0066FF]">Masuk</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
