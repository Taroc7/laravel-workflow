<?php

namespace ZeroDaHero\LaravelWorkflow\Events;

use Symfony\Component\Workflow\Marking;
use Symfony\Component\Workflow\Transition;
use Symfony\Component\Workflow\WorkflowInterface;

/**
 * @author Peter Sweets <p.sweets@developers.nl>
 */
class CompletedEvent extends BaseEvent
{
	use HasContextTrait;

	public function __construct(object $subject, Marking $marking, ?Transition $transition = null, ?WorkflowInterface $workflow = null, array $context = [])
	{
		parent::__construct($subject, $marking, $transition, $workflow);

		$this->context = $context;
	}
}
