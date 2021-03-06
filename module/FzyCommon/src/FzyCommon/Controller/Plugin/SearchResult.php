<?php

namespace FzyCommon\Controller\Plugin;

use FzyCommon\Service\Search\ResultProviderInterface;

class SearchResult extends Base
{
    public function __invoke(ResultProviderInterface $result)
    {
        /* @var $resultService \FzyCommon\Service\Search\Result */
        $resultService = $this->getService('FzyCommon\Service\Search\Result');

        return $resultService->generatePageResult($result);
    }
}
