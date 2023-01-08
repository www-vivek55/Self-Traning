<?php
namespace Custom\ApiDemo\Api;


use Magento\Framework\Api\SearchCriteriaInterface;

interface DemoMemberRepositoryInterface
{
    /**
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface[]
     */
    public function getList();

    /**
     * @param int $id
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function getListById($id);

    /**
     * @param int $id
     * @return void
     */
    public function deleteById($id);

    /**
     * @param \Custom\ApiDemo\Api\Data\DemoMemberInterface $demoMember
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface
     */
    public function saveDemo(\Custom\ApiDemo\Api\Data\DemoMemberInterface $demoMember);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Custom\ApiDemo\Api\Data\DemoMemberSearchResultInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria);
}
