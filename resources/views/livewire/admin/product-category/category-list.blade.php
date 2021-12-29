<div>
    <div class=" flex items-center justify-between pb-6">
        <div>
            <h2 class="text-gray-600 font-semi-bold">Product Category</h2>
            <span class="text-xs">List of all product categories</span>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex bg-gray-50 items-center p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"/>
                </svg>
                <input wire:model="search" class="bg-gray-50 outline-none ml-2 block rounded" type="text" id=""
                       placeholder="search...">
            </div>
            <div class="lg:ml-40 ml-10 space-x-8">
                <button
                    wire:click="showModal"
                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semi-bold tracking-wide cursor-pointer">
                    Create New Category
                </button>
            </div>
        </div>
    </div>
    <div>
        {{--Success Message--}}
        @include('layouts.success_message')

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            @if($categories->count() > 0)
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                wire:click="sortBy('name')"
                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold text-gray-600 uppercase tracking-wider">
                                <span>
                                    Name
                                </span>
                                @if($sortByField === 'name')
                                    @if($sortByDirectionAsc)
                                        <span>
                                            <svg class="text-green-600 w-4 h-4 inline-block" fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 15l7-7 7 7"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg class="text-green-600 w-4 h-4 inline-block" fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                       </span>
                                    @endif
                                @endif
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold text-gray-600 uppercase tracking-wider">
                                Slug
                            </th>
                            <th wire:click="sortBy('created_at')"
                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold text-gray-600 uppercase tracking-wider">
                                   <span>
                                        Created At
                                    </span>
                                @if($sortByField === 'created_at')
                                    @if($sortByDirectionAsc)
                                        <span>
                                            <svg class="text-green-600 w-4 h-4 inline-block" fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 15l7-7 7 7"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg class="text-green-600 w-4 h-4 inline-block" fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                    @endif
                                @endif
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semi-bold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $category->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $category->slug }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $category->created_at->toFormattedDateString() }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button
                                        wire:click="showModal({{ $category->id }})"
                                        class="bg-green-600 p-2 rounded-md text-white font-semi-bold tracking-wide cursor-pointer">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </button>
                                    <button
                                        wire:click="showDeleteModal({{ $category->id }})"
                                        class="bg-red-600 p-2 rounded-md text-white font-semi-bold tracking-wide cursor-pointer">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    {{--									<span--}}
                                    {{--                                        class="relative inline-block px-3 py-1 font-semi-bold text-green-900 leading-tight">--}}
                                    {{--                                        <span aria-hidden--}}
                                    {{--                                              class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>--}}
                                    {{--									<span class="relative">Activo</span>--}}
                                    {{--									</span>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div
                        class="p-4">
                        {{ $categories->links() }}
                    </div>
                </div>
            @else
                <span class="text-red-500">No Categories found!</span>
            @endif
        </div>
    </div>


    {{--Modal--}}
    @if($displayModal)
        <div
            class="w-full fixed inset-0 z-50  overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold text-gray-500">Create New Category</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg wire:click="$set('displayModal', false)" class="fill-current text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" width="18"
                                 height="18"
                                 viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="my-5 mr-5 ml-5 flex justify-center">
                        <form class="w-full">
                            <div class="">
                                <div class="">
                                    <label for="name" class="text-md text-gray-600">Name</label>
                                </div>
                                <div class="">
                                    <input
                                        wire:model="name"
                                        type="text" id="name" autocomplete="off" name="name"
                                        class="h-2 p-4 w-full border-2 border-gray-300 mb-2 rounded-md @error('name') border-red-600 @enderror"
                                        placeholder="Please Enter Product Category Name">
                                    @error('name')
                                    <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="description" class="text-md text-gray-600">Description</label>
                                </div>
                                <div class="">
                                    <textarea wire:model="description" id="description"
                                              class="p-4 w-full border-2 border-gray-300 mb-2 rounded-md @error('description') border-red-600 @enderror"
                                              rows="6">

                                    </textarea>
                                    @error('description')
                                    <span class="text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2 space-x-6">
                        <button
                            wire:click="$set('displayModal', false)"
                            class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold"
                        >Cancel
                        </button>
                        <button
                            wire:click="submitForm"
                            class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400"
                        > Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif


    {{--Delete Modal--}}
    @if($displayDeleteModal)
        <div
            class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"
            id="modal-id">
            <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
            <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                <!--content-->
                <div class="">
                    <!--body-->
                    <div class="text-center p-5 flex-auto justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-xl font-bold py-4 ">Are you sure?</h3>
                        <p class="text-sm text-gray-500 px-8">Do you really want to delete this?
                            This process cannot be undone</p>
                    </div>
                    <!--footer-->
                    <div class="p-3  mt-2 text-center space-x-4 md:block">
                        <button wire:click="$set('displayDeleteModal', false)"
                                class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                            Cancel
                        </button>
                        <button wire:click="deleteCategory"
                                class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>

