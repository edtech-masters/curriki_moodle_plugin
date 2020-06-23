<?php

class lti_module
{

    static public $data = null;

    public static function set_data($entity_data, $lti_tool_config)
    {
        $d = [
            "name" => $entity_data["entity_name"],
            "introeditor" => [
              "text" => "",
              "format" => "1",
              "itemid" => uniqid(),
            ],
            "showdescription" => "0",
            "showtitlelaunch" => "1",
            "typeid" => $lti_tool_config->id,
            "contentitem" => 1,
            "toolurl" => "",
            "securetoolurl" => "",
            "urlmatchedtypeid" => 0,
            "lineitemresourceid" => "",
            "lineitemtag" => "",
            "launchcontainer" => "1",
            "resourcekey" => "",
            "password" => "",
            "instructorcustomparameters" => $entity_data["entity_type"]."=".$entity_data["entity_id"],
            "icon" => "",
            "secureicon" => "",
            "instructorchoicesendname" => "1",
            "instructorchoicesendemailaddr" => "1",
            "instructorchoiceacceptgrades" => "1",
            "grade" => 100,
            "grade_rescalegrades" => NULL,
            "gradecat" => "1",
            "gradepass" => NULL,
            "visible" => 1,
            "visibleoncoursepage" => 1,
            "cmidnumber" => "",
            "availabilityconditionsjson" => "{\"op\":\"&\",\"c\":[],\"showc\":[]}", 
            "completionunlocked" => 1,
            "completion" => "1",
            "completionexpected" => 0,
            "tags" => [],
            "course" => 2,
            "coursemodule" => 0,
            "section" => 1,
            "module" => 15,
            "modulename" => "lti",
            "instance" => 0,
            "add" => "lti",
            "update" => 0,
            "return" => 0,
            "sr" => 0,
            "competencies" => [],
            "competency_rule" => "0",
            "submitbutton2" => "Save and return to course",
        ];

        self::$data = (object)$d;
    }
}