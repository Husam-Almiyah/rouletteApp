<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
        <h2 class="text-2xl font-semibold mb-5">Create Store</h2>

        <form action="{{ route('store.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Store Name</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md" id="name" name="name" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" class="mt-1 p-2 w-full border rounded-md" id="email" name="email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" class="mt-1 p-2 w-full border rounded-md" id="password" name="password" required>
            </div>

            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role" class="mt-1 p-2 w-full border rounded-md">
                    <option value="store">Store</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="w-full p-2 text-blue-600 bg-blue-600 hover:bg-blue-700 rounded-md">Create Store</button>
        </form>
    </div>
</x-app-layout>
