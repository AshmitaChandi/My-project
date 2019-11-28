@extends('layouts.admin.master')



@section('content')


                    <div class="card">
                        <div class="card-header">
                        <h2 style="color: white;">Messages
                       <a href="{{route('admin.message.reply')}}" class="btn btn-primary pull-right cat" >Message Reply</a>
                       </h2>
                        </div>

                        
                        <div class="card-body table-responsive" style="color: white;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>message</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($message as $messages)     
                           <tr> 
                                <td>    
                                {{$messages->id}}
                                </td>
                                <td>Ashmita</td>
                                <td>ashmita@gmail.com</td>
                                <td>{{$messages->message}}</td>
                                <td>    <button style="color: black;" action="{{ route('admin.message.delete', $messages->slug) }}" >    delete</button> </td>
                           </tr>
                            @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                    
@endsection