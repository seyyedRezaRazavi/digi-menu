@extends('template.defualt')

@section('content')
    <h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
        <div class="inline-flex items-center gap-4">
            <div>{{ $menu->name }}</div>

            <button type="button"
                data-modal-target="edit_menu_modal" data-modal-toggle="edit_menu_modal"
                class="text-white text-sm bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17v1a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2M6 1v4a1 1 0 0 1-1 1H1m13.14.772 2.745 2.746M18.1 5.612a2.086 2.086 0 0 1 0 2.953l-6.65 6.646-3.693.739.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                </svg>
                ویرایش
            </button>

        </div>
        

    </h2>
    <hr>

    <section class="grid lg:grid-cols-3 sm:grid-cols-1 m-10">

        @foreach ($menu->titles as $title  )
            
            <div
                class="w-full mt-5 max-w-md p-4 bg-white border bg-purple-100 border-gray-300 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{$title->name}}</h5>
                    <button type="button" 
                        data-modal-target="add_new_item_modal" data-modal-toggle="add_new_item_modal" onclick="changeParamAddNewItem('{{$title->id}}')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">افزودن آيتم</button>
                    <button type="button" 
                        data-modal-target="update_title_modal" data-modal-toggle="update_title_modal" onclick="changeParamUpdate('{{$title->name}}','{{$title->id}}')"
                        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">ویرایش</button>
                    
                </div>
                <hr class="border-b border-dashed border-blue-400" />
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($title->items as $item )
                            
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <form action="{{route('item.destroy',$item->id)}}" method="POST"">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="button" type="submit">
                                            <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{$item->name}}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{$item->desc}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{$item->price}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        @endforeach
        <button type="button" data-modal-target="add_new_title_modal" data-modal-toggle="add_new_title_modal">
            <div
                class="w-full max-w-md p-4 bg-green-300 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 grid place-items-center">

                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                افزودن بخش جدید
            </div>
        </button>



    </section>

    
    
    @include('pages.menu_show_includes.delete_menu')
    @include('pages.menu_show_includes.edit_menu')
    @include('pages.menu_show_includes.add_new_title')
    @include('pages.menu_show_includes.title_edit')
    @include('pages.menu_show_includes.title_delete')
    @include('pages.menu_show_includes.item_new')
    @include('pages.menu_show_includes.qrcode_show')

    <script type="text/javascript">
        let title_name = document.getElementById("title_name_edit");
        let title_new_id = document.getElementById("title_id_hidden");
        let title_update_form = document.getElementById("title_update_form");
        let title_delete_form = document.getElementById("title_delete_form");

        function changeParamUpdate(name,title_id){
            title_name.setAttribute('value',name);
            title_new_id.setAttribute('value',title_id);
            title_update_form.setAttribute('action','{{route('title.index')}}'+'/'+title_id);
            title_delete_form.setAttribute('action','{{route('title.index')}}'+'/'+title_id);
        }

        let item_id_add_new_hidden = document.getElementById("item_id_add_new_hidden");

        function changeParamAddNewItem(title_id){
            item_id_add_new_hidden.setAttribute('value',title_id);
        }
    
        </script>
@endsection
