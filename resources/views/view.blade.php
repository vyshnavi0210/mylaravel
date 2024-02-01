@php echo "This is view page" @endphp

@if(!empty($data))
	@foreach($data as $airline)
		{{$airline->flight_no}}
		{{$airline->airline}}
	@endforeach
@else
	@php echo "No results" @endphp
@endif