<?php declare(strict_types=1);

/**
 * ownCloud
 *
 * @author Dipak Acharya <dipak@jankaritech.com>
 * @copyright Copyright (c) 2018 Dipak Acharya dipak@jankaritech.com
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License,
 * as published by the Free Software Foundation;
 * either version 3 of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace Page\FilesPageElement;

/**
 * Object of a row on the Shared with others page
 */
class SharedWithOthersFileRow extends FileRow {
	/**
	 * @param string $xpath
	 *
	 * @return string|null
	 */
	public function getFilePath(string $xpath): ?string {
		return $this->rowElement->getAttribute("data-path");
	}
}
