@extends('Layout.adminLayout')
@section('title', 'Quản Lý Sản Phẩm')
@section('content')

<h3>Sản phẩm</h3>

<a href="{{ route('admin.products.store') }}" class="hover:underline">Add new product</a>
<div class="row">
    <div class="col-6">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Danh mục sản phẩm
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('product.show', ['category_id' => '6703e9af00d15b02d88d393d']) }}">Son môi</a></li>
                <li><a class="dropdown-item" href="{{ route('product.show', ['category_id' => '6703e9cc00d15b02d88d393e']) }}">Sửa rửa mặt</a></li>
                <li><a class="dropdown-item" href="{{ route('product.show', ['category_id' => '6703e9db00d15b02d88d393f']) }}">Phấn mắt</a></li>
            </ul>
        </div>
    </div>
    <div class="col-6">
        <div class="pagination-content-wrap">
            {{ $products->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($products as $product)
    <tr>
        <td>
            <p>{{ $product->name }}</p>
        </td>
        <th>
            <img src="{{ asset('img/'. $product->image) }}" alt="" width="200px">
        </th>
        @if($product->description == null)
        <td><b>Sản phẩm không có mô tả</b></td>
        @else
        <td class="description-cell">
            <div class="description-text">
                {{ $product->description }}
            </div>
            <button class="toggle-button" onclick="toggleDescription(this)">Xem thêm</button>
        </td>
        @endif
        <td>{{number_format($product->price, 0, ',', '.')}} VND</td>
        <td>
            <a href="{{route('admin.products.edit', $product->id)}}">Edit</a>
            <a href="{{ route('admin.products.destroy', $product->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<script>
    function toggleDescription(button) {
        var description = button.previousElementSibling;

        if (description.classList.contains('expanded')) {
            description.classList.remove('expanded');
            button.textContent = 'Xem thêm';
        } else {
            description.classList.add('expanded');
            button.textContent = 'Thu gọn';
        }
    }
</script>
@endsection

<style>
    .description-cell {
        position: relative;
    }

    .description-text {
        max-height: 200px;
        /* Giới hạn chiều cao của ô */
        overflow: hidden;
        /* Ẩn phần văn bản tràn */
        text-overflow: ellipsis;
        /* Thêm dấu ... ở cuối văn bản */
        display: -webkit-box;
        /* Để sử dụng với thuộc tính sau */
        -webkit-line-clamp: 4;
        /* Hiển thị tối đa 4 dòng */
        -webkit-box-orient: vertical;
        /* Đảm bảo hiển thị dòng theo chiều dọc */
        white-space: normal;
        /* Cho phép ngắt dòng */
    }

    .description-text.expanded {
        max-height: none;
    }

    .toggle-button {
        background-color: transparent;
        border: none;
        color: blue;
        cursor: pointer;
        padding: 5px;
    }
</style>