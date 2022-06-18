@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $employee->name }} profile editing</div>
                    <div class="card-body">
                        <form action="{{ route('employeeUpdate', ['id' => $employee->id]) }}" id="employee-edit" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="employeeName" aria-describedby="nameHelp" value="{{ $employee->name }}">
                                <div id="nameHelp" class="form-text">Masseuse name</div>
                            </div>
                            {{-- <div class="mb-3">
                                <select class="form-select" aria-label="Gender select" name="gender">
                                    <option {{ ($employee->gender === 'F') ? "selected" : ""}} value="1">Female</option>
                                    <option {{ ($employee->gender === 'M') ? "selected" : ""}} value="2">Male</option>
                                  </select>
                            </div> --}}

                            <div class="mb-3 category-checkbox">
                                <p>Category</p>
                                @foreach ($categories as $category)
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{ $category->id }}"
                                            name="categoryCheckbox[]"
                                            {{ (in_array($category->id, $attachedCategories)) ? "checked" : "" }}
                                        >
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{ $category->title }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Select photos</label>
                                <input class="form-control" type="file" name="photos[]" id="formFileMultiple" multiple>
                            </div>

                            <div class="existed-photos">
                                @foreach ($employee->photos as $photo)
                                    <div class="existed-photos-wrapper">
                                        <i class="fa-solid fa-xmark"></i>
                                        <img src="{{ url('storage/images/photos/' . $photo->file_path) }}" alt="{{ $photo->file_path }}">
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary employee-submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
