<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="border border-blue-400 py-16 px-16 my-20">
        <h1 class="lg:text-7xl font-bold text-3xl sm:text-red-400 md:text-blue-400 lg:text-green-400 xl:text-red-400 2xl:text-blue-400">
            TailwindCSS入門
        </h1>
    </div>

    <button class="easy-button">ボタン</button>

    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded ml-10">ボタン</button>

    <button class="btn-blue btn">ボタン</button>

    <button class="btn-blue1">ボタン</button>
    <button class="btn bg-primary-100">ボタン</button>

    <div class="flex gap-4 mt-10 ml-10">
        <div class="peer group cursor-pointer grid place-items-center h-40 w-40 bg-blue-400 hover:bg-purple-400 transition-colors duration-500">
            <div class="h-10 w-10 bg-black group-hover:bg-red-600 transition-colors duration-500"></div>
            <div class="h-10 w-10 bg-black group-hover:bg-blue-600 transition-colors duration-500"></div>
        </div>



        <div class="h-40 w-40 bg-green-400 peer-hover:bg-orange-500 transition-colors duration-500 peer-hover:animate-spin"></div>
    </div>
    <div class="grid grid-cols-2 gap-10 p-5 sm:grid-cols-3">
        <div class="bg-purple-400 sm:bg-red-400 aspect-video w-full"></div>
        <div class="bg-purple-400 sm:bg-red-400  aspect-video w-full"></div>
        <div class="bg-purple-400 sm:bg-red-400  aspect-video w-full"></div>
        <div class="bg-purple-400 sm:bg-red-400  aspect-video w-full"></div>
        <div class="bg-purple-400 sm:bg-red-400  aspect-video w-full"></div>
        <div class="bg-purple-400 sm:bg-red-400  aspect-video w-full"></div>
    </div>

    <div class="flex flex-col gap-4 ml-10">
        <div class="bg-orange-400 size-20"></div>
        <div class="bg-orange-400 h-20 w-20"></div>
        <div class="bg-orange-400 h-20 w-20"></div>
        <div class="bg-orange-400 h-20 w-20"></div>
        <div class="bg-orange-400 h-20 w-20"></div>
        <div class="bg-orange-400 h-20 w-20"></div>

    </div>
</body>

</html>