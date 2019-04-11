{{ Form::open() }}

{{ Form::label('consultores', 'Consultores') }}
{{ Form::select('consultores',$Consultores, null, array('multiple'=>'multiple','name'=>'consultores[]')) }}

<button></button>
<button></button>

{{ Form::label('consultores_selected', 'Consultores') }}
{{ Form::select('consultores_selected', [], null, array('multiple'=>'multiple','name'=>'consultores_selected[]')) }}


{{ Form::close() }}