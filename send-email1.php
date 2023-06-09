<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message1 = $_POST["message"];
$phone = $_POST["phone"];

$work0 = $_POST["work0"];
$working0 = floatval($_POST["working0"]);

$work1 = $_POST["work1"];
$working1 = floatval($_POST["working1"]);

$work2 = $_POST["work2"];
$working2 = floatval($_POST["working2"]);

$work3 = $_POST["work3"];
$working3 = floatval($_POST["working3"]);

$work4 = $_POST["work4"];
$working4 = floatval($_POST["working4"]);

// $work5 = $_POST["work5"];
// $working5 = floatval($_POST["working5"]);

// $work7 = $_POST["work7"];
// $working7 = floatval($_POST["working7"]);

// $work8 = $_POST["work8"];
// $working8 = floatval($_POST["working8"]);


#work s priceselction calculation
$callout = 110.0;
$work0amount = (float)$working0;
$work0price = 0.0;

    $work1amount = (float)$working1;
    $work1price = 0.0;

    $work2amount = (float)$working2;
    $work2price = 0.0;

    $work3amount = (float)$working3;
    $work3price = 0.0;

    $work4amount = (float)$working4;
    $work4price = 0.0;

    // $work5amount = (float)$working5;
    // $work5price = 0.0;

    // $work6amount = (float)$working6;
    // $work6price = 0.0;

    // $work7amount = (float)$working7;
    // $work7price = 0.0;

    #php work 1 fast code
    if ($work0 == 'Bathroom Exhaust Fan - Supply 200mm round, separate switches new')
    { $work0price = $work0amount * 306.41;}

    if ($work0 == 'Bathroom Exhaust Fan - Replace Replace Labour only')
    { $work0price = $work0amount * 102.14;}

    if ($work0 == 'Bathroom Exhaust Fan - Replace Replace with 200mm round exhaust')
    { $work0price = $work0amount * 184.82;}

    if ($work0 == 'Replace like for like tastic Labour only')
    { $work0price = $work0amount * 136.18;}

    if ($work0 == 'New tastic Labour only (or replace light/exhaust)')
    { $work0price = $work0amount * 291.82;}

    if ($work0 == 'GPO - New, Supply and Install - Internal')
    { $work0price = $work0amount * 204.27;}

    if ($work0 == 'GPO - 4 Gang New, Supply and Install - Internal')
    { $work0price = $work0amount * 243.18;}

    if ($work0 == 'GPO with conduit - New, Supply and Install - Using Conduit')
    { $work0price = $work0amount * 233.45;}

    if ($work0 == 'Replace GPO/Switch (1-3 gang), Supply and replace - Clipsal 2000 Series')
    { $work0price = $work0amount * 68.09;}

    if ($work0 == 'Replace 2 gang with 4 gang GPO, Supply and Replace')
    { $work0price = $work0amount * 102.14;}

    if ($work0 == 'Weatherproof GPO - New, Supply and Install')
    { $work0price = $work0amount * 325.86;}

    if ($work0 == 'Weatherproof GPO- Replace, Supply and Replace')
    { $work0price = $work0amount * 145.91;}

    if ($work0 == '4 Gang switch - Replace, Supply and Replace - Clipsal 2000 series')
    { $work0price = $work0amount * 102.14;}

    if ($work0 == 'Cover plate - Replace, Supply and Replace')
    { $work0price = $work0amount * 53.50;}

    if ($work0 == 'OS GPO/Switch - Replace, Replace owner supplied GPO')
    { $work0price = $work0amount * 53.50;}

    if ($work0 == 'Data point - New, Supply and Install')
    { $work0price = $work0amount * 350.18;}

    if ($work0 == 'Dimmer switch, Supply and Install')
    { $work0price = $work0amount * 92.41;}

    if ($work0 == 'TV Point, Supply and Install')
    { $work0price = $work0amount * 321.00;}

    if ($work0 == 'Replace GPO with double USB, Supply and Replace - Order on tradezone')
    { $work0price = $work0amount * 184.82;}

    if ($work0 == 'Replace GPO with single USB, Supply and Replace - Order on tradezone')
    { $work0price = $work0amount * 175.09;}

    if ($work0 == 'Ceiling Fan - New install, Labour with ceiling access above')
    { $work0price = $work0amount * 257.77;}

    if ($work0 == 'Ceiling Fan - Replace existing, Labour')
    { $work0price = $work0amount * 160.50;}

    if ($work0 == 'Ceiling Fan – Difficult Install, Labour with no ceiling access')
    { $work0price = $work0amount * 374.50;}

    if ($work0 == 'AC Ceiling Fan with light, Supply Brilliant Tempest Fan')
    { $work0price = $work0amount * 252.91;}

    if ($work0 == 'AC Ceiling Fan without light, Supply Brilliant Tempest Fan')
    { $work0price = $work0amount * 223.73;}

    if ($work0 == 'DC Ceiling Fan without light, Supply Brilliant Amari Fan')
    { $work0price = $work0amount * 398.82;}

    if ($work0 == 'DC Ceiling Fan with light, Supply Brilliant Amari fan')
    { $work0price = $work0amount * 428.00;}

    if ($work0 == 'Fan Remote, Brilliant Wireless remote')
    { $work0price = $work0amount * 82.68;}

    if ($work0 == 'Wall mounted fan, Supplied Ventair Fan + new GPO')
    { $work0price = $work0amount * 437.73;}

    if ($work0 == 'Wall mounted fan, Owner supplied - With new GPO')
    { $work0price = $work0amount * 277.23;}

    if ($work0 == 'Replace Fan Controller, Brilliant Fan Controller')
    { $work0price = $work0amount * 48.64;}

    if ($work0 == 'Extra cable for light in fan, Extra cable for light in fan')
    { $work0price = $work0amount * 141.05;}

    if ($work0 == 'Light - New Install OS, Pendant or similar')
    { $work0price = $work0amount * 184.82;}

    if ($work0 == 'Light – Replace Owner Supplied, Using existing wiring')
    { $work0price = $work0amount * 111.86;}

    if ($work0 == 'Downlight - New, Supply and Install Energy Saver LED')
    { $work0price = $work0amount * 150.77;}

    if ($work0 == 'Downlight - New OS, Install OS Downlight')
    { $work0price = $work0amount * 136.18;}

    if ($work0 == 'Downlight – Replace existing, Supply and Replace Energy Saver LED')
    { $work0price = $work0amount * 68.09;}

    if ($work0 == 'Downlight – Replace existing, Replace OS Downlight')
    { $work0price = $work0amount * 48.64;}

    if ($work0 == 'Oyster light, Supply $65, Replace $115')
    { $work0price = $work0amount * 63.23;}

    if ($work0 == 'New Sensor Light, Supply and Install twin sensor')
    { $work0price = $work0amount * 389.09;}

    if ($work0 == 'New Sensor Light, Owner Supplied twin sensor')
    { $work0price = $work0amount * 252.91;}

    if ($work0 == 'Replace Sensor Light OS, Replace OS Sensor light')
    { $work0price = $work0amount * 145.91;}

    if ($work0 == 'Replace Sensor Light OS, Replace OS Sensor light')
    { $work0price = $work0amount * 145.91;}

    if ($work0 == 'Replace Emergency Lighting, Supply and Replace')
    { $work0price = $work0amount * 291.82;}

    if ($work0 == 'Replace Exit Lighting, Supply and Replace')
    { $work0price = $work0amount * 325.86;}

    if ($work0 == 'New light switch, Supply and Install')
    { $work0price = $work0amount * 204.27;}

    if ($work0 == 'Supply Batten, Supply LED Batten light')
    { $work0price = $work0amount * 87.55;}

    if ($work0 == 'Move existing light switch, Supply and Replace')
    { $work0price = $work0amount * 165.36;}

    if ($work0 == 'Painting home, Remove & reattach pole fuse – 2 days')
    { $work0price = $work0amount * 336.36;}

    if ($work0 == '10-point Safety check, Includes Callout Fee')
    { $work0price = $work0amount * 350.18;}

    if ($work0 == 'RCBO, New Install')
    { $work0price = $work0amount * 194.55;}

    if ($work0 == 'RCBO Replacement, Replacement')
    { $work0price = $work0amount * 136.18;}

    if ($work0 == 'Ripple Filter, Goes behind each switch')
    { $work0price = $work0amount * 330.73;}

    if ($work0 == 'Hot water reconnection, Simple reconnection')
    { $work0price = $work0amount * 194.55;}

    if ($work0 == 'TV Mount, Us to supply mount')
    { $work0price = $work0amount * 257.77;}

    if ($work0 == 'TV Mount OS, Mount OS TV')
    { $work0price = $work0amount * 165.36;}

    if ($work0 == 'Switchboard Upgrade, Just the switchboard')
    { $work0price = $work0amount * 1352.09;}

    if ($work0 == 'Switchboard Upgrade, Switchboard and meter panel upgrade')
    { $work0price = $work0amount * 2227.55;}

    if ($work0 == 'New circuit')
    { $work0price = $work0amount * 350.18;}

    if ($work0 == 'Test and Tag they bring it to us, 1 single tag')
    { $work0price = $work0amount * 9.73;}

    if ($work0 == 'Test and Tag We go out, 1 single tag')
    { $work0price = $work0amount * 8.56;}

    if ($work0 == 'Replace 10A Plug, Supply and replace 10A Plug')
    { $work0price = $work0amount * 29.18;}

    if ($work0 == 'New switch wire')
    { $work0price = $work0amount * 126.45;}

    if ($work0 == 'New Hardwired Smoke Alarm, Supply and Install (Clipsal)')
    { $work0price = $work0amount * 150.77;}

    if ($work0 == 'New Wireless Smoke Alarms, Supply and Install (Clipsal)')
    { $work0price = $work0amount * 179.95;}

    if ($work0 == 'Wireless Base, Supply and Install (Clipsal)')
    { $work0price = $work0amount * 102.14;}

    if ($work0 == 'Replace Hardwired Alarm, Supply and Replace (Clipsal)')
    { $work0price = $work0amount * 102.14;}

    if ($work0 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber')
    { $work0price = $work0amount * 1857.91;}

    if ($work0 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber')
    { $work0price = $work0amount * 2091.36;}

    if ($work0 == 'Install 5kw Mitsubishi Electric, Back to back with new power circuit')
    { $work0price = $work0amount * 2811.18;}

    if ($work0 == 'Install 7kw Mitsubishi Electric, Back to back with new power circuit')
    { $work0price = $work0amount * 3297.55;}

    if ($work0 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
    { $work0price = $work0amount * 1556.36;}

    if ($work0 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
    { $work0price = $work0amount * 1789.81;}

    if ($work0 == 'Install 5kw Mitsubishi Electric, Existing power circuit sufficient')
    { $work0price = $work0amount * 2509.63;}

    if ($work0 == 'Install 7kw Mitsubishi Electric, Existing power circuit sufficient')
    { $work0price = $work0amount * 2996;}

    if ($work0 == 'Extra ducting/piping')
    { $work0price = $work0amount * 58.36;}

    if ($work0 == 'Decommission/remove old AC')
    { $work0price = $work0amount * 131.32;}

    if ($work0 == 'Install AC - Owner Supplied - Back to back 2.5 and 3.5kw')
    { $work0price = $work0amount * 943.55;}

    if ($work0 == 'Install AC - Owner Supplied - Back to back – 5kw')
    { $work0price = $work0amount * 1123.50;}

    if ($work0 == 'Install AC - Owner Supplied - Back to back – 7kw and above')
    { $work0price = $work0amount * 1352.09;}

    if ($work0 == 'Aircon Brick Property Fee, Per Unit')
    { $work0price = $work0amount * 77.82;}

    if ($work0 == 'AC Bracket, Per Unit')
    { $work0price = $work0amount * 136.18;}

    if ($work0 == 'AC Bracket over head height, Per Unit')
    { $work0price = $work0amount * 243.18;}

if ($work1 == 'Bathroom Exhaust Fan - Supply 200mm round, separate switches new')
{ $work1price = $work1amount * 306.41;}

if ($work1 == 'Bathroom Exhaust Fan - Replace Replace Labour only')
{ $work1price = $work1amount * 102.14;}

if ($work1 == 'Bathroom Exhaust Fan - Replace Replace with 200mm round exhaust')
{ $work1price = $work1amount * 184.82;}

if ($work1 == 'Replace like for like tastic Labour only')
{ $work1price = $work1amount * 136.18;}

if ($work1 == 'New tastic Labour only (or replace light/exhaust)')
{ $work1price = $work1amount * 291.82;}

if ($work1 == 'GPO - New, Supply and Install - Internal')
{ $work1price = $work1amount * 204.27;}

if ($work1 == 'GPO - 4 Gang New, Supply and Install - Internal')
{ $work1price = $work1amount * 243.18;}

if ($work1 == 'GPO with conduit - New, Supply and Install - Using Conduit')
{ $work1price = $work1amount * 233.45;}

if ($work1 == 'Replace GPO/Switch (1-3 gang), Supply and replace - Clipsal 2000 Series')
{ $work1price = $work1amount * 68.09;}

if ($work1 == 'Replace 2 gang with 4 gang GPO, Supply and Replace')
{ $work1price = $work1amount * 102.14;}

if ($work1 == 'Weatherproof GPO - New, Supply and Install')
{ $work1price = $work1amount * 325.86;}

if ($work1 == 'Weatherproof GPO- Replace, Supply and Replace')
{ $work1price = $work1amount * 145.91;}

if ($work1 == '4 Gang switch - Replace, Supply and Replace - Clipsal 2000 series')
{ $work1price = $work1amount * 102.14;}

if ($work1 == 'Cover plate - Replace, Supply and Replace')
{ $work1price = $work1amount * 53.50;}

if ($work1 == 'OS GPO/Switch - Replace, Replace owner supplied GPO')
{ $work1price = $work1amount * 53.50;}

if ($work1 == 'Data point - New, Supply and Install')
{ $work1price = $work1amount * 350.18;}

if ($work1 == 'Dimmer switch, Supply and Install')
{ $work1price = $work1amount * 92.41;}

if ($work1 == 'TV Point, Supply and Install')
{ $work1price = $work1amount * 321.00;}

if ($work1 == 'Replace GPO with double USB, Supply and Replace - Order on tradezone')
{ $work1price = $work1amount * 184.82;}

if ($work1 == 'Replace GPO with single USB, Supply and Replace - Order on tradezone')
{ $work1price = $work1amount * 175.09;}

if ($work1 == 'Ceiling Fan - New install, Labour with ceiling access above')
{ $work1price = $work1amount * 257.77;}

if ($work1 == 'Ceiling Fan - Replace existing, Labour')
{ $work1price = $work1amount * 160.50;}

if ($work1 == 'Ceiling Fan – Difficult Install, Labour with no ceiling access')
{ $work1price = $work1amount * 374.50;}

if ($work1 == 'AC Ceiling Fan with light, Supply Brilliant Tempest Fan')
{ $work1price = $work1amount * 252.91;}

if ($work1 == 'AC Ceiling Fan without light, Supply Brilliant Tempest Fan')
{ $work1price = $work1amount * 223.73;}

if ($work1 == 'DC Ceiling Fan without light, Supply Brilliant Amari Fan')
{ $work1price = $work1amount * 398.82;}

if ($work1 == 'DC Ceiling Fan with light, Supply Brilliant Amari fan')
{ $work1price = $work1amount * 428.00;}

if ($work1 == 'Fan Remote, Brilliant Wireless remote')
{ $work1price = $work1amount * 82.68;}

if ($work1 == 'Wall mounted fan, Supplied Ventair Fan + new GPO')
{ $work1price = $work1amount * 437.73;}

if ($work1 == 'Wall mounted fan, Owner supplied - With new GPO')
{ $work1price = $work1amount * 277.23;}

if ($work1 == 'Replace Fan Controller, Brilliant Fan Controller')
{ $work1price = $work1amount * 48.64;}

if ($work1 == 'Extra cable for light in fan, Extra cable for light in fan')
{ $work1price = $work1amount * 141.05;}

if ($work1 == 'Light - New Install OS, Pendant or similar')
{ $work1price = $work1amount * 184.82;}

if ($work1 == 'Light – Replace Owner Supplied, Using existing wiring')
{ $work1price = $work1amount * 111.86;}

if ($work1 == 'Downlight - New, Supply and Install Energy Saver LED')
{ $work1price = $work1amount * 150.77;}

if ($work1 == 'Downlight - New OS, Install OS Downlight')
{ $work1price = $work1amount * 136.18;}

if ($work1 == 'Downlight – Replace existing, Supply and Replace Energy Saver LED')
{ $work1price = $work1amount * 68.09;}

if ($work1 == 'Downlight – Replace existing, Replace OS Downlight')
{ $work1price = $work1amount * 48.64;}

if ($work1 == 'Oyster light, Supply $65, Replace $115')
{ $work1price = $work1amount * 63.23;}

if ($work1 == 'New Sensor Light, Supply and Install twin sensor')
{ $work1price = $work1amount * 389.09;}

if ($work1 == 'New Sensor Light, Owner Supplied twin sensor')
{ $work1price = $work1amount * 252.91;}

if ($work1 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work1price = $work1amount * 145.91;}

if ($work1 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work1price = $work1amount * 145.91;}

if ($work1 == 'Replace Emergency Lighting, Supply and Replace')
{ $work1price = $work1amount * 291.82;}

if ($work1 == 'Replace Exit Lighting, Supply and Replace')
{ $work1price = $work1amount * 325.86;}

if ($work1 == 'New light switch, Supply and Install')
{ $work1price = $work1amount * 204.27;}

if ($work1 == 'Supply Batten, Supply LED Batten light')
{ $work1price = $work1amount * 87.55;}

if ($work1 == 'Move existing light switch, Supply and Replace')
{ $work1price = $work1amount * 165.36;}

if ($work1 == 'Painting home, Remove & reattach pole fuse – 2 days')
{ $work1price = $work1amount * 336.36;}

if ($work1 == '10-point Safety check, Includes Callout Fee')
{ $work1price = $work1amount * 350.18;}

if ($work1 == 'RCBO, New Install')
{ $work1price = $work1amount * 194.55;}

if ($work1 == 'RCBO Replacement, Replacement')
{ $work1price = $work1amount * 136.18;}

if ($work1 == 'Ripple Filter, Goes behind each switch')
{ $work1price = $work1amount * 330.73;}

if ($work1 == 'Hot water reconnection, Simple reconnection')
{ $work1price = $work1amount * 194.55;}

if ($work1 == 'TV Mount, Us to supply mount')
{ $work1price = $work1amount * 257.77;}

if ($work1 == 'TV Mount OS, Mount OS TV')
{ $work1price = $work1amount * 165.36;}

if ($work1 == 'Switchboard Upgrade, Just the switchboard')
{ $work1price = $work1amount * 1352.09;}

if ($work1 == 'Switchboard Upgrade, Switchboard and meter panel upgrade')
{ $work1price = $work1amount * 2227.55;}

if ($work1 == 'New circuit')
{ $work1price = $work1amount * 350.18;}

if ($work1 == 'Test and Tag they bring it to us, 1 single tag')
{ $work1price = $work1amount * 9.73;}

if ($work1 == 'Test and Tag We go out, 1 single tag')
{ $work1price = $work1amount * 8.56;}

if ($work1 == 'Replace 10A Plug, Supply and replace 10A Plug')
{ $work1price = $work1amount * 29.18;}

if ($work1 == 'New switch wire')
{ $work1price = $work1amount * 126.45;}

if ($work1 == 'New Hardwired Smoke Alarm, Supply and Install (Clipsal)')
{ $work1price = $work1amount * 150.77;}

if ($work1 == 'New Wireless Smoke Alarms, Supply and Install (Clipsal)')
{ $work1price = $work1amount * 179.95;}

if ($work1 == 'Wireless Base, Supply and Install (Clipsal)')
{ $work1price = $work1amount * 102.14;}

if ($work1 == 'Replace Hardwired Alarm, Supply and Replace (Clipsal)')
{ $work1price = $work1amount * 102.14;}

if ($work1 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber')
{ $work1price = $work1amount * 1857.91;}

if ($work1 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber')
{ $work1price = $work1amount * 2091.36;}

if ($work1 == 'Install 5kw Mitsubishi Electric, Back to back with new power circuit')
{ $work1price = $work1amount * 2811.18;}

if ($work1 == 'Install 7kw Mitsubishi Electric, Back to back with new power circuit')
{ $work1price = $work1amount * 3297.55;}

if ($work1 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work1price = $work1amount * 1556.36;}

if ($work1 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work1price = $work1amount * 1789.81;}

if ($work1 == 'Install 5kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work1price = $work1amount * 2509.63;}

if ($work1 == 'Install 7kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work1price = $work1amount * 2996;}

if ($work1 == 'Extra ducting/piping')
{ $work1price = $work1amount * 58.36;}

if ($work1 == 'Decommission/remove old AC')
{ $work1price = $work1amount * 131.32;}

if ($work1 == 'Install AC - Owner Supplied - Back to back 2.5 and 3.5kw')
{ $work1price = $work1amount * 943.55;}

if ($work1 == 'Install AC - Owner Supplied - Back to back – 5kw')
{ $work1price = $work1amount * 1123.50;}

if ($work1 == 'Install AC - Owner Supplied - Back to back – 7kw and above')
{ $work1price = $work1amount * 1352.09;}

if ($work1 == 'Aircon Brick Property Fee, Per Unit')
{ $work1price = $work1amount * 77.82;}

if ($work1 == 'AC Bracket, Per Unit')
{ $work1price = $work1amount * 136.18;}

if ($work1 == 'AC Bracket over head height, Per Unit')
{ $work1price = $work1amount * 243.18;}

if ($work2 == 'Bathroom Exhaust Fan - Supply 200mm round, separate switches new')
{ $work2price = $work2amount * 306.41;}

if ($work2 == 'Bathroom Exhaust Fan - Replace Replace Labour only')
{ $work2price = $work2amount * 102.14;}

if ($work2 == 'Bathroom Exhaust Fan - Replace Replace with 200mm round exhaust')
{ $work2price = $work2amount * 184.82;}

if ($work2 == 'Replace like for like tastic Labour only')
{ $work2price = $work2amount * 136.18;}

if ($work2 == 'New tastic Labour only (or replace light/exhaust)')
{ $work2price = $work2amount * 291.82;}

if ($work2 == 'GPO - New, Supply and Install - Internal')
{ $work2price = $work2amount * 204.27;}

if ($work2 == 'GPO - 4 Gang New, Supply and Install - Internal')
{ $work2price = $work2amount * 243.18;}

if ($work2 == 'GPO with conduit - New, Supply and Install - Using Conduit')
{ $work2price = $work2amount * 233.45;}

if ($work2 == 'Replace GPO/Switch (1-3 gang), Supply and replace - Clipsal 2000 Series')
{ $work2price = $work2amount * 68.09;}

if ($work2 == 'Replace 2 gang with 4 gang GPO, Supply and Replace')
{ $work2price = $work2amount * 102.14;}

if ($work2 == 'Weatherproof GPO - New, Supply and Install')
{ $work2price = $work2amount * 325.86;}

if ($work2 == 'Weatherproof GPO- Replace, Supply and Replace')
{ $work2price = $work2amount * 145.91;}

if ($work2 == '4 Gang switch - Replace, Supply and Replace - Clipsal 2000 series')
{ $work2price = $work2amount * 102.14;}

if ($work2 == 'Cover plate - Replace, Supply and Replace')
{ $work2price = $work2amount * 53.50;}

if ($work2 == 'OS GPO/Switch - Replace, Replace owner supplied GPO')
{ $work2price = $work2amount * 53.50;}

if ($work2 == 'Data point - New, Supply and Install')
{ $work2price = $work2amount * 350.18;}

if ($work2 == 'Dimmer switch, Supply and Install')
{ $work2price = $work2amount * 92.41;}

if ($work2 == 'TV Point, Supply and Install')
{ $work2price = $work2amount * 321.00;}

if ($work2 == 'Replace GPO with double USB, Supply and Replace - Order on tradezone')
{ $work2price = $work2amount * 184.82;}

if ($work2 == 'Replace GPO with single USB, Supply and Replace - Order on tradezone')
{ $work2price = $work2amount * 175.09;}

if ($work2 == 'Ceiling Fan - New install, Labour with ceiling access above')
{ $work2price = $work2amount * 257.77;}

if ($work2 == 'Ceiling Fan - Replace existing, Labour')
{ $work2price = $work2amount * 160.50;}

if ($work2 == 'Ceiling Fan – Difficult Install, Labour with no ceiling access')
{ $work2price = $work2amount * 374.50;}

if ($work2 == 'AC Ceiling Fan with light, Supply Brilliant Tempest Fan')
{ $work2price = $work2amount * 252.91;}

if ($work2 == 'AC Ceiling Fan without light, Supply Brilliant Tempest Fan')
{ $work2price = $work2amount * 223.73;}

if ($work2 == 'DC Ceiling Fan without light, Supply Brilliant Amari Fan')
{ $work2price = $work2amount * 398.82;}

if ($work2 == 'DC Ceiling Fan with light, Supply Brilliant Amari fan')
{ $work2price = $work2amount * 428.00;}

if ($work2 == 'Fan Remote, Brilliant Wireless remote')
{ $work2price = $work2amount * 82.68;}

if ($work2 == 'Wall mounted fan, Supplied Ventair Fan + new GPO')
{ $work2price = $work2amount * 437.73;}

if ($work2 == 'Wall mounted fan, Owner supplied - With new GPO')
{ $work2price = $work2amount * 277.23;}

if ($work2 == 'Replace Fan Controller, Brilliant Fan Controller')
{ $work2price = $work2amount * 48.64;}

if ($work2 == 'Extra cable for light in fan, Extra cable for light in fan')
{ $work2price = $work2amount * 141.05;}

if ($work2 == 'Light - New Install OS, Pendant or similar')
{ $work2price = $work2amount * 184.82;}

if ($work2 == 'Light – Replace Owner Supplied, Using existing wiring')
{ $work2price = $work2amount * 111.86;}

if ($work2 == 'Downlight - New, Supply and Install Energy Saver LED')
{ $work2price = $work2amount * 150.77;}

if ($work2 == 'Downlight - New OS, Install OS Downlight')
{ $work2price = $work2amount * 136.18;}

if ($work2 == 'Downlight – Replace existing, Supply and Replace Energy Saver LED')
{ $work2price = $work2amount * 68.09;}

if ($work2 == 'Downlight – Replace existing, Replace OS Downlight')
{ $work2price = $work2amount * 48.64;}

if ($work2 == 'Oyster light, Supply $65, Replace $115')
{ $work2price = $work2amount * 63.23;}

if ($work2 == 'New Sensor Light, Supply and Install twin sensor')
{ $work2price = $work2amount * 389.09;}

if ($work2 == 'New Sensor Light, Owner Supplied twin sensor')
{ $work2price = $work2amount * 252.91;}

if ($work2 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work2price = $work2amount * 145.91;}

if ($work2 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work2price = $work2amount * 145.91;}

if ($work2 == 'Replace Emergency Lighting, Supply and Replace')
{ $work2price = $work2amount * 291.82;}

if ($work2 == 'Replace Exit Lighting, Supply and Replace')
{ $work2price = $work2amount * 325.86;}

if ($work2 == 'New light switch, Supply and Install')
{ $work2price = $work2amount * 204.27;}

if ($work2 == 'Supply Batten, Supply LED Batten light')
{ $work2price = $work2amount * 87.55;}

if ($work2 == 'Move existing light switch, Supply and Replace')
{ $work2price = $work2amount * 165.36;}

if ($work2 == 'Painting home, Remove & reattach pole fuse – 2 days')
{ $work2price = $work2amount * 336.36;}

if ($work2 == '10-point Safety check, Includes Callout Fee')
{ $work2price = $work2amount * 350.18;}

if ($work2 == 'RCBO, New Install')
{ $work2price = $work2amount * 194.55;}

if ($work2 == 'RCBO Replacement, Replacement')
{ $work2price = $work2amount * 136.18;}

if ($work2 == 'Ripple Filter, Goes behind each switch')
{ $work2price = $work2amount * 330.73;}

if ($work2 == 'Hot water reconnection, Simple reconnection')
{ $work2price = $work2amount * 194.55;}

if ($work2 == 'TV Mount, Us to supply mount')
{ $work2price = $work2amount * 257.77;}

if ($work2 == 'TV Mount OS, Mount OS TV')
{ $work2price = $work2amount * 165.36;}

if ($work2 == 'Switchboard Upgrade, Just the switchboard')
{ $work2price = $work2amount * 1352.09;}

if ($work2 == 'Switchboard Upgrade, Switchboard and meter panel upgrade')
{ $work2price = $work2amount * 2227.55;}

if ($work2 == 'New circuit')
{ $work2price = $work2amount * 350.18;}

if ($work2 == 'Test and Tag they bring it to us, 1 single tag')
{ $work2price = $work2amount * 9.73;}

if ($work2 == 'Test and Tag We go out, 1 single tag')
{ $work2price = $work2amount * 8.56;}

if ($work2 == 'Replace 10A Plug, Supply and replace 10A Plug')
{ $work2price = $work2amount * 29.18;}

if ($work2 == 'New switch wire')
{ $work2price = $work2amount * 126.45;}

if ($work2 == 'New Hardwired Smoke Alarm, Supply and Install (Clipsal)')
{ $work2price = $work2amount * 150.77;}

if ($work2 == 'New Wireless Smoke Alarms, Supply and Install (Clipsal)')
{ $work2price = $work2amount * 179.95;}

if ($work2 == 'Wireless Base, Supply and Install (Clipsal)')
{ $work2price = $work2amount * 102.14;}

if ($work2 == 'Replace Hardwired Alarm, Supply and Replace (Clipsal)')
{ $work2price = $work2amount * 102.14;}

if ($work2 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber')
{ $work2price = $work2amount * 1857.91;}

if ($work2 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber')
{ $work2price = $work2amount * 2091.36;}

if ($work2 == 'Install 5kw Mitsubishi Electric, Back to back with new power circuit')
{ $work2price = $work2amount * 2811.18;}

if ($work2 == 'Install 7kw Mitsubishi Electric, Back to back with new power circuit')
{ $work2price = $work2amount * 3297.55;}

if ($work2 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work2price = $work2amount * 1556.36;}

if ($work2 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work2price = $work2amount * 1789.81;}

if ($work2 == 'Install 5kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work2price = $work2amount * 2509.63;}

if ($work2 == 'Install 7kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work2price = $work2amount * 2996;}

if ($work2 == 'Extra ducting/piping')
{ $work2price = $work2amount * 58.36;}

if ($work2 == 'Decommission/remove old AC')
{ $work2price = $work2amount * 131.32;}

if ($work2 == 'Install AC - Owner Supplied - Back to back 2.5 and 3.5kw')
{ $work2price = $work2amount * 943.55;}

if ($work2 == 'Install AC - Owner Supplied - Back to back – 5kw')
{ $work2price = $work2amount * 1123.50;}

if ($work2 == 'Install AC - Owner Supplied - Back to back – 7kw and above')
{ $work2price = $work2amount * 1352.09;}

if ($work2 == 'Aircon Brick Property Fee, Per Unit')
{ $work2price = $work2amount * 77.82;}

if ($work2 == 'AC Bracket, Per Unit')
{ $work2price = $work2amount * 136.18;}

if ($work2 == 'AC Bracket over head height, Per Unit')
{ $work2price = $work2amount * 243.18;}


if ($work3 == 'Bathroom Exhaust Fan - Supply 200mm round, separate switches new')
{ $work3price = $work3amount * 306.41;}

if ($work3 == 'Bathroom Exhaust Fan - Replace Replace Labour only')
{ $work3price = $work3amount * 102.14;}

if ($work3 == 'Bathroom Exhaust Fan - Replace Replace with 200mm round exhaust')
{ $work3price = $work3amount * 184.82;}

if ($work3 == 'Replace like for like tastic Labour only')
{ $work3price = $work3amount * 136.18;}

if ($work3 == 'New tastic Labour only (or replace light/exhaust)')
{ $work3price = $work3amount * 291.82;}

if ($work3 == 'GPO - New, Supply and Install - Internal')
{ $work3price = $work3amount * 204.27;}

if ($work3 == 'GPO - 4 Gang New, Supply and Install - Internal')
{ $work3price = $work3amount * 243.18;}

if ($work3 == 'GPO with conduit - New, Supply and Install - Using Conduit')
{ $work3price = $work3amount * 233.45;}

if ($work3 == 'Replace GPO/Switch (1-3 gang), Supply and replace - Clipsal 2000 Series')
{ $work3price = $work3amount * 68.09;}

if ($work3 == 'Replace 2 gang with 4 gang GPO, Supply and Replace')
{ $work3price = $work3amount * 102.14;}

if ($work3 == 'Weatherproof GPO - New, Supply and Install')
{ $work3price = $work3amount * 325.86;}

if ($work3 == 'Weatherproof GPO- Replace, Supply and Replace')
{ $work3price = $work3amount * 145.91;}

if ($work3 == '4 Gang switch - Replace, Supply and Replace - Clipsal 2000 series')
{ $work3price = $work3amount * 102.14;}

if ($work3 == 'Cover plate - Replace, Supply and Replace')
{ $work3price = $work3amount * 53.50;}

if ($work3 == 'OS GPO/Switch - Replace, Replace owner supplied GPO')
{ $work3price = $work3amount * 53.50;}

if ($work3 == 'Data point - New, Supply and Install')
{ $work3price = $work3amount * 350.18;}

if ($work3 == 'Dimmer switch, Supply and Install')
{ $work3price = $work3amount * 92.41;}

if ($work3 == 'TV Point, Supply and Install')
{ $work3price = $work3amount * 321.00;}

if ($work3 == 'Replace GPO with double USB, Supply and Replace - Order on tradezone')
{ $work3price = $work3amount * 184.82;}

if ($work3 == 'Replace GPO with single USB, Supply and Replace - Order on tradezone')
{ $work3price = $work3amount * 175.09;}

if ($work3 == 'Ceiling Fan - New install, Labour with ceiling access above')
{ $work3price = $work3amount * 257.77;}

if ($work3 == 'Ceiling Fan - Replace existing, Labour')
{ $work3price = $work3amount * 160.50;}

if ($work3 == 'Ceiling Fan – Difficult Install, Labour with no ceiling access')
{ $work3price = $work3amount * 374.50;}

if ($work3 == 'AC Ceiling Fan with light, Supply Brilliant Tempest Fan')
{ $work3price = $work3amount * 252.91;}

if ($work3 == 'AC Ceiling Fan without light, Supply Brilliant Tempest Fan')
{ $work3price = $work3amount * 223.73;}

if ($work3 == 'DC Ceiling Fan without light, Supply Brilliant Amari Fan')
{ $work3price = $work3amount * 398.82;}

if ($work3 == 'DC Ceiling Fan with light, Supply Brilliant Amari fan')
{ $work3price = $work3amount * 428.00;}

if ($work3 == 'Fan Remote, Brilliant Wireless remote')
{ $work3price = $work3amount * 82.68;}

if ($work3 == 'Wall mounted fan, Supplied Ventair Fan + new GPO')
{ $work3price = $work3amount * 437.73;}

if ($work3 == 'Wall mounted fan, Owner supplied - With new GPO')
{ $work3price = $work3amount * 277.23;}

if ($work3 == 'Replace Fan Controller, Brilliant Fan Controller')
{ $work3price = $work3amount * 48.64;}

if ($work3 == 'Extra cable for light in fan, Extra cable for light in fan')
{ $work3price = $work3amount * 141.05;}

if ($work3 == 'Light - New Install OS, Pendant or similar')
{ $work3price = $work3amount * 184.82;}

if ($work3 == 'Light – Replace Owner Supplied, Using existing wiring')
{ $work3price = $work3amount * 111.86;}

if ($work3 == 'Downlight - New, Supply and Install Energy Saver LED')
{ $work3price = $work3amount * 150.77;}

if ($work3 == 'Downlight - New OS, Install OS Downlight')
{ $work3price = $work3amount * 136.18;}

if ($work3 == 'Downlight – Replace existing, Supply and Replace Energy Saver LED')
{ $work3price = $work3amount * 68.09;}

if ($work3 == 'Downlight – Replace existing, Replace OS Downlight')
{ $work3price = $work3amount * 48.64;}

if ($work3 == 'Oyster light, Supply $65, Replace $115')
{ $work3price = $work3amount * 63.23;}

if ($work3 == 'New Sensor Light, Supply and Install twin sensor')
{ $work3price = $work3amount * 389.09;}

if ($work3 == 'New Sensor Light, Owner Supplied twin sensor')
{ $work3price = $work3amount * 252.91;}

if ($work3 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work3price = $work3amount * 145.91;}

if ($work3 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work3price = $work3amount * 145.91;}

if ($work3 == 'Replace Emergency Lighting, Supply and Replace')
{ $work3price = $work3amount * 291.82;}

if ($work3 == 'Replace Exit Lighting, Supply and Replace')
{ $work3price = $work3amount * 325.86;}

if ($work3 == 'New light switch, Supply and Install')
{ $work3price = $work3amount * 204.27;}

if ($work3 == 'Supply Batten, Supply LED Batten light')
{ $work3price = $work3amount * 87.55;}

if ($work3 == 'Move existing light switch, Supply and Replace')
{ $work3price = $work3amount * 165.36;}

if ($work3 == 'Painting home, Remove & reattach pole fuse – 2 days')
{ $work3price = $work3amount * 336.36;}

if ($work3 == '10-point Safety check, Includes Callout Fee')
{ $work3price = $work3amount * 350.18;}

if ($work3 == 'RCBO, New Install')
{ $work3price = $work3amount * 194.55;}

if ($work3 == 'RCBO Replacement, Replacement')
{ $work3price = $work3amount * 136.18;}

if ($work3 == 'Ripple Filter, Goes behind each switch')
{ $work3price = $work3amount * 330.73;}

if ($work3 == 'Hot water reconnection, Simple reconnection')
{ $work3price = $work3amount * 194.55;}

if ($work3 == 'TV Mount, Us to supply mount')
{ $work3price = $work3amount * 257.77;}

if ($work3 == 'TV Mount OS, Mount OS TV')
{ $work3price = $work3amount * 165.36;}

if ($work3 == 'Switchboard Upgrade, Just the switchboard')
{ $work3price = $work3amount * 1352.09;}

if ($work3 == 'Switchboard Upgrade, Switchboard and meter panel upgrade')
{ $work3price = $work3amount * 2227.55;}

if ($work3 == 'New circuit')
{ $work3price = $work3amount * 350.18;}

if ($work3 == 'Test and Tag they bring it to us, 1 single tag')
{ $work3price = $work3amount * 9.73;}

if ($work3 == 'Test and Tag We go out, 1 single tag')
{ $work3price = $work3amount * 8.56;}

if ($work3 == 'Replace 10A Plug, Supply and replace 10A Plug')
{ $work3price = $work3amount * 29.18;}

if ($work3 == 'New switch wire')
{ $work3price = $work3amount * 126.45;}

if ($work3 == 'New Hardwired Smoke Alarm, Supply and Install (Clipsal)')
{ $work3price = $work3amount * 150.77;}

if ($work3 == 'New Wireless Smoke Alarms, Supply and Install (Clipsal)')
{ $work3price = $work3amount * 179.95;}

if ($work3 == 'Wireless Base, Supply and Install (Clipsal)')
{ $work3price = $work3amount * 102.14;}

if ($work3 == 'Replace Hardwired Alarm, Supply and Replace (Clipsal)')
{ $work3price = $work3amount * 102.14;}

if ($work3 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber')
{ $work3price = $work3amount * 1857.91;}

if ($work3 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber')
{ $work3price = $work3amount * 2091.36;}

if ($work3 == 'Install 5kw Mitsubishi Electric, Back to back with new power circuit')
{ $work3price = $work3amount * 2811.18;}

if ($work3 == 'Install 7kw Mitsubishi Electric, Back to back with new power circuit')
{ $work3price = $work3amount * 3297.55;}

if ($work3 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work3price = $work3amount * 1556.36;}

if ($work3 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work3price = $work3amount * 1789.81;}

if ($work3 == 'Install 5kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work3price = $work3amount * 2509.63;}

if ($work3 == 'Install 7kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work3price = $work3amount * 2996;}

if ($work3 == 'Extra ducting/piping')
{ $work3price = $work3amount * 58.36;}

if ($work3 == 'Decommission/remove old AC')
{ $work3price = $work3amount * 131.32;}

if ($work3 == 'Install AC - Owner Supplied - Back to back 2.5 and 3.5kw')
{ $work3price = $work3amount * 943.55;}

if ($work3 == 'Install AC - Owner Supplied - Back to back – 5kw')
{ $work3price = $work3amount * 1123.50;}

if ($work3 == 'Install AC - Owner Supplied - Back to back – 7kw and above')
{ $work3price = $work3amount * 1352.09;}

if ($work3 == 'Aircon Brick Property Fee, Per Unit')
{ $work3price = $work3amount * 77.82;}

if ($work3 == 'AC Bracket, Per Unit')
{ $work3price = $work3amount * 136.18;}

if ($work3 == 'AC Bracket over head height, Per Unit')
{ $work3price = $work3amount * 243.18;}

if ($work4 == 'Bathroom Exhaust Fan - Supply 200mm round, separate switches new')
{ $work4price = $work4amount * 306.41;}

if ($work4 == 'Bathroom Exhaust Fan - Replace Replace Labour only')
{ $work4price = $work4amount * 102.14;}

if ($work4 == 'Bathroom Exhaust Fan - Replace Replace with 200mm round exhaust')
{ $work4price = $work4amount * 184.82;}

if ($work4 == 'Replace like for like tastic Labour only')
{ $work4price = $work4amount * 136.18;}

if ($work4 == 'New tastic Labour only (or replace light/exhaust)')
{ $work4price = $work4amount * 291.82;}

if ($work4 == 'GPO - New, Supply and Install - Internal')
{ $work4price = $work4amount * 204.27;}

if ($work4 == 'GPO - 4 Gang New, Supply and Install - Internal')
{ $work4price = $work4amount * 243.18;}

if ($work4 == 'GPO with conduit - New, Supply and Install - Using Conduit')
{ $work4price = $work4amount * 233.45;}

if ($work4 == 'Replace GPO/Switch (1-3 gang), Supply and replace - Clipsal 2000 Series')
{ $work4price = $work4amount * 68.09;}

if ($work4 == 'Replace 2 gang with 4 gang GPO, Supply and Replace')
{ $work4price = $work4amount * 102.14;}

if ($work4 == 'Weatherproof GPO - New, Supply and Install')
{ $work4price = $work4amount * 325.86;}

if ($work4 == 'Weatherproof GPO- Replace, Supply and Replace')
{ $work4price = $work4amount * 145.91;}

if ($work4 == '4 Gang switch - Replace, Supply and Replace - Clipsal 2000 series')
{ $work4price = $work4amount * 102.14;}

if ($work4 == 'Cover plate - Replace, Supply and Replace')
{ $work4price = $work4amount * 53.50;}

if ($work4 == 'OS GPO/Switch - Replace, Replace owner supplied GPO')
{ $work4price = $work4amount * 53.50;}

if ($work4 == 'Data point - New, Supply and Install')
{ $work4price = $work4amount * 350.18;}

if ($work4 == 'Dimmer switch, Supply and Install')
{ $work4price = $work4amount * 92.41;}

if ($work4 == 'TV Point, Supply and Install')
{ $work4price = $work4amount * 321.00;}

if ($work4 == 'Replace GPO with double USB, Supply and Replace - Order on tradezone')
{ $work4price = $work4amount * 184.82;}

if ($work4 == 'Replace GPO with single USB, Supply and Replace - Order on tradezone')
{ $work4price = $work4amount * 175.09;}

if ($work4 == 'Ceiling Fan - New install, Labour with ceiling access above')
{ $work4price = $work4amount * 257.77;}

if ($work4 == 'Ceiling Fan - Replace existing, Labour')
{ $work4price = $work4amount * 160.50;}

if ($work4 == 'Ceiling Fan – Difficult Install, Labour with no ceiling access')
{ $work4price = $work4amount * 374.50;}

if ($work4 == 'AC Ceiling Fan with light, Supply Brilliant Tempest Fan')
{ $work4price = $work4amount * 252.91;}

if ($work4 == 'AC Ceiling Fan without light, Supply Brilliant Tempest Fan')
{ $work4price = $work4amount * 223.73;}

if ($work4 == 'DC Ceiling Fan without light, Supply Brilliant Amari Fan')
{ $work4price = $work4amount * 398.82;}

if ($work4 == 'DC Ceiling Fan with light, Supply Brilliant Amari fan')
{ $work4price = $work4amount * 428.00;}

if ($work4 == 'Fan Remote, Brilliant Wireless remote')
{ $work4price = $work4amount * 82.68;}

if ($work4 == 'Wall mounted fan, Supplied Ventair Fan + new GPO')
{ $work4price = $work4amount * 437.73;}

if ($work4 == 'Wall mounted fan, Owner supplied - With new GPO')
{ $work4price = $work4amount * 277.23;}

if ($work4 == 'Replace Fan Controller, Brilliant Fan Controller')
{ $work4price = $work4amount * 48.64;}

if ($work4 == 'Extra cable for light in fan, Extra cable for light in fan')
{ $work4price = $work4amount * 141.05;}

if ($work4 == 'Light - New Install OS, Pendant or similar')
{ $work4price = $work4amount * 184.82;}

if ($work4 == 'Light – Replace Owner Supplied, Using existing wiring')
{ $work4price = $work4amount * 111.86;}

if ($work4 == 'Downlight - New, Supply and Install Energy Saver LED')
{ $work4price = $work4amount * 150.77;}

if ($work4 == 'Downlight - New OS, Install OS Downlight')
{ $work4price = $work4amount * 136.18;}

if ($work4 == 'Downlight – Replace existing, Supply and Replace Energy Saver LED')
{ $work4price = $work4amount * 68.09;}

if ($work4 == 'Downlight – Replace existing, Replace OS Downlight')
{ $work4price = $work4amount * 48.64;}

if ($work4 == 'Oyster light, Supply $65, Replace $115')
{ $work4price = $work4amount * 63.23;}

if ($work4 == 'New Sensor Light, Supply and Install twin sensor')
{ $work4price = $work4amount * 389.09;}

if ($work4 == 'New Sensor Light, Owner Supplied twin sensor')
{ $work4price = $work4amount * 252.91;}

if ($work4 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work4price = $work4amount * 145.91;}

if ($work4 == 'Replace Sensor Light OS, Replace OS Sensor light')
{ $work4price = $work4amount * 145.91;}

if ($work4 == 'Replace Emergency Lighting, Supply and Replace')
{ $work4price = $work4amount * 291.82;}

if ($work4 == 'Replace Exit Lighting, Supply and Replace')
{ $work4price = $work4amount * 325.86;}

if ($work4 == 'New light switch, Supply and Install')
{ $work4price = $work4amount * 204.27;}

if ($work4 == 'Supply Batten, Supply LED Batten light')
{ $work4price = $work4amount * 87.55;}

if ($work4 == 'Move existing light switch, Supply and Replace')
{ $work4price = $work4amount * 165.36;}

if ($work4 == 'Painting home, Remove & reattach pole fuse – 2 days')
{ $work4price = $work4amount * 336.36;}

if ($work4 == '10-point Safety check, Includes Callout Fee')
{ $work4price = $work4amount * 350.18;}

if ($work4 == 'RCBO, New Install')
{ $work4price = $work4amount * 194.55;}

if ($work4 == 'RCBO Replacement, Replacement')
{ $work4price = $work4amount * 136.18;}

if ($work4 == 'Ripple Filter, Goes behind each switch')
{ $work4price = $work4amount * 330.73;}

if ($work4 == 'Hot water reconnection, Simple reconnection')
{ $work4price = $work4amount * 194.55;}

if ($work4 == 'TV Mount, Us to supply mount')
{ $work4price = $work4amount * 257.77;}

if ($work4 == 'TV Mount OS, Mount OS TV')
{ $work4price = $work4amount * 165.36;}

if ($work4 == 'Switchboard Upgrade, Just the switchboard')
{ $work4price = $work4amount * 1352.09;}

if ($work4 == 'Switchboard Upgrade, Switchboard and meter panel upgrade')
{ $work4price = $work4amount * 2227.55;}

if ($work4 == 'New circuit')
{ $work4price = $work4amount * 350.18;}

if ($work4 == 'Test and Tag they bring it to us, 1 single tag')
{ $work4price = $work4amount * 9.73;}

if ($work4 == 'Test and Tag We go out, 1 single tag')
{ $work4price = $work4amount * 8.56;}

if ($work4 == 'Replace 10A Plug, Supply and replace 10A Plug')
{ $work4price = $work4amount * 29.18;}

if ($work4 == 'New switch wire')
{ $work4price = $work4amount * 126.45;}

if ($work4 == 'New Hardwired Smoke Alarm, Supply and Install (Clipsal)')
{ $work4price = $work4amount * 150.77;}

if ($work4 == 'New Wireless Smoke Alarms, Supply and Install (Clipsal)')
{ $work4price = $work4amount * 179.95;}

if ($work4 == 'Wireless Base, Supply and Install (Clipsal)')
{ $work4price = $work4amount * 102.14;}

if ($work4 == 'Replace Hardwired Alarm, Supply and Replace (Clipsal)')
{ $work4price = $work4amount * 102.14;}

if ($work4 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber')
{ $work4price = $work4amount * 1857.91;}

if ($work4 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber')
{ $work4price = $work4amount * 2091.36;}

if ($work4 == 'Install 5kw Mitsubishi Electric, Back to back with new power circuit')
{ $work4price = $work4amount * 2811.18;}

if ($work4 == 'Install 7kw Mitsubishi Electric, Back to back with new power circuit')
{ $work4price = $work4amount * 3297.55;}

if ($work4 == 'Install 2.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work4price = $work4amount * 1556.36;}

if ($work4 == 'Install 3.5kw Mitsubishi Electric, Back to back single story timber Existing power circuit sufficient')
{ $work4price = $work4amount * 1789.81;}

if ($work4 == 'Install 5kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work4price = $work4amount * 2509.63;}

if ($work4 == 'Install 7kw Mitsubishi Electric, Existing power circuit sufficient')
{ $work4price = $work4amount * 2996;}

if ($work4 == 'Extra ducting/piping')
{ $work4price = $work4amount * 58.36;}

if ($work4 == 'Decommission/remove old AC')
{ $work4price = $work4amount * 131.32;}

if ($work4 == 'Install AC - Owner Supplied - Back to back 2.5 and 3.5kw')
{ $work4price = $work4amount * 943.55;}

if ($work4 == 'Install AC - Owner Supplied - Back to back – 5kw')
{ $work4price = $work4amount * 1123.50;}

if ($work4 == 'Install AC - Owner Supplied - Back to back – 7kw and above')
{ $work4price = $work4amount * 1352.09;}

if ($work4 == 'Aircon Brick Property Fee, Per Unit')
{ $work4price = $work4amount * 77.82;}

if ($work4 == 'AC Bracket, Per Unit')
{ $work4price = $work4amount * 136.18;}

if ($work4 == 'AC Bracket over head height, Per Unit')
{ $work4price = $work4amount * 243.18;}

$price = $callout + $work0price + $work1price + $work2price + $work3price + $work4price;

$message = "Thank you for contacting us ". $name  ."!\n\n\n Your estimated price for: ". $work0amount ." ". $work0 . 
"\n Your estimated price for: ". $work1amount ." ". $work1 . 
"\n Your estimated price for: ". $work2amount ." ". $work2 .
"\n Your estimated price for: ". $work3amount ." ". $work3 . 
"\n Your estimated price for: ". $work4amount ." ". $work4 .  
"\n\n Amounts to: $" . $price. 
"\n\nOther Details: " . $message1 .
"\n \n If you like these prices please contact us to book!\n
 Accounts/HR: Coralea -0410 577 814 or coralea@matcorp.com.au\n
 Warren - 0410 886 700 or warren@matcorp.com.au\n\n
 Your details:\n
 Name: " . $name."\n
 Email: ". $email."\n
 Phone: ". $phone
;


require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "bom1plzcpnl502764.prod.bom1.secureserver.net";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

$mail->Username = "admin@tsquoting.online";
$mail->Password = "Jonesy2005";

$mail->setFrom("HR@matCorpElectrical.com", "MatCorp");
$mail->addAddress($email, "Kye");


$mail->Subject = "Business Estimate";
$mail->Body = $message;

$mail->send();

header("Location: sent.html")
?>
