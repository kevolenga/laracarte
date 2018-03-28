@if(session()->has('message'))
    <div class="alert alert-dismissible alert-{{ session()->get('type') }}" 
         style="border-radius:0px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="text-center"> {{ session()->get('message') }} </h4>      
    </div>
@endif