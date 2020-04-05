<?php
/*CRUD Functions*/

class Functions 
{
    
    /*ADD*/
    public function add($TEMP)
    {
        $file = file_get_contents('test.json');
        $data = json_decode($file, true);
        $data["details"] = array_values($data["details"]);
        array_push($data["details"], $TEMP);
        file_put_contents("test.json", json_encode($data));
        header("Location: all.php");
    }
  
    /*EDIT*/
    public function edit($DATA)
    {
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];
            $getfile = file_get_contents('test.json');
            $jsonfile = json_decode($getfile, true);
            $jsonfile = $jsonfile["details"];
            $jsonfile = $jsonfile[$id];
            return $jsonfile;
        }
        
        if (isset($DATA["id"])) {
            $id = (int) $DATA["id"];
            $getfile = file_get_contents('test.json');
            $all = json_decode($getfile, true);
            $jsonfile = $all["details"];
            $jsonfile = $jsonfile[$id];
        
            $post["name"] = isset($DATA["name"]) ? $DATA["name"] : '';
            $post["number"] = isset($DATA["number"]) ? $DATA["number"] : '';
            $post["policyNo"] = isset($DATA["policyNo"]) ? $DATA["policyNo"] : '';
            $post["fup"] = isset($DATA["fup"]) ? $DATA["fup"] : '';
            $post["doc"] = isset($DATA["doc"]) ? $DATA["doc"] : '';
            $post["payMode"] = isset($DATA["payMode"]) ? $DATA["payMode"] : '';
            $post["planNo"] = isset($DATA["planNo"]) ? $DATA["planNo"] : '';
            $post["premium"] = isset($DATA["premium"]) ? $DATA["premium"] : '';
            $post["sumAssured"] = isset($DATA["sumAssured"]) ? $DATA["sumAssured"] : '';
            $post["term"] = isset($DATA["term"]) ? $DATA["term"] : '';
            $post["maturityDate"] = isset($DATA["maturityDate"]) ? $DATA["maturityDate"] : '';
            $post["birthday"] = isset($DATA["birthday"]) ? $DATA["birthday"] : '';
        
            if ($jsonfile) {
                unset($all["details"][$id]);
                $all["details"][$id] = $post;
                $all["details"] = array_values($all["details"]);
                file_put_contents("test.json", json_encode($all));
            }
            header("Location: http://localhost/Demos/JSON%20OBJECT/all.php");
        }
    }
    /*SHOW*/
    public function show()
    {
        $getfile = file_get_contents('test.json');
        $jsonfile = json_decode($getfile);
        return $jsonfile;
    }

}
