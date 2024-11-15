@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')
 <!-- contact -->
 @foreach ($kontak as $item)
     
 <div class="contact mb-5">
     <div class="maps">
       <iframe
       src="{!!$item->maps!!}"
       width="100%"
         height="450"
         style="border: 0"
         allowfullscreen=""
         loading="lazy"
         referrerpolicy="no-referrer-when-downgrade"
       ></iframe>
     </div>
     <div class="container mt-5">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show">
          <strong>Berhasil!</strong>
          <p>{{ $message }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
      @endif
       <div class="row">
         <div class="col md-12">
           <div class="card border-0 shadow shadow-sm">
             <div class="card-body">
               <div class="container">
                 <div class="row">
                   <div class="col-md-4">
                     <h5 class="fw-bolder">Lokasi : {{$item->alamat}}</h5>
                     <h5 class="fw-bolder">Email : {{$item->email}}</h5>
                     <h5 class="fw-bolder">Telephone : {{$item->phone}}</h5>
                     <!-- Tombol Edit -->
                    </div>
                    <a href="{{ route('Kontak.edit', $item->id) }}" class="btn btn-warning m-3"><i><i class="fa fa-edit"></i> Edit</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 @endforeach
<!-- end contact -->
@endsection
