@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                                <p class="text-sm">See information about all members</p>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-4">


                        @if ($errors->any())
                            <div class="mb-5" role="alert">
                                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                    Theres something wrong!
                                </div>
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                    <p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('dashboard.laundry.update', [$laundry->id]) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name" class="form-control-label">Fullname user</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Name" value="{{ $laundry->name ?? '' }}">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="phoneNumber" class="form-control-label">Phone Number</label>
                                    <input class="form-control" type="text" name="phoneNumber" id="phoneNumber"
                                        placeholder="+62" value="{{ $laundry->phoneNumber ?? '' }}">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="clothes" class="form-control-label">Clothes</label>
                                    <input class="form-control" type="text" name="clothes" id="clothes"
                                        placeholder="Kemeja, etc" value="{{ $laundry->clothes ?? '' }}">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="weight" class="form-control-label">Weight</label>
                                    <input class="form-control" type="number" placeholder="Kg" name="weight"
                                        id="weight" step="any" value="{{ $laundry->weight ?? '' }}">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="category" class="form-control-label">Category</label>
                                    <select class="form-control" id="category" name="category">
                                         @if ($laundry->category == 'REGULAR')
                                            <option value="{{ $laundry->category }}" selected>Regular</option>
                                        @else
                                            <option value="{{ $laundry->category }}" selected>Express</option>
                                        @endif
                                        <option value="REGULAR">Regular</option>
                                        <option value="EXPRESS">Express</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group col-12 col-md-6">
                                    <label for="price" class="form-control-label">price</label>
                                    <input class="form-control" type="text" placeholder="Price" name="price"
                                        id="price" value="{{ $laundry->price ?? '' }}">
                                </div> --}}
                                <div class="form-group col-12">

                                    <textarea name="message" class="" id="editor" type="text" placeholder="Message text">{{ $laundry->message ?? '' }}</textarea>

                                </div>
                            </div>
                            <div class=" py-3 px-3 d-flex align-items-center">
                                <div class="ms-auto">
                                    <button class="btn btn-sm btn-white mb-0">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-white mb-0">Save</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
    {{-- <style>
        .form-control-focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .was-validated :valid+.form-control-focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }

        .was-validated :invalid+.form-control-focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }
    </style> --}}
@endpush

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    {{-- <script type="module">
    import Tags from "https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-tags@master/tags.js";
    Tags.init("select"); --}}
  </script>
@endpush
