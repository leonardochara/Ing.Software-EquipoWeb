@extends('base')
@section('content')
<div class="box" >
  <div class="box-header">
      <h1 ><strong><p style="color:#073889">CONTACTOS</p></strong></h1>
  </div>
            <!-- /.box-header -->
<div class="box-body">
  <a href="{{ route('contacts.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">    ___NUEVO___    </a>

              </a>
      @include('partials.info')
<table id="example1" class="table table-bordered table-striped dataTable">
           <thead>
                <tr role="row">
                  <th width="20px">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" aria-sort="ascending">Nombre </th>
                  
                  <th>Telefono</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
                </thead>
      <tbody>
                
                @foreach($contacts as $contact)
                <tr>
                  <td>{{ $contact ->id }}</td>
                  <td>{{ $contact ->nombre }}</td>
                  <td>{{ $contact ->telefono }}</td>
                  <td>
                    <a href="{{ route('contacts.show',$contact->id)}}" title="Ver" class="btn btn-link">
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('contacts.edit',$contact->id) }}" title="Editar" class="btn btn-link">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                  </td>
                  <td>
                    <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-link" title="Eliminar">
                        <span class="glyphicon glyphicon-remove"></span>
                      </button>
                      
                    </form>
                  </td>
                </tr>
                @endforeach
      </tbody>
        <tfoot>
            <tr>
                <tr>
                  <th width="20px">ID</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
            </tr>
        </tfoot>
    </table>
 {!! $contacts->render() !!}

</div>
</div>

  @endsection