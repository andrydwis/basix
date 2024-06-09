<button {{ $attributes->twMerge('px-4 py-2 font-bold text-lg border-4 border-black rounded-lg transition-all shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none disabled:pointer-events-auto disabled:opacity-50') }}>
    {{ $slot }}
</button>