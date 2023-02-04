<div id="addStudents" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto bg-white rounded rounded-lg">
        <!-- Modal content -->
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="addStudents">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close modal</span>
        </button>
        <form action="{{route('addStudents')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="w-full py-6 px-6 lg:px-8">
                <div class=" justify-center items-center ">
                    <div class="w-full p-6 bg-white rounded-xl transform duration-500">
                        <div class="flex flex-col">
                            <div class="w-full rounded">
                                <p class="font-bold text-lg text-center  p-3">{{__('اضافة الطلبة')}} </p>
                            </div>

                            <div class="flex items-center justify-center w-full p-3">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">اضغط لارفاق ملف </span>
                                    </div>
                                    <input name="studentsFile" id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                            <div class="m-1 p-1">
                                <label for="selectedGroup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select role</label>
                                <select name="selectedGroup" class="w-32 py-2 px-4 text-sm font-medium text-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($groups as $group)
                                        <option   value="{{$group->id}}">{{$group->group_name}}-{{$group->platoon->platoon_name}}-{{$group->platoon->company->company_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="p-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{__('حفظ')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




