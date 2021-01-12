<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class=" text-purple-900 font-semibold">
                    {{ $title }}
                </div>
                <form action="{{ route($action) }}" method="post" class="flex w-full mt-8">
                    @csrf
                    <input type="text" name="nome" placeholder="digite sua pesquisa" class="flex-1 w-full text-gray-700 bg-gray-200 rounded-md hover:bg-white border border-gray-200 outline-none focus:bg-white py-2">
                    <button type="submit" class="flex-shrink-0 bg-purple-500 hover:bg-purple-600 outline-none py-2 px-4 ml-4 text-white font-semibold">
                        {{ $labelButton }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
