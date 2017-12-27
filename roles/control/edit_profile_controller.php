<?php
    require_once "../../data/user_db.php";
    require_once "../../common/timesaver.php";
    $user_info = get_user_data_V2($_SESSION['username']);
    $pp_path = $user_info['pp_path'];
    $registration_date = $user_info['registration_date'];
    $joined= deal_with_day($registration_date);

?>