
@extends('template.default')
@section('title', 'Reservation')
@section('content')
    <html>

    <table>
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

    </html>

@endsection

