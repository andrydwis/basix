<button {{ $attributes->twMerge('px-4 py-2 font-bold text-lg border-4 border-black rounded-lg transition-all shadow-neo hover:translate-x-1 hover:translate-y-1 hover:shadow-none disabled:border-neutral-600 disabled:pointer-events-auto disabled:cursor-not-allowed disabled:bg-neutral-400') }}>
    {{ $slot }}
</button>