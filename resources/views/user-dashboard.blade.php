
<h1>
    User Dashboard
</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button
        class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline"
        type="submit"
    >
        Logout
    </button>
</form>
