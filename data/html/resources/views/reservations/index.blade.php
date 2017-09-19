
@extends('template.default')
@section('title', 'Reservation')
@section('content')
    <html>

    <form method="get" action="{{ route('ResSave') }}">
    {{ csrf_field() }}

    {!! Form::label('date') !!}
    {!! Form::date('date') !!}

    {!! Form::label('nb_personnes') !!}
    {!! Form::text('nb_personnes') !!}

        {!! Form::label('restaurant_id') !!}
        {!! Form::text('restaurant_id') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}

    </form>















    {{-- <table>
         <tbody>

         <td>
             <span>Nom</span>
             <input type="text" name="nom"/>

         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>Prénom</span>
             <input type="text" name="prenom"/>
         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>Téléphone</span>
             <input type="text" name="tel"/>
         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>Email</span>
             <input type="text" name="email"/>

         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>Rue/N°</span>
             <input type="text" name="rue"/>
         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>cp</span>
             <input type="text" name="cp"/>
         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <span>ville</span>
             <input type="text" name="ville"/>
         </td>
         </tbody>
     </table>
     </br>
     <table>
         <tbody>
         <td>
             <input type="submit" value="Valider"/>

         </td>

         </tbody>

     </table>
 --}}
    </html>

@endsection

