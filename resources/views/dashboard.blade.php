<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam magni nihil! Magnam libero quis, eaque molestias ut rerum quam earum nulla ex. Accusamus corporis pariatur quo alias repellat adipisci facere maxime iusto, at perferendis, architecto similique cumque esse commodi neque. Similique quos vero fugiat earum optio exercitationem, natus debitis?
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
