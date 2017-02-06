@extends('administration.default')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des locations</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($rents as $rent)
						<tr>
							<td>{!! $rent->id !!}</td>
							<td class="text-primary"><strong>{!! $rent->name !!}</strong></td>
							<td>{!! link_to_route('administration.rents.show', 'Voir', [$rent->id], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('administration.rents.edit', 'Modifier', [$rent->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['administration.rents.destroy', $rent->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette location ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		{!! link_to_route('administration.rents.create', 'Ajouter une location', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection