@extends('layouts.master')


@section('content')
    <main class="rdv">
        <h1>Prendre rendez vous</h1>
        <div class="calender">
            <h3><a href="?ym=<?php echo $prev; ?>"><</a> <?php echo $html_title ?> <a
                        href="?ym=<?php echo $next; ?>">></a>
            </h3>
            <a id="back2day" href="/calendar?ym=<?php echo date('Y-m') ?>">Retour a aujourd'hui</a>
            <br>
            <table class="table table-boarder">
                <tr>

                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
                <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
                ?>
            </table>
        </div>
        <div class="rdvContainer">
            <?php
            if ($rdvDay != null) {
                //create tha basic for the table
                $rdvTable = '<table class="table">' .
                    '<tr><th>' . $rdvDay . '</th></tr>';
                $hour = 10;
                $min = 30;
                //create cells for the table
                for ($i = 0; $i < 10; $i++) {
                    $rdvTable .= '<tr><td>' . $hour . ':' . $min . '</td></tr>';

                    //change time
                    if ($i % 2 == 0) {
                        $hour++;
                    }
                    if ($min == 30) {
                        $min = "00";
                    } else {
                        $min = 30;
                    }
                }
                $rdvTable .= '</table>';
                echo $rdvTable;
            }
            ?>
        </div>
    </main>
@endsection