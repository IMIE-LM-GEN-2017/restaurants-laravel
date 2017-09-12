@extends('template.default')

@section('title', 'Pour les Gourmands')

@section('content')


    <div class="row">


        <div class="restaurant">
            <p>Bienvenue sur notre site "Pour les gourmands", un site de réservation pour ceux qui souhaites trouver un
                restaurant sur Le Mans sans difficultés. Nous mettons également à votre disposition des activités proche
                du restaurant choisi ainsi que les transports pour y accéder. </p>

            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><a class="resto1" href="{{!! route('PlanchaIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/0d/e6/fa/4f/photo1jpg.jpg"
                                    style="width:200px; height:200px; margin-left:250px; display: block;" alt="Laplanchagourmande"></a>
                    </td>
                    <td><a href="{{!! route('NezIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/09/6f/f2/ea/photo0jpg.jpg"
                                    style="width:200px; height:200px; margin-left:2.5px; display: block;" alt="Lenezrouge"
                                    href="Lenezrouge.html"></a>
                    </td>
                    <td><a href="{{!! route('JauresIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/09/b3/3a/dc/le-tablier-de-jaures.jpg"
                                    alt="LetablierdeJaures" style="width:200px; height:200px;display: block;"></a></td>
                </tr>
                <tr>
                    <td><a href="{{!! route('VPorteIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/08/c4/4c/d2/la-vieille-porte.jpg"
                                    alt="Lavieilleporte" style="width:200px; height:200px;margin-left:250px;display: block;"></a></td>
                    <td><a href="{{!! route('GrenierIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/08/fa/c0/e6/le-grenier-a-sel.jpg"
                                    alt="Le grenier à sel" style="width:200px; height:200px;  margin-left:2.5px;display: block;"></a></td>
                    <td><a href="{{!! route('ParvisIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/0f/d3/07/35/mi-cuit-choccolat.jpg"
                                    alt="Le parvis st hilaire" style="width:200px; height:200px;display: block;"></a></td>

                </tr>
                <tr>
                    <td><a href="{{!! route('FontaineIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/0a/59/e7/7d/la-fontaine-des-saveurs.jpg"
                                    alt="La fontaine des saveurs" style="width:200px; height:200px;margin-left:250px;display: block;">
                        </a>
                    </td>
                    <td><a href="{{!! route('BagatelleIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/0f/42/6a/d1/photo2jpg.jpg"
                                    alt="Auberge de bagatelle" style="width:200px; height:200px;  margin-left:2.5px;display: block;"></a>
                    </td>
                    <td><a href="{{!! route('BelliIndex') !!}}"><IMG
                                    SRC="https://media-cdn.tripadvisor.com/media/photo-s/0e/31/84/e4/photo2jpg.jpg"
                                    alt="Le Bellifontain" style="width:200px; height:200px;display: block;  "></a></td>
                </tr>
            </table>


        </div>

    </div>
@endsection