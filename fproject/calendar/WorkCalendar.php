<?php
///////////////////////////////////////////////////////////////////////////////
//
// © Copyright f-project.net 2010-present.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
///////////////////////////////////////////////////////////////////////////////
namespace fproject\calendar;

class WorkCalendar
{
    /** @var string $id The unique ID */
    public $id;

    /**
     * @var string $name The name of this Work calendar
     */
    public $name;

    /**
     * @var Period[] $periods The time periods of this Work calendar
     */
    public $periods;

    /**
     * @var WeekDay[] $weekDays The weekday periods this work calendar
     */
    public $weekDays;

    /**
     * @var WorkCalendar $baseCalendar The base calendar of this work calendar
     */
    public $baseCalendar;

    /**
     * @var WorkShift[] $defaultWorkShifts The default work shifts of this work calendar
     */
    public $defaultWorkShifts;
}