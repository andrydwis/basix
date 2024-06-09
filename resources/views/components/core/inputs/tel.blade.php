<input type="tel" {{ $attributes->twMerge('rounded-lg border-4 border-black transition-all shadow-neo focus:translate-x-1 focus:translate-y-1 focus:border-black focus:shadow-none focus:ring-0') }}>

@pushonce('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.querySelector('input[type="tel"]');

            input.addEventListener('input', function() {
                //only allow number and +
                input.value = input.value.replace(/[^0-9+]/g, '');
            });
        });
    </script>
@endpushonce