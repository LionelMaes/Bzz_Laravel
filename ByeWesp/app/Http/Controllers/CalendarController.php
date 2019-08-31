<?php
/**
 * Created by PhpStorm.
 * User: lione
 * Date: 31/08/2019
 * Time: 22:33
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class CalendarController extends Controller
{

    public function createCalendar()
    {
        //look if the date was send with the link
        date_default_timezone_set("Europe/Brussels");
        if ($ym == null) {
            $ym = date('Y-m');
        }

        if (isset($_GET['day'])) {
            $rdvDay = $_GET['day'];
        } else {
            $rdvDay = null;
        }

        $timeStamp = strtotime($ym, '-01');
        if ($timeStamp === false) {
            $timeStamp = time();
        }


        $today = date('Y-m-j', time());
        $html_title = date(' m / Y', $timeStamp);

        $prev = date('Y-m', mktime(0, 0, 0, date('m', $timeStamp) - 1, 1, date('Y', $timeStamp)));
        $next = date('Y-m', mktime(0, 0, 0, date('m', $timeStamp) + 1, 1, date('Y', $timeStamp)));

        $dayCount = date('t', $timeStamp);

//0:sun,1:mon,...
        $str = date('w', mktime(0, 0, 0, date('m', $timeStamp), 1, date('Y', $timeStamp)));

//to start the with monday the calendar
        if ($str == 0) {
            $str = 6;
        } else {
            $str = $str - 1;
        }
//$week =  array();
//empty cell
        $week = "";
        $week .= str_repeat('<td></td>', $str);
        for ($day = 1; $day <= $dayCount; $day++, $str++) {
            $date = $ym . '-' . $day;
            if ($today == $date) {
                $week .= '<td class="today">' . $day;
            } else {
//                $week .= '<td><a href="RendezVous.php?ym=' . $ym . '&day=' . $day . '-' . date('m-Y', $timeStamp) . '">' . $day;
                $week .= '<td><a href="/calendar{' . $ym . '}&{' . $day . '-' . date('m-Y', $timeStamp) . '}">' . $day;
            }
            $week .= "</td>";

            if ($str % 7 == 6 || $day == $dayCount) {
                if ($day == $dayCount) {
                    $week .= str_repeat('<td></td>', 6 - ($str % 7));
                }
                $weeks[] = '<tr>' . $week . '</tr>';

                $week = '';
            }
        }
        return view('calendar', ['weeks' => $weeks, 'prev' => $prev, 'next' => $next, 'html_title' => $html_title, 'rdvDay' => $rdvDay]);
    }
}