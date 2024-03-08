<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEC Schools</title>
</head>
<body>
    <?php
        $sec = [
            'auburn',
            'lsu',
            'msu',
            'texasAM',
            'alabama',
            'arkansas',
            'florida',
            'georgia',
            'kentucky',
            'oleMiss',
            'mizzou',
            'southCarolina',
            'tennessee',
            'vanderbilt'
        ];
        
        $auburn = [
            'school' => 'Auburn',
            'mascot' => 'Tigers',
            'city' => 'Auburn',
            'state' => 'AL',
            'division' => 'West'
        ];
        
        $lsu = [
            'school' => 'LSU',
            'mascot' => 'Fighting Tigers',
            'city' => 'Baton Rouge',
            'state' => 'LA',
            'division' => 'West'
        ];
        
        $msu = [
            'school' => 'MSU',
            'mascot' => 'Bulldogs',
            'city' => 'Starkville',
            'state' => 'MS',
            'division' => 'West'
        ];
        
        $texasAM = [
            'school' => 'Texas A&M',
            'mascot' => 'Aggies',
            'city' => 'College Station',
            'state' => 'TX',
            'division' => 'West'
        ];
        
        $alabama = [
            'school' => 'Alabama',
            'mascot' => 'Crimson Tide',
            'city' => 'Tuscaloosa',
            'state' => 'AL',
            'division' => 'West'
        ];
        
        $arkansas = [
            'school' => 'Arkansas',
            'mascot' => 'Razorbacks',
            'city' => 'Fayetteville',
            'state' => 'AR',
            'division' => 'West'
        ];
        
        $florida = [
            'school' => 'Florida',
            'mascot' => 'Gators',
            'city' => 'Gainesville',
            'state' => 'FL',
            'division' => 'East'
        ];
        
        $georgia = [
            'school' => 'Georgia',
            'mascot' => 'Bulldogs',
            'city' => 'Athens',
            'state' => 'GA',
            'division' => 'East'
        ];
        
        $kentucky = [
            'school' => 'Kentucky',
            'mascot' => 'Wildcats',
            'city' => 'Lexington',
            'state' => 'KY',
            'division' => 'East'
        ];
        
        $oleMiss = [
            'school' => 'Ole Miss',
            'mascot' => 'Rebels',
            'city' => 'Oxford',
            'state' => 'MS',
            'division' => 'West'
        ];
        
        $mizzou = [
            'school' => 'Missou',
            'mascot' => 'Tigers',
            'city' => 'Columbia',
            'state' => 'MO',
            'division' => 'East'
        ];
        
        $southCarolina = [
            'school' => 'South Carolina',
            'mascot' => 'Gamecocks',
            'city' => 'Columbia',
            'state' => 'SC',
            'division' => 'East'
        ];
        
        $tennessee = [
            'school' => 'Tennessee',
            'mascot' => 'Volunteers',
            'city' => 'Knoxville',
            'state' => 'TN',
            'division' => 'East'
        ];
        
        $vanderbilt = [
            'school' => 'Vanderbilt',
            'mascot' => 'Commodores',
            'city' => 'Nashville',
            'state' => 'TN',
            'division' => 'East'
        ];
        
        foreach($sec as $oneSchool){
            echo ${$oneSchool}['school']." (SEC ".${$oneSchool}['division'].")"."<br/>";
            echo "Located in ".${$oneSchool}['city'].", ".${$oneSchool}['state']."<br/>";
            echo "Go ".${$oneSchool}['mascot']."!<hr/>";
        }
    ?>
</body>
</html>