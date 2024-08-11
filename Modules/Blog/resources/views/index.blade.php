@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('blog.name') !!}</p>

    @hasrole('admin')
    <table>
        <th>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
        </th>
        <tbody>
            @foreach ($blogs as $blog )
            <tr> 
             <td>   {{$blog->title}}</td>
             <td>   {{$blog->content}}</td>
             <td>  
                @php
                $userId = $blog->user_id;
                $user = DB::connection('mysql')->table('users')->find($userId);
                echo $user->name;
            @endphp
             </td>
             </tr>
                
            @endforeach
        </tbody>
    </table>

    @endhasrole
@endsection
