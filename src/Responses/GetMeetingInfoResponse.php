<?php
/**
 * ZoomClient open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 ZoomClient Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * ZoomClient is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with ZoomClient; if not, see <http://www.gnu.org/licenses/>.
 */
namespace Omt\BigBlueButton\Responses;

use Omt\BigBlueButton\Core\Meeting;

/**
 * Class GetMeetingInfoResponse
 * @package ZoomClient\Responses
 */
class GetMeetingInfoResponse extends BaseResponse
{
    /**
     * @var Meeting
     */
    private $meeting;

    /**
     * @return Meeting
     */
    public function getMeeting()
    {
        if ($this->meeting === null) {
            $this->meeting = new Meeting($this->rawXml);
        }

        return $this->meeting;
    }
}