<?php

declare(strict_types=1);

namespace App\Model;

use Nette\Database\Explorer;

class SkillManager
{
    private $database;

    public function __construct(Explorer $database)
    {
        $this->database = $database;
    }

    public function getAllSkills()
    {
        $skills = $this->database->table('skills1')->fetchAll();
        // Přidejte následující řádek pro výpis dat do logu
        \Tracy\Debugger::log($skills, 'skills1');
        return $skills;
    }
}