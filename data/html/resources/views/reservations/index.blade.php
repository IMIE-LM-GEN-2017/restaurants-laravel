@extends('template.default')



<html>


<h1>Réservation</h1>
<table>
    <thead></thead>
    <tbody>

    <tr>


        <td>
            <span>Nom</span>
            <input type="text" name="nom"/>

        </td>
        <td>
            <span>Prénom</span>
            <input type="text" name="prenom"/>
        </td>
        <td>
            <span>Téléphone</span>
            <input type="text" name="tel"/>
        </td>

        <td>
            <span>Email</span>
            <input type="text" name="email"/>

        </td>
        <td>
            <span>Rue/N°</span>
            <input type="text" name="rue"/>
        </td>
        <td>
            <span>cp</span>
            <input type="text" name="cp"/>
        </td>
        <td>
            <span>ville</span>
            <input type="text" name="ville"/>
        </td>


        <input type="submit" value="Valider"/>


    </tr>

    </tbody>

</table>

</html>