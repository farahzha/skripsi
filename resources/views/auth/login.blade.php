@include('layout.header')

<div class="flex flex-col justify-center items-center h-screen">
    <div class="bg-[#FBFBFB] rounded-[12px] drop-shadow-xl p-8 space-y-4 text-center">
        <div class="space-y-2 font-kanit">
            <img src="{{asset('image/logobms.png')}}" alt="logobms" class="w-40 h-40 mx-auto">
            <h1 class="font-bold">Sistem Data Kependudukan</h1>
            <h2 class="font-semibold">Kelurahan Bantarsoka</h2>
        </div>
<form action="/auth" method="post">      
    @csrf
    <div>
    <div class="relative">
        <input name="name" type="text" placeholder="username" class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-300 focus:border-blue-400">
        <i class="absolute left-3 top-3  fas fa-user text-gray-400"></i>
    </div>
</div>

<div>
    <div class="relative">
        <input name="password" type="password" placeholder="password" class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-300 focus:border-blue-400">
        <i class="absolute left-3 top-3 fas fa-lock text-gray-400"></i>
    </div>
</div>

<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button>
</form>
    </div>
</div>

@include('layout.footer')
