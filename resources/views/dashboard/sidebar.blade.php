@include('layout.header')


{{-- <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button> --}}

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-70 h-screen transition-transform -translate-x-full sm:translate-x-0 font-kanit" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
         <img src="{{asset('image/logoside.png')}}" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
         <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">Kelurahan Bantarsoka</span>
      </a>
      <ul class="space-y-2 font-medium">
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <i class="fas fa-user text-gray-500 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover-bg-gray-100 dark:hover-bg-gray-700 group">
            <i class="fas fa-tachometer-alt w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
            <span class="ml-3">Dashboard</span>
        </a>
    </li>
    <li>
        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example-1">
            <i class="fas fa-database text-gray-500 w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"></i>
            <span class="ml-3 text-left whitespace-nowrap">Kelola Data</span>
            <i class="fas fa-caret-down w-3 h-3"></i>
        </button>
        <ul id="dropdown-example-1" class="hidden py-2 space-y-2">
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Penduduk</a>
            </li>
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Kartu Keluarga</a>
            </li>
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Invoice</a>
            </li>
        </ul>
    </li>
    <li>
        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example-2">
            <i class="fas fa-users text-gray-500 w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"></i>
            <span class="ml-3 text-left whitespace-nowrap">Sirkulasi Penduduk</span>
            <i class="fas fa-caret-down w-3 h-3"></i>
        </button>
        <ul id="dropdown-example-2" class="hidden py-2 space-y-2">
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Lahir</a>
            </li>
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Meninggal</a>
            </li>
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Pendatang</a>
            </li>
            <li>
                <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover-bg-gray-100 dark:text-white dark:hover-bg-gray-700">Data Pindah</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover-bg-gray-100 dark:hover-bg-gray-700 group">
            <i class="fas fa-chart-bar text-gray-500 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Kelola Laporan</span>
            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover-bg-gray-100 dark:hover-bg-gray-700 group">
            <i class="fas fa-user-shield text-gray-500 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Kelola Admin</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover-bg-gray-100 dark:hover-bg-gray-700 group">
            <i class="fas fa-sign-out-alt text-gray-500 w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
            <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
        </a>
    </li>
</ul>
   </div>
</aside>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    const button1 = document.querySelector('[data-collapse-toggle="dropdown-example-1"]');
    const dropdown1 = document.getElementById('dropdown-example-1');

    const button2 = document.querySelector('[data-collapse-toggle="dropdown-example-2"]');
    const dropdown2 = document.getElementById('dropdown-example-2');

    button1.addEventListener('click', function() {
        if (dropdown1.classList.contains('hidden')) {
            dropdown1.classList.remove('hidden');
        } else {
            dropdown1.classList.add('hidden');
        }
    });

    button2.addEventListener('click', function() {
        if (dropdown2.classList.contains('hidden')) {
            dropdown2.classList.remove('hidden');
        } else {
            dropdown2.classList.add('hidden');
        }
    });
});
</script>
