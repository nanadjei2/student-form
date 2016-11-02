<!-- These notifications will be called based on the name of the sessions to display on the respected pages  -->
@if(Session::has('success'))

<div id="alert-success" style="border-radius: 0px; border-left-width: 7px; border-left-color: #3CB871 ;" class="alert alert-success alert-dismissible" role="alert">
<button id="close" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><i class="fa fa-check-circle fa-lg fa-fw"></i>Great </strong> {{ Session::get('success') }}
</div>

@elseif(Session::has('error'))

<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Oops!</strong> {{ Session::get('error') }}
</div>

@endif

