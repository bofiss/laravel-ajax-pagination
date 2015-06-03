@extends('../app')

@section('content')
	<div class="container">
		<div class="content">
			 <h2>Listes des fruits</h2>
			 <ul class="ds-btn">
			 @foreach($products as $product)
			    <li>
			      <a class="btn btn-success btn-lg " href="http://dotstrap.com/">
			       <i class="glyphicon glyphicon-tasks  pull-left"></i><span>{{$product->name}}</span></a> 
			            
			    </li>
			  @endforeach

			 </ul>
			<p>{!! $products->render() !!}</p>
		</div>
		
	</div>

@endsection