<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-desativa-{{$torcedor->id}}">

	{!! Form::open(['route' => ['torcedores.destroy', $torcedor->id], 'class' => 'form form-search form-ds', 'method' => 'delete']) !!}
		
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title">Desativar torcedor</h4>
				</div>
				<div class="modal-body">
					<p>Deseja realmente desativar o torcedor <b>{{$torcedor->nome}}</b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>

	{!! Form::close() !!}

</div>
