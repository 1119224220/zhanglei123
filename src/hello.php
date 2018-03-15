<?php
/**
 * Created by PhpStorm.
 * User: laoluo
 * Date: 2018/3/15
 * Time: 下午2:07
 * @introduce
 */

class hello
{

    private $name;

    public function __construct( $name = 'World' )
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hello()
    {
        return 'Hello '.$this->name.'!';
    }

}