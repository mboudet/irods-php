<?php

class RODSDirStats
{
    public $name;
    public $owner;
    public $ownerzone;
    public $mtime;
    public $ctime;
    public $id;
    public $comments;

    // Stats related to special collections
    // https://github.com/irods/irods-legacy/blob/master/iRODS/doc/specialCollection
    public $type;
    public $info1;
    public $info2;

    public function __construct($name, $owner, $ownerzone, $mtime, $ctime, $id, $comments, $type, $info1, $info2)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->ownerzone = $ownerzone;
        $this->mtime = $mtime;
        $this->ctime = $ctime;
        $this->id = $id;
        $this->comments = $comments;
        $this->type = $type;
        $this->info1 = $info1;
        $this->info2 = $info2;
    }

}  
     