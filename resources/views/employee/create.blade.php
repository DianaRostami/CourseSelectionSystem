<form action="{{ route('employee.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name</label>
        <input type="text" id="course_name" name="course_name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
        <label for="course_code" class="block text-sm font-medium text-gray-700">Course Code</label>
        <input type="text" id="course_code" name="course_code" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
        <label for="credit" class="block text-sm font-medium text-gray-700">Credit</label>
        <input type="number" id="credit" name="credit" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
        <label for="teacher_name" class="block text-sm font-medium text-gray-700">Teacher Name</label>
        <input type="text" id="teacher_name" name="teacher_name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
        <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
        <input type="text" id="semester" name="semester" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    </div>

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-bold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        Submit Course
    </button>
</form>
