@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Books</div>
                <div class="panel-body">
                
                <a href="{{ url('book/create') }}">
                    <button class="btn btn-primary">
                        <i class="fa fa-plus"> </i> Create new book
                    </button>
                </a>

                    <table class="table">
                    	<thead>
                    		<tr>
                    			<th>Title</th>
                    			<th>Author</th>
                    			<th>Description</th>
                                <th>Option</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@forelse($books as $book)
                    			<tr>
                    				<td>{{ $book->title }}</td>
                    				<td>{{ $book->author }}</td>
                    				<td>{{ $book->description }}</td>
                                    <td>
                                        <a href="{{ url('/book/'.$book->id.'/edit') }}"> Edit <a>
                                        <form action="{{ url('/book/'.$book->id) }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button>Delete</button>
                                        </form>    
                                    </td>
                    			</tr>
                    		@empty
                    			<tr>
                    				<td colspan="3">
                    					No data
                    				</td>
                    			</tr>
                    		@endforelse
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection