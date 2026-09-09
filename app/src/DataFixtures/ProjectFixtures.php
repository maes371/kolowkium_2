<?php

namespace App\DataFixtures;

use App\Entity\Project;

class ProjectFixtures extends AbstractBaseFixtures
{
    private readonly array $projectNameList;

    public function __construct()
    {
        $this->projectNameList = [
            'Website Redesign',
            'Mobile App Launch',
            'Customer Portal',
            'Internal CRM',
            'Marketing Campaign',
            'Data Migration',
            'Infrastructure Upgrade',
            'Payment Gateway Integration',
            'Onboarding Automation',
            'Support Ticket System',
            'Analytics Dashboard',
            'Legacy System Retirement',
        ];
    }

    protected function loadData(): void
    {
        $this->createMany(count($this->projectNameList), 'projects', function (int $i) {
            $project = new Project();
            $project->setName($this->projectNameList[$i]);

            return $project;
        });
    }
}
