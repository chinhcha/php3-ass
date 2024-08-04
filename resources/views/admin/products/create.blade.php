@extends('admin.layouts.master')



@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Create </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item active">Create </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Create New File</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.products.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">

                                        <div class="col-lg-12">
                                            <label for="productName" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Enter product title">
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <label for="discription" class="form-label">Description</label>
                                            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter description"></textarea>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <h5 class="fw-semibold mb-3">Image</h5>
                                            <input type="file" class="filepond filepond-input-multiple" multiple
                                                name="image" data-allow-reorder="true" data-max-file-size="3MB"
                                                data-max-files="2">
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <label for="itemPrice" class="form-label">Views</label>
                                            <input type="text" class="form-control" name="views" id="views" placeholder="Views">
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <label for="itemPrice" class="form-label">Category</label>

                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach($categories as $data)
                                                <option value=""></option>
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                            </select>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    {{-- <script>
        CKEDITOR.replace('content');

        function addImageGallery() {
            let id = 'gen' + '_' + Math.random().toString(36).substring(2, 15).toLowerCase();
            let html = `
                <div class="col-md-4" id="${id}_item">
                    <label for="${id}" class="form-label">Image</label>
                    <div class="d-flex">
                        <input type="file" class="form-control" name="product_galleries[]" id="${id}">
                        <button type="button" class="btn btn-danger" onclick="removeImageGallery('${id}_item')">
                            <span class="bx bx-trash"></span>
                        </button>
                    </div>
                </div>
            `;

            $('#gallery_list').append(html);
        }

        function removeImageGallery(id) {
            if (confirm('Chắc chắn xóa không?')) {
                $('#' + id).remove();
            }
        }
    </script> --}}
@endsection
