<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Selamat Datang, {{ Auth::user()->name }}</h3>
                <p class="mt-2 text-gray-600">Anda login sebagai Mahasiswa</p>
                
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-medium text-blue-800">Mata Kuliah</h4>
                        <p class="text-blue-600">Lihat mata kuliah yang tersedia</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-medium text-green-800">Tugas</h4>
                        <p class="text-green-600">Lihat tugas yang harus dikerjakan</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <h4 class="font-medium text-purple-800">Nilai</h4>
                        <p class="text-purple-600">Lihat nilai dan progress</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>