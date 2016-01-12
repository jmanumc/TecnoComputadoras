<td class="text-center">
	<a href="{{ route('admin.'. $controller .'.edit', $data) }}" class="btn btn-xs btn-warning" title="Editar">
		<i class="fa fa-edit"></i>
	</a>
</td>

<td class="text-center">
	{!! Form::open(array(
		'route'  => array('admin.'. $controller .'.destroy', $data), 
		'method' => 'DELETE',
		'class'  => 'form-delete',
	)) !!}
	
		{!! Form::button('<i class="fa fa-trash-o"></i>', array(
			'type'    => 'submit',
			'class'   => 'btn btn-xs btn-danger', 
		)) !!}
		
	{!! Form::close() !!}
</td>