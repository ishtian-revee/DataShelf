<?php

    function deal_with_the_day($day)
    {
        if($day>=365)
        {
            $year = abs($day/30);
            return $year==1?$year." year ago":$year." years ago";
        }
        if($day>30)
        {
            $month = abs($day/30);
            return $month==1?$month." month ago":$year." months ago";

        }
    }
?>