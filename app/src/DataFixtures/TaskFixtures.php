<?php

namespace App\DataFixtures;

use App\Entity\Enum\Priority;
use App\Entity\Project;
use App\Entity\Task;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TaskFixtures extends AbstractBaseFixtures implements DependentFixtureInterface
{
    protected function loadData(): void
    {
        $this->createMany(150, 'tasks', function (int $i) {
            $task = new Task();
            $task->setTitle(preg_replace('/\./', '', $this->faker->sentence($this->faker->numberBetween(3, 8))));
            $task->setPriority(Priority::from($this->faker->numberBetween(1, 3)));
            $task->setProject($this->getRandomReference('projects', Project::class));

            if ($this->faker->boolean(70)) {
                $task->setDescription($this->faker->paragraph());
            }

            if ($this->faker->boolean(60)) {
                $task->setDueDate(\DateTimeImmutable::createFromMutable(
                    $this->faker->dateTimeBetween('-2 weeks', '+3 months')
                ));
            }

            return $task;
        });
    }

    public function getDependencies(): array
    {
        return [ProjectFixtures::class];
    }
}
