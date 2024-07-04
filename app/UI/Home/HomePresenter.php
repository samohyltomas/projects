<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette\Application\UI\Presenter;
use App\Model\SkillManager;

class HomePresenter extends Presenter
{
    private $skillManager;

    public function __construct(SkillManager $skillManager)
    {
        parent::__construct();
        $this->skillManager = $skillManager;
    }

    public function renderDefault(): void
    {
        $skills = $this->skillManager->getAllSkills();
        $this->template->skills = $skills;
    }

    public function actionDefault($slug)
    {
    // Kód pro zpracování požadavku s parametrem $slug
    }
}