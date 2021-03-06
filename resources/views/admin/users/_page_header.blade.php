<div class="page-breadcrumb">
	<div class="row">
		<div class="col-6 align-self-center">
			<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">{{ $title }}</h4>
		</div>
		<div class="col-6 text-right">
			@if(Route::current()->getActionMethod() == 'index')
				<a href="{{ route('admin.users.create') }}" class="btn btn-light btn-sm px-3"><i class="fas fa-plus"></i> Novo</a>
			@else
				@role('admin')
					<a href="{{ route('admin.users.index') }}"><i class="fas fa-angle-double-left"></i> Voltar</a>
				@endrole
			@endif
		</div>
	</div>
</div>