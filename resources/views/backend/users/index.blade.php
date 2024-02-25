<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $data['title'] }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="grid grid-cols-2 gap-2">
                    <div class="col-start text-xl p-5 card-title font-semibold dark:text-white">{{ $data['title'] }}</div>
                    <div class="col-end lg:col-span-1 text-xl p-5 card-title font-semibold dark:text-white">{{ $data['title'] }}</div>
                </div>
                <div class="card-body py-8 table-auto">
                    <table id="tabel-data">
                        <thead class="dark:bg-white">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered At</th>
                                <th>Act.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['user'] as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href=""
                                            class="bg-yellow-400 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                            </svg>
                                            <span>Update</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
