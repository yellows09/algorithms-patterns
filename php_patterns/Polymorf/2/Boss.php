<?php
include_once 'Working.php';
class Boss
{
    private $employees = [];
    public function addEmployee($employeeName){
        $this->employees[] = $employeeName;
    }
    public function projectFire(){
        if(count($this->employees) > 0){
            $emp = array_pop($this->employees);
            echo $emp->fire();
        }
    }
}