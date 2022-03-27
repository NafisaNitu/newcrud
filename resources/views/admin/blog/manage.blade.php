@extends('admin.master')

@section('title')
    Add Blog
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Manage Blogs</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Blog Title</th>
                                    <th>Blog Image</th>
                                    <th>Blog Content</th>
                                    <th>Status</th>
                                    <th>Hit Count</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! $blog->blog_title !!}</td>
                                        <td>
                                            <img src="{{ asset($blog->blog_image) }}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{!! $blog->blog_content !!}</td>
                                        <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>{{ $blog->hit_count == 1 ? 'Favourite' : 'Unfavourite' }}</td>
                                        <td>
                                            <a href="{{ route('blog-status', ['id' => $blog->id]) }}" class="btn btn-{{ $blog->status == 1 ? 'primary' : 'secondary' }} btn-sm">status</a>
                                            <a href="{{ route('edit-blog',['id'=>$blog->id]) }}" class="btn btn-success btn-sm">edit</a>
                                            <a href="{{ route('delete-blog',['id'=>$blog->id]) }}" class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
