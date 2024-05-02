<!DOCTYPE html>
<html lang="pt-br" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ambicioso</title>
</head>

<body>
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://i.pinimg.com/originals/28/5b/db/285bdb717d77eb00bb81088a2b4aa674.jpg')">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col items-center">
                    <img src="img/logoamb.png" width="150" alt="" srcset="" />
                    <h1 class="mb-2 text-2xl">Bem-Vindo</h1>
                    <span class="text-gray-300">Faça Login</span>
                </div>
                <form action="config/validalogin.php" method="post">
                    <div class="mb-4 text-lg">
                        <input class="rounded-3xl border-none bg-inherit bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="login" placeholder="email@email.com" />
                    </div>

                    <div class="mb-4 text-lg">
                        <input class="rounded-3xl border-none bg-inherit bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" name="password" placeholder="Senha" />
                    </div>
                    <div class="mt-8 flex justify-center text-lg text-black">
                        <button type="submit" class="rounded-3xl bg-transparent bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-blue-600">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>