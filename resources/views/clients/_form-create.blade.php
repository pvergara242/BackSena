@include('partials.sessions_status')

<div class="row">
   <div class="col-lg-12">
      <form action="" method="POST" enctype="multipart/form-data">

         @csrf
      
         <div class="col-md-6">
            <input class="form-control mt-4" 
               type="number" 
               name="document" 
               value="{{ old('document') }}"
               placeholder="Documento"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
         </div>
         <div class="col-md-6">
            <input class="form-control mt-4" 
               type="number" 
               name="document" 
               value="{{ old('document') }}"
               placeholder="Documento"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
         </div>
         <div class="col-md-6">
            <input class="form-control mt-4" 
               type="number" 
               name="document" 
               value="{{ old('document') }}"
               placeholder="Documento"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
         </div>
         <div class="col-md-6">
            <input class="form-control mt-4" 
               type="number" 
               name="document" 
               value="{{ old('document') }}"
               placeholder="Documento"
            >
            <p class="text-danger text-center "><strong>{{ $errors->first('document') }}</strong></p>
         </div>
      
      </form>
   </div>
</div>