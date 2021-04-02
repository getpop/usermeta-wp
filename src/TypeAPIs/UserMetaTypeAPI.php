<?php

declare(strict_types=1);

namespace PoPSchema\UserMetaWP\TypeAPIs;

use PoPSchema\UserMeta\TypeAPIs\UserMetaTypeAPIInterface;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class UserMetaTypeAPI implements UserMetaTypeAPIInterface
{
    public function getUserMeta(string | int $userID, string $key, bool $single = false): mixed
    {
        return \get_user_meta($userID, $key, $single);
    }
}
