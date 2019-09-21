<!DOCTYPE html>
<html>
<head>
    <title>php 테스트</title>
</head>
<body>
    <?php
        include __DIR__."/head.php";

        //array
        $array = ["A","B","C"];
        for($i=0;$i<count($array);$i++){
            echo " :".$array[$i].": ";
        }

        foreach(array_keys($array) as $i){
            echo " :".$i.": ";
        }
        
        
        //object
        $object = [
            "A" => "<div>A</div>",
            "B" => "<div>B</div>",
            "C" => "<div>C</div>",
        ];
        foreach($object as $o){
            echo $o;
        }

        function printFunc(String $test){
            return 'Test '.$test;
        }

        function getCallText(String $text){
            echo $text('hi');
        }

        getCallText('printFunc');

    ?>
</body>
</html>



