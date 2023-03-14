


@foreach ($decode_response as $first_array)
@foreach ($first_array as $single_client_value)


	  <a href="client/{{$single_client_value['id']}}">{{$single_client_value['name']}}</a><br>

@endforeach
@endforeach