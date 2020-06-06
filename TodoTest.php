<?php
use PHPUnit\Framework\TestCase;
use todo\includes\Lists;
require_once( dirname(__DIR__) . '/vendor/autoload.php');
require_once( dirname(__DIR__) . '/todo/includes/idiorm.php');
require_once(dirname(__DIR__). '/todo/includes/connect.php');
require_once( dirname(__DIR__) . '/todo/includes/classes.php');
class TodoTest extends PHPUnit_Framework_TestCase
{
    public function testinsert() {
        $obj = new Lists();
        $passer = $obj->insert("unit test");
        $this->assertSame("success", $passer);
    }
    public function testemptyinsert() {
        $obj = new Lists();
        $passer = $obj->insert("");
        $this->assertSame("variable is empty", $passer);
    } 
    public function testupdatecolor() {
        $rand = rand(0,2);
        $colorholder = ['colorGreen','colorRed','colorBlue'];
        $color = $colorholder[$rand]; 
        $obj = new Lists();
        $id="40";
        $passer = $obj->updatecolour($color,$id);
        $this->assertSame("updated", $passer);
    } 
    public function testview() {
        $obj = new Lists();
        $passer = $obj->viewall();
        $this->assertNotNull($passer);
    } 
    public function testrecallerview() {
        $obj = new Lists();
        $passer = $obj->viewallspecified();
        $this->assertNotNull($passer);
    } 
    public function updatetext() {
        $obj = new Lists();
        $passer = $obj->viewallspecified();
        $this->assertSame("updated",$passer);
    } 

}
?>