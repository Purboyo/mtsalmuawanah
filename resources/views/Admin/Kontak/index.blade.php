@extends('layouts.app')

@section('title', 'Data Kontak')

@section('content')
 <!-- contact -->
 @foreach ($kontak as $item)
     
 <div class="contact mb-5">
     <div class="maps">
       <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.919284342901!2d108.92670111196081!3d-7.583764874897704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6571184d0fc4af%3A0x7d80a15482ab9d89!2sMTS%20Al-Mu&#39;awanah!5e0!3m2!1sid!2sid!4v1730261468195!5m2!1sid!2sid"
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
