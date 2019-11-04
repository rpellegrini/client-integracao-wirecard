@extends('core.base')

@section('content')

<div class="col-12 pt-4">
       <div class="box-content">
         <div>
         <h2 style="display: inline-block">Clientes</h2>
          <span class="btn btn-primary btn-rounded waves-effect waves-light btn-create" style="float:right">
               <a class="btn btn-primary" href="{{ route('customer.create') }}" role="button">
                  Novo Cliente
               </a>
         </div>

         <br>
         @if (session('success'))
             <div class="alert alert-success" style="padding-top: 15px;">
                 {{ session('success') }}
             </div>
          @endif
         <div class="table-responsive">
           <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>E-mail</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
               <tr>
               	@forelse ($customers as $customer)
                 <td>{{$customer->id }}</td>
                 <td>{{$customer->fullname}}</td>
                 <td>{{$customer->email }}</td>
                 <td>
                   <button type="button" class="btn btn-success btn-xs waves-effect waves-light"
                   onclick="javascript:window.location.href ='{{ route('order.create', ['id'=> $customer->id] ) }}';">Criar Pedido
                 </button>&nbsp;
                 </td>
                 </tr>
               @empty
                    <tr><td colspan="6">Nenhum cliente !</td></tr>
               @endforelse
             </tbody>
           </table>
         </div>

       </div>
       <!-- /.box-content -->
     </div>

@endsection
