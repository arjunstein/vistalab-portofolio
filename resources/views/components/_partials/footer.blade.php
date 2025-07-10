@php
    $user = App\Models\User::getUserAttributes();
@endphp
<footer class="py-8 text-center text-gray-600 text-sm">
    &copy; {{ date('Y') }} Crafted with ❤️ by {{ $user['username'] }}
</footer>
