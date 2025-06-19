<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task one</title>

    <style>
    body{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        height: 100vh;
    }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        table {
            border-collapse: collapse;
        }
        



    </style>
</head>

<body>

<table>
    <thead>
        <tr>
            <th>Names</th>
        </tr>
    </thead>
    <tbody>
        <?php
         $employee = array("jerin", "monish", "mugesh", "gowtham");
            foreach($employee as $person ){
                echo " <tr> <td> $person </td> </tr>  ";
            }
        ?>
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <th>Names</th>
        </tr>
    </thead>
    <tbody>
        <?php
         $employee = array("john", " sam ", "xavier", "samuel");
            for($i=0;$i < count($employee);$i++){
                echo " <tr> <td> {$employee[$i]} </td> </tr>  ";
            }
        ?>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Names</th>
        </tr>
    </thead>
    <tbody>
        <?php
         $employee = array("joseph", " joevin ", "Arun", "sundar");
            $i = 0;
            while($i < count($employee)){
                echo " <tr> <td> {$employee[$i]} </td> </tr>  ";
                $i++;
            }
        ?>
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count = 1;
            $employee = array(
                array("name" => "jerin", "role" => "Intern"),
                array("name" => "monish", "role" => "Developer"),
                array("name" => "gowtham", "role" => "Sn Developer")
            );

            foreach($employee as $person){
                echo "<tr> <td>$count</td> <td> {$person['name']} </td> <td> {$person['role']} </td> </tr>";
                $count++;
            }

        ?>
    </tbody>
</table>





</body>

</html>