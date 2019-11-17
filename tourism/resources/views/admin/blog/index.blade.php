@extends('layouts.admin.master')



@section('content')


                    <div class="card">
                        <div class="card-header">
                        <h2>Blog</h2>
                        <a href="{{route('admin.blog.add')}}" class="btn btn-primary pull-right cat" style="margin-left: 797px;">Add Blogs</a>
                        </div>
                        
                        <div class="card-body table-responsive">
                            {!! $blog->render() !!}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($blog as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->description}}</td>
                                        <td>
                                            @if($item->image != NULL)
                                            <img src="{{ asset('uploads/blog_images/'. $item->image) }}" style="height:100px; width: 100px;">
                                            @endif
                                        </td>
                                        <!-- <td>{{ $item->is_active}}</td> -->
                                        
                                        <td>
                                            <a href="{{ route('admin.blog.delete', $item->slug) }}" style="color: black">Delete</a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    <!-- <tr> -->
                                        <!-- <td>2</td> -->
                                        <!-- <td>Madeleine</td> -->
                                        <!-- <td>Hollaway</td> -->
                                        <!-- <td>@hollway</td> -->
                                        <!-- <td>Cheese</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>3</td> -->
                                        <!-- <td>Sebastian</td> -->
                                        <!-- <td>Johnston</td> -->
                                        <!-- <td>@sebastian</td> -->
                                        <!-- <td>Jaycee</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>4</td> -->
                                        <!-- <td>Mitchell</td> -->
                                        <!-- <td>Christin</td> -->
                                        <!-- <td>@mitchell4u</td> -->
                                        <!-- <td>AdskiDeAnus</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>5</td> -->
                                        <!-- <td>Elizabeth</td> -->
                                        <!-- <td>Belkitt</td> -->
                                        <!-- <td>@belkitt</td> -->
                                        <!-- <td>Goat</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>6</td> -->
                                        <!-- <td>Benjamin</td> -->
                                        <!-- <td>Parnell</td> -->
                                        <!-- <td>@wayne234</td> -->
                                        <!-- <td>Pokie</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>7</td> -->
                                        <!-- <td>Katherine</td> -->
                                        <!-- <td>Buckland</td> -->
                                        <!-- <td>@anitabelle</td> -->
                                        <!-- <td>Wokie</td> -->
                                    <!-- </tr> -->
                                    <!-- <tr> -->
                                        <!-- <td>8</td> -->
                                        <!-- <td>Nicholas</td> -->
                                        <!-- <td>Walmart</td> -->
                                        <!-- <td>@mwalmart</td> -->
                                        <!-- <td>Spike</td> -->
                                    <!-- </tr> -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                    


@endsection