<?php
/**
 * Copyright (c) Enalean, 2017. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Tuleap\Dashboard\Widget;

use ForgeConfig;
use HTTPRequest;

class Router
{
    /**
     * @var PreferencesController
     */
    private $preferences_controller;

    public function __construct(PreferencesController $preferences_controller)
    {
        $this->preferences_controller = $preferences_controller;
    }

    public function route(HTTPRequest $request)
    {
        if (! $request->getCurrentUser()->isLoggedIn()
            || ! ForgeConfig::get('sys_use_tlp_in_dashboards')
        ) {
            return;
        }

        $action = $request->get('action');

        switch ($action) {
            case 'get-edit-modal-content':
                $this->preferences_controller->display($request);
                break;
            case 'edit-widget':
                $this->preferences_controller->update($request);
                break;
        }
    }
}
