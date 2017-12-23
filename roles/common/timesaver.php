<?php

    function deal_with_day($day)
    {
        if($day>=365)
        {
            $year = (int)($day/365);
            return $year==1?$year." year ago":$year." years ago";
        }
        else if($day>=30)
        {
            $month = (int)($day/30);
            return $month==1?$month." month ago":$month." months ago";

        }
        else
        {
            return $day==0?"Today":($day==1?$day." day ago":$day." days ago");
        }
        
    }
?>