<?php

namespace Custom\ApiDemo\Model;

use Custom\ApiDemo\Api\DemoMemberRepositoryInterface;
use Custom\DemoDb\Model\ResourceModel\DemoMember\CollectionFactory;
use Custom\ApiDemo\Model\DemoFactory;
use Custom\DemoDb\Model\ResourceModel\DemoMember as demoResourseModel;
use Magento\Framework\Api\SearchCriteriaInterface;
use Custom\ApiDemo\Api\Data\DemoMemberSearchResultInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class DemoMemberRepository implements DemoMemberRepositoryInterface
{
    protected $collectionFactory;
    protected $demoFactory;
    protected $demoResourseModel;
    protected $resultInterfaceFactory;
    protected $collectionProcessor;

    public function __construct(
        CollectionFactory $collectionFactory,
        DemoFactory $demoFactory,
        demoResourseModel $demoResourseModel,
        DemoMemberSearchResultInterfaceFactory $resultInterfaceFactory,
        CollectionProcessor $collectionProcessor
    ){
        $this->collectionFactory = $collectionFactory;
        $this->demoFactory = $demoFactory;
        $this->demoResourseModel = $demoResourseModel;
        $this->resultInterfaceFactory = $resultInterfaceFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface[]|\Magento\Framework\DataObject[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|Demo
     */
    public function getListById($id)
    {
        $demo = $this->demoFactory->create();
        return $demo->load($id);
    }

    /**
     * @param \Custom\ApiDemo\Api\Data\DemoMemberInterface $demoMember
     * @return \Custom\ApiDemo\Api\Data\DemoMemberInterface|void
     */
    public function saveDemo(\Custom\ApiDemo\Api\Data\DemoMemberInterface $demoMember)
    {
        if ($demoMember->getId() == null){
            $this->demoResourseModel->save($demoMember);
            return $demoMember;
        }else{
            $newDemo = $this->demoFactory->create()->load($demoMember->getId());
            foreach ($demoMember->getData() as $key=>$value){
                $newDemo->setData($key,$value);
            }
            $this->demoResourseModel->save($newDemo);
            return $newDemo;
        }
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteById($id)
    {
        $demo = $this->demoFactory->create()->load($id);
        $demo->delete();
    }

    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection  = $this->demoFactory->create()->getCollection();
        $this->collectionProcessor->process($searchCriteria,$collection);
        $searchResults = $this->resultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
