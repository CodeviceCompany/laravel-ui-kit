<div
    x-cloak
    x-data="modal(@js($id), @js($open))"
    @open-modal.camel.window="openModal"
    @close-modal.camel.window="closeModal"
    @keydown.window.escape="open = false"
    x-show="open"
    class="fixed z-10 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    x-ref="dialog"
    aria-modal="true"
    id="{{$id}}"
    {{ $attributes }}
>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-32 text-center sm:block sm:p-0">

        <div
            x-show="open"
            @click="open = false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            aria-hidden="true"
        >
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        >
            @if($withCloseButton)
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button x-on:click="open = false" type="button"
                            class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Close</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif


            <div @class(["bg-white px-4 pt-4 pb-4 sm:p-6", "sm:pb-4" => $footer])>
                {{ $slot}}
            </div>

            @if($footer)
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:justify-end">
                    {{ $footer }}
                </div>
            @endif
        </div>

    </div>
</div>

@once
    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('modal', (id = null, open = @js($open)) => ({
                    id: id,
                    open: open,
                    init() {
                        this.id = id ?? this.$el.id
                        this.$watch('open', value => {
                            if (value === true) {
                                document.body.classList.add('overflow-hidden')
                            } else {
                                document.body.classList.remove('overflow-hidden')
                            }
                        });
                    },
                    openModal(e) {
                        if (this.isTheTargetedModal(e.detail)) {
                            this.open = true
                        }
                    },
                    closeModal(e) {
                        if (this.isTheTargetedModal(e.detail)) {
                            this.open = false
                        }
                    },
                    isTheTargetedModal(id) {
                        return this.id === null || this.id === id
                    }
                }))
            })
        </script>
    @endpush
@endonce
