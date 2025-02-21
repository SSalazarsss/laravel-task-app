@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Important for updating (PUT/PATCH) --}}

        <div>
            <label class="block" for="task_name">Task Name:</label>
            <input type="text" name="task_name" id="task_name"
                value="{{ old('task_name', $task->task_name) }}" class="p-3 shadow-2xs w-300 rounded-md items-center">
            @error('task_name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block" for="task_location">Location:</label>
            <input type="text" name="task_location" id="task_location"
                value="{{ old('task_location', $task->task_location) }}" class="p-3 shadow-2xs w-300 rounded-md items-center">
            @error('task_location')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block" for="time_complexity">Time Complexity:</label>
            <input type="number" name="time_complexity" id="time_complexity"
                value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5" class="p-3 shadow-2xs w-300 rounded-md items-center">
            @error('time_complexity')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block" for="materials_required">Materials Required:</label>
            <input type="text" name="materials_required" id="materials_required"
                value="{{ old('materials_required', $task->materials_required) }}" class="p-3 shadow-2xs w-300 rounded-md">
            @error('materials_required')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block"  for="deadline">Deadline:</label>
            <input type="date" name="deadline" id="deadline"
                value="{{ old('deadline', $task->deadline) }}" class="p-3 shadow-2xs w-300 rounded-md">
            @error('deadline')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block" for="priority">Priority:</label>
            <input type="number" name="priority" id="priority"
                value="{{ old('priority', $task->priority) }}" min="1" max="3" class="p-3 shadow-2xs w-300 rounded-md">
            @error('priority')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label class="block" for="category">Category:</label>
            <input type="text" name="category" id="category"
                value="{{ old('category', $task->category) }}" class="p-3 shadow-2xs w-300 rounded-md">
            @error('category')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update Task</button>
    </form>

    <br>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: red; color: #fff;">
            Delete Task
        </button>
    </form>
@endsection