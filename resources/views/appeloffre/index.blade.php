@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
 <head>
  <title>Appels Offres Maroc</title>
 </head>
 <body>
  <br />
  <div class="container box">
    <br />
   <h5 align="left">Vous pouvez filtrer votre recherche</h5>
   <div class="col-md-6 text-right">
    <form action="{{ route('appeloffre.index') }}" method="get" class="form-inline">
      <div class="form-group">
      <input type="text" class="form-control" name="s" placeholder="Rechercher" value="{{ isset($s) ? $s : '' }}" />
     </div>
     <br />
     <br />
     <br />
     <br />
     <div class="form-group">
       <button class="btn btn-success" type="submit"> Rechercher </button>
      </div>
    </form>
   </div>
     <div class="table-responsive">
      <h3 align="center">Liste des Appels d'Offres : <span id="total_records"></span></h3>
      <table class="table table-sm  table-bordered">
       <thead class="thead-light">
        <tr>
          <th> Identifiant Appel Offre </th>
          <th> Reference </th>
          <th> Objet </th>
          <th> Acheteur </th>
          <th> Caution Provisoire </th>
          <th> Type Annonce </th>
          <th> Lieu Execution </th>
          <th> Contact </th>

        </tr>

        @foreach($appeloffres as $row)
        <tr>
          <td>{{$row->Id_Ao}}</td>
          <td>{{$row->Reference}}</td>
          <td>{{$row->Objet}}</td>
          <td>{{$row->Acheteur}}</td>
          <td>{{$row->Caution_Provisoire}}</td>
          <td>{{$row->Type_Annonce}}</td>
          <td>{{$row->Lieu_Execution}}</td>
          <td>{{$row->Contact}}</td>
        </tr>
        @endforeach
       </thead>
       <tbody>
       </tbody>
      </table>
      {{ $appeloffres->appends(array('s' => 's'))->links() }}
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
@endsection
