<?php

/// Base Classes
class LKLodgeKit
{
    public static function init($lodge)
    {
        
    }
}

class LKLodge
{

}

class LKTheosophy
{
    var $gods;
}


/// Supported Theosophies
class LKGrimoireOfTiamat extends LKTheosophy
{

}

class LKDiabolicon extends LKTheosophy
{

}

/// Lodge Implementation(s)
class LKOrderOfTiamat extends LKLodge
{

}

class LKOrderOfSet extends LKLodge
{

}