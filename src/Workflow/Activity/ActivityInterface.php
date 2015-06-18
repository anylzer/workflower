<?php
/*
 * Copyright (c) 2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Workflower.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\Workflower\Workflow\Activity;

use PHPMentors\Workflower\Workflow\Type\ConditionalInterface;
use PHPMentors\Workflower\Workflow\Type\FlowObjectInterface;
use PHPMentors\Workflower\Workflow\Type\TransitionalInterface;

interface ActivityInterface extends FlowObjectInterface, TransitionalInterface, ConditionalInterface, WorkItemInterface
{
    public function createWorkItem();

    /**
     * @return bool
     */
    public function isAllocatable();

    /**
     * @return bool
     */
    public function isStartable();

    /**
     * @return bool
     */
    public function isCompletable();

    /**
     * @return bool
     */
    public function isEnded();
}
