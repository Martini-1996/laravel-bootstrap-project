@if(Request::is('admin'))
<div class="modal fade "  id="myModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Messages</h4>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
@if(count($messages)>0)
@foreach($messages as $message)
<ul class="list-group">
	
<li class="list-group-item list-group-item-info"><span class="text-dark">Name: </span> <span class="text-dark-50">{{$message->Name}}</span></li>

<li class="list-group-item list-group-item-info"><span class="text-dark"> Phone Number: </span>
	<span class="text-dark-50">@if($message->Phone)
	{{$message->Phone}}
	@else
	No Phone-Number
	@endif</span>
</li>
<li class="list-group-item list-group-item-info"><span class="text-dark">Email: </span><span class="text-dark-50">{{$message->Email}}</span> </li>
<li class="list-group-item list-group-item-info">
<span class="text-dark">Message: </span><span class="text-dark-50">{{$message->Message}}</span>	</li>
</ul>
<div class="dropdown-divider"></div>
@endforeach
@endif
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" 
				data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endif

<!-- __________________________________________________________________________________________________________________________________________________________________________________________________  -->


<div class="modal fade "  id="image">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Rooms Images</h4>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12 d-flex 
            	justify-content-center">
             <img src="3.jpg" class="img-fluid img-thumbnail">
                   </div>
         </div>
             <div class="dropdown-divider"></div>
            <div class="row">
            	<div class="col-sm-12 d-flex 
            	justify-content-center">
             <img src="1.jpg" class="img-fluid img-thumbnail">
                </div>
         </div>

			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" 
				data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>