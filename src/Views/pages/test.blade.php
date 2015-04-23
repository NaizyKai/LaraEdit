@extends('laraedit::master')

@section('page')
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="editor">
	    	<div id="laraedit">
			    &lt;?php
					public function test() {
				    	return 'test';
					}
			</div>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="terminal">...</div>
  	</div>
@stop